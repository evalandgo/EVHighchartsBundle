<?php

namespace EV\HighchartsBundle\Factory;

use EV\HighchartsBundle\Builder\HighchartsBuilder;
use EV\HighchartsBundle\HighchartsType\AbstractHighchartsType;
use EV\HighchartsBundle\Services\Themes;

/**
 * Description of HighchartsFactory
 *
 * @author Nathan
 */
class HighchartsFactory {
    
    protected $theme;
    protected $export_url;

    public function __construct(Themes $theme, $export_url){
        $this->theme = $theme;
        $this->export_url = $export_url;
    }    
    
    public function createHighchartsBuilder() {
        return new HighchartsBuilder($this->theme,$this->export_url);
    }

    public function createHighchartsFromType(AbstractHighchartsType $highchartsType) {
        $highchartsBuilder = $highchartsType->buildHighcharts(new HighchartsBuilder($this->theme,$this->export_url));
        return $highchartsBuilder;
    }
    
}

?>