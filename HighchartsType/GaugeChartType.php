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
    
    protected $arrPlotBands;
    
    protected $additionalOptions;
    
    public function __construct(){
        
    }
    
    public function buildHighcharts(HighchartsBuilder $highchartsBuilder,$valMin = null,$valMax = null,$titleY = null,$dataSeries = null, $arrPlotBands = null,$additionalOptions = null) {
        
        $this->titleY = $titleY;
        $this->valMin = $valMin;
        $this->valMax = $valMax;
        $this->dateSeries = $dataSeries;
        $this->arrPlotBands = $arrPlotBands;
        $this->additionalOptions = $additionalOptions;
        
        $highcharts = $highchartsBuilder->getHighcharts();
        
        $chart = $highcharts->getChart();
        $chart->setType('gauge');
        $chart->setPlotBackgroundColor(null);
        $chart->setPlotBackgroundImage(null);
        $chart->setPlotBorderWidth(0);
        $chart->setPlotShadow(false);
        /*$chart->setMarginLeft(20);
        $chart->setMarginRight(30);*/
        
        if(isset($this->additionalOptions['chartHeight']))
            $highcharts->getChart()->setHeight($this->additionalOptions['chartHeight']);
        
        if(isset($this->additionalOptions['title']))
            $highcharts->setTitle($this->additionalOptions['title']);
                        
        $yAxis = $highchartsBuilder->createYAxis($this->titleY);
                        
        /*$yAxis->getLabels()->setX(-5);
        $yAxis->getLabels()->setFormat('{value}');
        $yAxis->getLabels()->setUseHtml(true);*/
        $yAxis->getLabels()->setEnabled(false);
                
        $yAxis->setTickPositions(array(0,20,50,80,100));
        $yAxis->setMinorTickLength(0);
        $yAxis->setMin($this->valMin);
        $yAxis->setMax($this->valMax);
            
        
        
        
        foreach($this->arrPlotBands as $plotBand){
            $highchartsBuilder->addPlotBandsAxis($yAxis,$plotBand['from'],$plotBand['to'],$plotBand['color'],'50%',$plotBand['label'],$plotBand['align'],$plotBand['verticalAlign']);
        }
     
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
            $pane->setCenter(array('50%','65%'));
        
        $pane->setStartAngle(-90);
        $pane->setEndAngle(90);
        
        $pane->setBackground(null);
             
        $plotOptions = $highcharts->getPlotOptions();
        $gauge = $plotOptions->getGauge();
        $gauge->getDataLabels()->setEnabled(false);
        
        $dial = $gauge->getDial();
        $dial->setBaseLength('0%');
        $dial->setBaseWidth(10);
        $dial->setRadius('100%');
        $dial->setRearLength('0%');
        $dial->settopWidth(1);
                
        $highcharts->getTooltip()->setEnabled(false);
        
        if(isset($this->additionalOptions['subtitle']))
            $highcharts->setSubtitle($this->additionalOptions['subtitle']);
        
        $arrOptions = array('y' => 20);
        $dataLabelsDataSeries = $highchartsBuilder->createDataLabelsAdvanced($arrOptions);
        
        if(isset($this->additionalOptions['valueFormat']))
            $dataLabelsDataSeries->setFormat('<div style="text-align:center"><span style="font-size:25px;color:black ">'.$this->additionalOptions['valueFormat'].'</span><br/>');
        else
            $dataLabelsDataSeries->setFormat('<div style="text-align:center"><span style="font-size:25px;color:black ">{y}</span><br/>');   
        
        $arrOptionSeries = array();
        $arrOptionSeries['data'] = array("dataLabels"=>$dataLabelsDataSeries);
        $serie = $highchartsBuilder->createSeries($this->dateSeries['name'],$this->dateSeries['data'],$arrOptionSeries);
        
        $highcharts->addSeries($serie);
        
        //$highcharts->getLegend()->setEnabled(false);
        
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