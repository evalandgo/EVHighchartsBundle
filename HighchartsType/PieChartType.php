<?php

namespace EV\HighchartsBundle\HighchartsType;

use EV\HighchartsBundle\HighchartsType\AbstractHighchartsType;
use EV\HighchartsBundle\Builder\HighchartsBuilder;
use EV\HighchartsBundle\Model\DataLabelsPiePlotOptions;
use Symfony\Component\Translation\Translator;

/**
 * Description of PieChartType
 *
 * @author Nathan
 */
class PieChartType extends AbstractHighchartsType{
        
    protected $dataSeries;
    
    protected $additionalOptions;
    
    public function __construct(Translator $translator){
        parent::__construct($translator);
    }
    
    public function buildHighcharts(HighchartsBuilder $highchartsBuilder,$dataSeries = null,$additionalOptions = null) {

        $this->dataSeries = $dataSeries;
        $this->additionalOptions = $additionalOptions;
        
        $highcharts = $highchartsBuilder->getHighcharts();
        
        $highcharts->getChart()->setType('pie');
        
        $highcharts->getChart()->setPlotBackgroundColor(null);
        $highcharts->getChart()->setPlotBorderWidth(0);
        $highcharts->getChart()->setPlotShadow(false);
        
        if(isset($this->additionalOptions['legendWidth']))
            $highcharts->getLegend()->setWidth($this->additionalOptions['legendWidth']);
        
        if(isset($this->additionalOptions['legendX']))
            $highcharts->getLegend()->setX($this->additionalOptions['legendX']);
        
        if(isset($this->additionalOptions['title']))
            $highcharts->setTitle($this->additionalOptions['title']);
        
        $arrOptionSeries = array();
        $arrOptionSeries['series'] = array('type'=>'pie');
        
        if(isset($this->additionalOptions['data']) && isset($this->additionalOptions['data']['labels']) ){
            $dataLabels = new DataLabelsPiePlotOptions();
            $dataLabels->setEnabled($this->additionalOptions['data']['labels']);
            $arrOptionSeries['data'] = array('dataLabels'=>$dataLabels);
        }
        
        $serie = $highchartsBuilder->createSeries($this->dataSeries['name'],$this->dataSeries['data'],$arrOptionSeries);
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
        
        $highcharts->getLegend()->setX(35);

        return $highchartsBuilder;
    }
    
    public function getDataSeries() {
        return $this->dataSeries;
    }

    public function setDataSeries($dataSeries) {
        $this->dataSeries = $dataSeries;
    }

    public function getAdditionalOptions() {
        return $this->additionalOptions;
    }

    public function setAdditionalOptions($additionalOptions) {
        $this->additionalOptions = $additionalOptions;
    }


}

?>