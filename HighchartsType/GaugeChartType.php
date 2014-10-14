<?php

namespace EV\HighchartsBundle\HighchartsType;

use EV\HighchartsBundle\HighchartsType\AbstractHighchartsType;
use EV\HighchartsBundle\Builder\HighchartsBuilder;

/**
 * Description of GaugeChartType
 *
 * @author Nathan
 */
class GaugeChartType extends AbstractHighchartsType{
       
    protected $titleY;
    
    protected $dateSeries;
    
    protected $valMin;
    
    protected $valMax;
    
    protected $additionalOptions;
    
    public function __construct(){
        
    }
    
    public function buildHighcharts(HighchartsBuilder $highchartsBuilder,$valMin = null,$valMax = null,$titleY = null,$dataSeries = null,$additionalOptions = null) {
        
        $this->titleY = $titleY;
        $this->valMin = $valMin;
        $this->valMax = $valMax;
        $this->dateSeries = $dataSeries;
        $this->additionalOptions = $additionalOptions;
        
        $highcharts = $highchartsBuilder->getHighcharts();
        
        $highcharts->getChart()->setType('solidgauge');
        
        if(isset($this->additionalOptions['chartHeight']))
            $highcharts->getChart()->setHeight($this->additionalOptions['chartHeight']);
        
        if(isset($this->additionalOptions['title']))
            $highcharts->setTitle($this->additionalOptions['title']);
                        
        $yAxis = $highchartsBuilder->createYAxis($this->titleY);
        
        $arrayColor = array();
        if(isset($this->additionalOptions['color'])){
            foreach($this->additionalOptions['color'] as $arrColor){
                $arrayColor[] = array($arrColor['limit'],$arrColor['codeColor']);
            }
            $yAxis->setStops($arrayColor);
        }else{
            $yAxis->setStops(array(array(0.1,'#55BF3B'),array(0.5,'#DDDF0D'),array(0.9,'#DF5353')));
        }
        
        $yAxis->setLineWidth(0);
        $yAxis->setMinorTickInterval(null);
        $yAxis->setTickPixelInterval(72);
        $yAxis->setTickWidth(0);
        $yAxis->setMin($this->valMin);
        $yAxis->setMax($this->valMax);
        $yAxis->getLabels()->setEnabled(false);
        $yAxis->getLabels()->setY(20);
        $yAxis->setGridLineColor("#0000ffff");
        
        if(isset($this->additionalOptions['noLabels'])){     
            $yAxis->setShowFirstLabel(false);
            $yAxis->setShowLastLabel(false);
        }
           
        $highcharts->addYAxis($yAxis);
        
        $pane = $highcharts->getPane();
        
        if(isset($this->additionalOptions['paneCenter']))
            $pane->setCenter($this->additionalOptions['paneCenter']);
        else
            $pane->setCenter(array('50%','85%'));
        
        $pane->setStartAngle(-90);
        $pane->setEndAngle(90);
        
        $background = $highchartsBuilder->createBackground("#EEE",'60%','100%','arc');
        $pane->setBackground($background);
                
        $dataLabels = $highcharts->getPlotOptions()->getSolidGauge()->getDataLabels();
        $dataLabels->sety(5);
        $dataLabels->setBorderWidth(0);
        $dataLabels->setUseHTML(true);
        
        $highcharts->getTooltip()->setEnabled(false);
        
        if(isset($this->additionalOptions['subtitle']))
            $highcharts->setSubtitle($this->additionalOptions['subtitle']);
     
        $dataLabelsDataSeries = $highchartsBuilder->createDataLabelsPlotOptions(20);
        
        if(isset($this->additionalOptions['valueFormat']))
            $dataLabelsDataSeries->setFormat('<div style="text-align:center"><span style="font-size:25px;color:black ">'.$this->additionalOptions['valueFormat'].'</span><br/>');
        else
            $dataLabelsDataSeries->setFormat('<div style="text-align:center"><span style="font-size:25px;color:black ">{y}</span><br/>');   
        
        $arrOptionSeries = array();
        $arrOptionSeries['data'] = array("dataLabels"=>$dataLabelsDataSeries);
        $serie = $highchartsBuilder->createSeries($this->dateSeries['name'],$this->dateSeries['data'],$arrOptionSeries);
        
        $highcharts->addSeries($serie);
        
        $highcharts->getLegend()->setEnabled(false);

        return $highchartsBuilder;
    }
    
    public function getTitleY() {
        return $this->titleY;
    }

    public function setTitleY($titleY) {
        $this->titleY = $titleY;
    }

    public function getDateSeries() {
        return $this->dateSeries;
    }

    public function setDateSeries($dateSeries) {
        $this->dateSeries = $dateSeries;
    }

    public function getValMin() {
        return $this->valMin;
    }

    public function setValMin($valMin) {
        $this->valMin = $valMin;
    }

    public function getValMax() {
        return $this->valMax;
    }

    public function setValMax($valMax) {
        $this->valMax = $valMax;
    }

    public function getAdditionalOptions() {
        return $this->additionalOptions;
    }

    public function setAdditionalOptions($additionalOptions) {
        $this->additionalOptions = $additionalOptions;
    }

}

?>