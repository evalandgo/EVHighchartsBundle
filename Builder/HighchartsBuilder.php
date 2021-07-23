<?php

namespace EV\HighchartsBundle\Builder;

use EV\HighchartsBundle\Model\Highcharts;
use EV\HighchartsBundle\Model\Series;
use EV\HighchartsBundle\Model\HighchartsView;
use EV\HighchartsBundle\Model\Background;
use EV\HighchartsBundle\Model\DataLabelsPlotOptions;
use EV\HighchartsBundle\Model\DataLabelsSeriesPlotOptions;
use EV\HighchartsBundle\Model\LabelsAxis;
use EV\HighchartsBundle\Model\StackLabelAxis;
use EV\HighchartsBundle\Model\YAxis;
use EV\HighchartsBundle\Model\PlotBandsAxis;
use EV\HighchartsBundle\Services\Themes;

use Symfony\Component\Filesystem\Filesystem;

/**
 * Description of HighchartsBuilder
 *
 * @author Nathan
 */
class HighchartsBuilder {

    protected $highcharts;
    
    protected $highchartsView;
    
    protected $themes;
    
    protected $export_url;
    
    public function __construct(Themes $themes,$export_url) {
        $this->highcharts = new Highcharts($export_url);
        $this->themes = $themes;
        $this->export_url = $export_url;
    }
    
    public function getHighcharts(){
        return $this->highcharts;
    }
    
    public function createSeries($name,$data,$arrOptions = null){
        $series = new Series();
        $series->setName($name);
        if(isset($arrOptions['data']))
            $series->addData($data,$arrOptions['data']);
        else
            $series->addData($data);
            
        if(isset($arrOptions['series'])){
            foreach($arrOptions['series'] as $attr => $value){
                $method = "set".ucfirst($attr);
                $series->$method($value);
            }
        }
        
        return $series;
    }

    public function createBackground($color,$innerRadius,$outerRadius,$shape){
        $background = new Background();
        $background->setBackgroundColor($color);
        $background->setInnerRadius($innerRadius);
        $background->setOuterRadius($outerRadius);
        $background->setShape($shape);
        
        return $background;
    }
    
    public function createDataLabelsPlotOptions($arrOptions){
        $dataLabelsDataSeries = new DataLabelsPlotOptions();
        
        foreach($arrOptions as $typeOption => $option){
            $method = "set".ucfirst($typeOption);

            if(method_exists($dataLabelsDataSeries, $method)){
                $dataLabelsDataSeries->$method($option);
            }else{
                return "La méthode ".$method." n'éxiste pas dans Series.php";
            }
        }
        return $dataLabelsDataSeries;
    }
    
    public function createLabelsAxis($format){
        $labelsAxis = new LabelsAxis();
        $labelsAxis->setFormat($format);
        
        return $labelsAxis;
    }
    
    public function createStackLabelsAxis($format){
        $labelsAxis = new StackLabelAxis();
        $labelsAxis->setFormat($format);
        
        return $labelsAxis;
    }
        
    public function createYAxis($title){
        $yAxis = new YAxis();
        $yAxis->setTitle($title);
        
        return $yAxis;
    }
    
    public function createDataLabelsSeriesPlotOptions($arrOptions){
        $dataLabels = new DataLabelsSeriesPlotOptions();
        
        foreach($arrOptions as $typeOption => $option){
            $method = "set".ucfirst($typeOption);

            if(method_exists($dataLabels, $method)){
                $dataLabels->$method($option);
            }else{
                return "La méthode ".$method." n'éxiste pas dans Series.php";
            }
        }
        return $dataLabels;
    }
    
    public function addPlotBandsAxis($axis,$from,$to,$color,$thickness,$title,$align,$vertical,$x,$y){
        $plotBands = new PlotBandsAxis;
        $plotBands->setFrom($from);
        $plotBands->setTo($to);
        $plotBands->setColor($color);
        $plotBands->setThickness($thickness);
        $plotBands->getLabel()->setText($title);
        $plotBands->getLabel()->setAlign($align);
        $plotBands->getLabel()->setVerticalAlign($vertical);
        $plotBands->getLabel()->setX($x);
        $plotBands->getLabel()->setY($y);
        $plotBands->getLabel()->setUseHtml(true);
        
        $axis->addPlotBands($plotBands);
        
        return $this;
    }
    
    public function addYAxis($title){
        $yAxis = $this->createYAxis($title);
        $this->highcharts->addYAxis($yAxis);
        return $this;
    }
    
    public function createView($theme = null) {
        $this->highchartsView = new HighchartsView($this->highcharts,$theme);
        return $this->highchartsView;
    }

     public function getJSON($theme=null)
    {
        $this->highcharts->getLegend()->setUseHTML(false);
        $graphJson = $this->themes->applyTheme($this->createView($theme));

        return $graphJson;
    }
    /**
     * @param string $type Exporting format
     * @param null $theme Theme to apply on the chart
     * @param null $data Json raw data to send (ignores $type)
     * @return array
     */
    public function export($type = 'image/jpeg', $theme = null,$data = null){
        $this->highcharts->getLegend()->setUseHTML(false);
        $graphJson = $this->getJSON($theme)
        if($data===null)
            $data = array('async' => false, 'type' => $type, 'options' => $graphJson, 'scale' => 2);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->export_url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_HEADER,false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_VERBOSE, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_FAILONERROR, true);
        $content = curl_exec($ch);
        $statut = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        return array(
            'status' => $statut,
            'content' => $content,
        );

    }
    
    public function exportOnServer($filename, $type = 'image/jpeg', $theme = null) {
        $fs = new Filesystem();

        $export = $this->export($type, $theme);
        
        if($export['status'] == 200) {
            $fs->dumpFile($filename, $export['content']);
            return true;
        }else{
            //throw new \Exception($export['content'],$export['status']);
        }
        
    }

    /**
     * @param $filename
     * @param $data json string representing the data of the chart
     * @return bool
     *
     * Exports the chart on the server
     */
    public function exportOnServerWithData($filename, $data) {
        $fs = new Filesystem();
        $export = $this->export(null, null,$data);
        if($export['status'] == 200) {
            $fs->dumpFile($filename, $export['content']);
            return true;
        }else{
            throw new \Exception($export['content'],$export['status']);
        }
    }
    
    public function exportImgResource($type = 'image/jpeg', $theme = null) {
        $export = $this->export($type, $theme);
        
        if($export['status'] == 200) {
            return imagecreatefromstring($export['content']);
        }

        return false;
    }
    
}

?>
