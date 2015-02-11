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

/**
 * Description of HighchartsBuilder
 *
 * @author Nathan
 */
class HighchartsBuilder {

    protected $highcharts;
    
    protected $highchartsView;

    public function __construct() {
        $this->highcharts = new Highcharts();
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
    
    public function export($url,$dir_destination,$type = 'image/jpeg', $async = true){
            $tab_convert = array('image/jpeg' => 'jpg', 'image/png' => 'png', 'application/pdf' => 'pdf', 'image/svg+xml' => 'svg');
                    
            $graphJson = json_encode($this->highcharts);

            $data = array('async' => $async,'type' => $type,'options' => $graphJson);

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST'); 
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $exec = curl_exec($ch);
            $statut = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            $link = $url.'/'.$exec;

            $newLink = $dir_destination."/".uniqid().".".$tab_convert[$type];

            $img = $this->webPath.$newLink;

            file_put_contents($img, file_get_contents($link));   

            return $newLink;
    }
    
}

?>