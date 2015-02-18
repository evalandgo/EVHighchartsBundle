<?php

namespace EV\HighchartsBundle\Builder;

use EV\HighchartsBundle\Model\Highcharts;
use EV\HighchartsBundle\Model\Series;
use EV\HighchartsBundle\Model\HighchartsView;
use EV\HighchartsBundle\Model\Background;
use EV\HighchartsBundle\Model\DataLabelsPlotOptions;
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
    
    public function __construct(Themes $themes) {
        $this->highcharts = new Highcharts();
        $this->themes = $themes;
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
    
    public function createDataLabelsPlotOptions($y){
        $dataLabelsDataSeries = new DataLabelsPlotOptions();
        $dataLabelsDataSeries->setY($y);
        
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
    
    public function createDataLabelsAdvanced($arrOptions){
        $dataLabels = new DataLabelsPlotOptions();
        
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
    
    public function addPlotBandsAxis($axis,$from,$to,$color,$thickness,$title,$align,$vertical){
        $plotBands = new PlotBandsAxis;
        $plotBands->setFrom($from);
        $plotBands->setTo($to);
        $plotBands->setColor($color);
        $plotBands->setThickness($thickness);
        $plotBands->getLabel()->setText($title);
        $plotBands->getLabel()->setAlign($align);
        $plotBands->getLabel()->setVerticalAlign($vertical);
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
    
    public function export($url,$content,$type = 'image/jpeg',$theme = null){
        $fs = new Filesystem();

        $graphJson = $this->themes->applyTheme($this->createView($theme));

        $data = array('async' => false,'type' => $type,'options' => $graphJson,'scale' => 2);

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST'); 
        curl_setopt($ch, CURLOPT_HEADER,false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_VERBOSE, false); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $exec = curl_exec($ch);
        $statut = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if($statut == 200)
            $fs->dumpFile($content,$exec); 

        return $statut;
    }
    
}

?>