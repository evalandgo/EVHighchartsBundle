<?php

namespace EV\HighchartsBundle\HighchartsType;

use EV\HighchartsBundle\HighchartsType\AbstractHighchartsType;
use EV\HighchartsBundle\Builder\HighchartsBuilder;

/**
 * Description of DonutChartType
 *
 * @author Nathan
 */
class DonutChartType extends AbstractHighchartsType{
        
    protected $dataSeries;
    
    protected $additionalOptions;
    
    public function __construct(){
        
    }
    
    public function buildHighcharts(HighchartsBuilder $highchartsBuilder,$dataSeries = null,$additionalOptions = null) {

        $this->dataSeries = $dataSeries;
        $this->additionalOptions = $additionalOptions;
        
        $highcharts = $highchartsBuilder->getHighcharts();
        
        $highcharts->getChart()->setRenderTo('container');
        $highcharts->getChart()->setType('pie');
        
        if(isset($this->additionalOptions['title']))
            $highcharts->setTitle($this->additionalOptions['title']);
        
        $arrOptionSeries = array();
        $arrOptionSeries['series'] = array('size'=>'60%','innerSize'=>'20%','showInLegend'=>true);
        
        foreach($this->dataSeries as $series){
            $serie = $highchartsBuilder->createSeries($series['name'],$series['data'],$this->additionalOptions);
            $highcharts->addSeries($serie);
        }
        
        if(isset($this->additionalOptions['subtitle']))
            $highcharts->setSubtitle($this->additionalOptions['subtitle']);
        
        $plotOptions = $highcharts->getPlotOptions();

        $pie = $plotOptions->getPie();
        $pie->setShadow(false);
        
        $dataLabels = $pie->getDatalabels();
        $dataLabels->setEnabled(true);
        $dataLabels->setFormat('<b>{point.percentage:.1f}</b>');

        return $highchartsBuilder;
    }
    
    public function getDateSeries() {
        return $this->dateSeries;
    }

    public function setDateSeries($dateSeries) {
        $this->dateSeries = $dateSeries;
    }

    public function getAdditionalOptions() {
        return $this->additionalOptions;
    }

    public function setAdditionalOptions($additionalOptions) {
        $this->additionalOptions = $additionalOptions;
    }


}

?>