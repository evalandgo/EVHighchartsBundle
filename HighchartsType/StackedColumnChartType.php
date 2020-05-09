<?php

namespace EV\HighchartsBundle\HighchartsType;

use EV\HighchartsBundle\HighchartsType\AbstractHighchartsType;
use EV\HighchartsBundle\Builder\HighchartsBuilder;
use Symfony\Component\Translation\DataCollectorTranslator as Translator;

/**
 * Description of StackedColumnChartType
 *
 * @author Nathan
 */
class StackedColumnChartType extends AbstractHighchartsType{
    
    protected $categories;
    
    protected $titleY;
    
    protected $dataSeries;
    
    protected $additionalOptions;
    
    protected $formatLabelStackedColumn;
    
    public function __construct(Translator $translator){
        parent::__construct($translator);
    }
    
    public function buildHighcharts(HighchartsBuilder $highchartsBuilder,$categories = null,$titleY = null,$dataSeries = null,$formatLabelStackedColumn = null,$additionalOptions = null) {
                        
        $this->categories = $categories;
        $this->titleY = $titleY;
        $this->dataSeries = $dataSeries;
        $this->additionalOptions = $additionalOptions;
        $this->formatLabelStackedColumn = $formatLabelStackedColumn;
        
        $highcharts = $highchartsBuilder->getHighcharts();
        
        $highcharts->getChart()->setType('column');
        
         if(isset($this->additionalOptions['title']))
            $highcharts->setTitle($this->additionalOptions['title']);
        
        $highcharts->getXAxis()->setCategories($this->categories);
        
        if(isset($this->additionalOptions['labelStackColumnStep'])){
            $highcharts->getXAxis()->getLabels()->setStep($this->additionalOptions['labelStackColumnStep']);
        }
        
        $labelStackColumn = $highchartsBuilder->createLabelsAxis($this->formatLabelStackedColumn); 
        $labelStackColumn->setX(-15);
        
        $yAxis = $highchartsBuilder->createYAxis($this->titleY);
        $yAxis->setLabels($labelStackColumn);
        $yAxis->setLineWidth(1);
        $yAxis->getTitle()->setAlign('high');
        $yAxis->getTitle()->setOffset(0);
        $yAxis->getTitle()->setRotation(0);
        $yAxis->getTitle()->setY(-20);
        $yAxis->getTitle()->setX(0);
        $highcharts->addYAxis($yAxis);
        
        foreach($this->dataSeries as $series){
            $serie = $highchartsBuilder->createSeries($series['name'],$series['data'],$this->additionalOptions);
            $highcharts->addSeries($serie);
        }
        
        if(isset($this->additionalOptions['subtitle']))
            $highcharts->setSubtitle($this->additionalOptions['subtitle']);
        
        $yAxis = $highcharts->getYAxis();
        
        $stackLabels = $yAxis[0]->getStackLabels();
        $stackLabels->setEnabled(true);
        
        $column = $highcharts->getPlotOptions()->getColumn();
        
        if(isset($this->additionalOptions['stackingType']))
            $column->setStacking($this->additionalOptions['stackingType']);
        else
            $column->setStacking('normal');
        
        
        return $highchartsBuilder;
    }
    
    public function getCategories() {
        return $this->categories;
    }

    public function setCategories($categories) {
        $this->categories = $categories;
    }

    public function getTitleY() {
        return $this->titleY;
    }

    public function setTitleY($titleY) {
        $this->titleY = $titleY;
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

    /**
     * @return mixed
     */
    public function getFormatLabelStackedColumn()
    {
        return $this->formatLabelStackedColumn;
    }

    /**
     * @param mixed $formatLabelStackedColumn
     */
    public function setFormatLabelStackedColumn($formatLabelStackedColumn)
    {
        $this->formatLabelStackedColumn = $formatLabelStackedColumn;
    }

}

?>