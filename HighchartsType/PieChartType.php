<?php

namespace EV\HighchartsBundle\HighchartsType;

use EV\HighchartsBundle\HighchartsType\AbstractHighchartsType;
use EV\HighchartsBundle\Builder\HighchartsBuilder;

/**
 * Description of PieChartType
 *
 * @author Nathan
 */
class PieChartType extends AbstractHighchartsType{
        
    protected $dateSeries;
    
    protected $additionalOptions;
    
    public function __construct(){
        
    }
    
    public function buildHighcharts(HighchartsBuilder $highchartsBuilder,$dataSeries = null,$additionalOptions = null) {

        $this->dateSeries = $dataSeries;
        $this->additionalOptions = $additionalOptions;
        
        $highcharts = $highchartsBuilder->getHighcharts();
        
        $highcharts->getChart()->setType('pie');
        
        $highcharts->getChart()->setPlotBackgroundColor(null);
        $highcharts->getChart()->setPlotBorderWidth(0);
        $highcharts->getChart()->setPlotShadow(false);
        
        if(isset($this->additionalOptions['title']))
            $highcharts->setTitle($this->additionalOptions['title']);
        
        $arrOptionSeries = array();
        $arrOptionSeries['series'] = array('type'=>'pie');
        $serie = $highchartsBuilder->createSeries($this->dateSeries['name'],$this->dateSeries['data'],$arrOptionSeries);
        $highcharts->addSeries($serie);
        
        if(isset($this->additionalOptions['subtitle']))
            $highcharts->setSubtitle($this->additionalOptions['subtitle']);
        
        $plotOptions = $highcharts->getPlotOptions();

        $pie = $plotOptions->getPie();
        $pie->setAllowPointSelect(true);
        $pie->setCursor('pointer');
        
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