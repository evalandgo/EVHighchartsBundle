<?php

namespace EV\HighchartsBundle\HighchartsType;

use EV\HighchartsBundle\HighchartsType\AbstractHighchartsType;
use EV\HighchartsBundle\Builder\HighchartsBuilder;
use Symfony\Component\Translation\Translator;

/**
 * Description of LineChartType
 *
 * @author Nathan
 */
class LineChartType extends AbstractHighchartsType{
    
    protected $categories;
    
    protected $titleY;
    
    protected $dateSeries;
    
    protected $additionalOptions;
    
    public function __construct(Translator $translator){
        parent::__construct($translator);
    }
    
    public function buildHighcharts(HighchartsBuilder $highchartsBuilder,$categories = null,$titleY = null,$dataSeries = null,$additionalOptions = null) {
                        
        $this->categories = $categories;
        $this->titleY = $titleY;
        $this->dateSeries = $dataSeries;
        $this->additionalOptions = $additionalOptions;
        
        $highcharts = $highchartsBuilder->getHighcharts();
                
        $highcharts->getChart()->setType('line');
        
         if(isset($this->additionalOptions['title']))
            $highcharts->setTitle($this->additionalOptions['title']);
        
        $highcharts->getXAxis()->setCategories($this->categories);       
        
        $yAxis = $highchartsBuilder->createYAxis($this->titleY);
        $highcharts->addYAxis($yAxis);

        foreach($this->dateSeries as $series){
            $serie = $highchartsBuilder->createSeries($series['name'],$series['data'],$this->additionalOptions);
            $highcharts->addSeries($serie);
        }
        
        if(isset($this->additionalOptions['subtitle']))
            $highcharts->setSubtitle($this->additionalOptions['subtitle']);
        
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