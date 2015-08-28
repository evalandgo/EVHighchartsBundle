<?php

namespace EV\HighchartsBundle\HighchartsType;

use EV\HighchartsBundle\Builder\HighchartsBuilder;
use Symfony\Component\Translation\Translator;

/**
 * Description of AbstractHighchartsType
 *
 * @author Nathan
 */
abstract class AbstractHighchartsType {

    protected $translator;
    
    protected $months;
    
    protected $days;
    
    public function __construct(Translator $translator) {
        $this->translator = $translator;
        $this->days = array(1=>$this->translator->trans('day.min.2', array(), 'HighchartsBundle_Type'),2=>$this->translator->trans('day.min.3', array(), 'HighchartsBundle_Type'),3=>$this->translator->trans('day.min.4', array(), 'HighchartsBundle_Type'),4=>$this->translator->trans('day.min.5', array(), 'HighchartsBundle_Type'),5=>$this->translator->trans('day.min.6', array(), 'HighchartsBundle_Type'),6=>$this->translator->trans('day.min.7', array(), 'HighchartsBundle_Type'),7=>$this->translator->trans('day.min.1', array(), 'HighchartsBundle_Type'),); 
        $this->months = array('',$this->translator->trans('month.min.1', array(), 'HighchartsBundle_Type'),$this->translator->trans('month.min.2', array(), 'HighchartsBundle_Type'),$this->translator->trans('month.min.3', array(), 'HighchartsBundle_Type'),$this->translator->trans('month.min.4', array(), 'HighchartsBundle_Type'),$this->translator->trans('month.min.5', array(), 'HighchartsBundle_Type'),$this->translator->trans('month.min.6', array(), 'HighchartsBundle_Type'),$this->translator->trans('month.min.7', array(), 'HighchartsBundle_Type'),$this->translator->trans('month.min.8', array(), 'HighchartsBundle_Type'),$this->translator->trans('month.min.9', array(), 'HighchartsBundle_Type'),$this->translator->trans('month.min.10', array(), 'HighchartsBundle_Type'),$this->translator->trans('month.min.11', array(), 'HighchartsBundle_Type'),$this->translator->trans('month.min.12', array(), 'HighchartsBundle_Type'));     
    }
    
    abstract protected function buildHighcharts(HighchartsBuilder $highchartsBuilder);
}

?>