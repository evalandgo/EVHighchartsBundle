<?php

namespace EV\HighchartsBundle\Builder;

use EV\HighchartsBundle\Model\Highcharts;
use EV\HighchartsBundle\Model\Series;
use EV\HighchartsBundle\Model\HighchartsView;
use EV\HighchartsBundle\Model\Background;
use EV\HighchartsBundle\Model\DataLabelsPlotOptions;
use EV\HighchartsBundle\Model\LabelsAxis;
use EV\HighchartsBundle\Model\YAxis;

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
        
    public function createYAxis($title){
        $yAxis = new YAxis();
        $yAxis->setTitle($title);
        
        return $yAxis;
    }
    
    public function createView($theme = null) {
        $this->highchartsView = new HighchartsView($this->highcharts,$theme);
        return $this->highchartsView;
    }
    
}

?>