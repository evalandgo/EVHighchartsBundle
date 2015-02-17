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

    public function __construct(Themes $theme){
        $this->theme = $theme;
    }    
    
    public function createHighchartsBuilder() {
        return new HighchartsBuilder($this->theme);
    }

    public function createHighchartsFromType(AbstractHighchartsType $highchartsType) {
        $highchartsBuilder = $highchartsType->buildHighcharts(new HighchartsBuilder($this->theme));
        return $highchartsBuilder;
    }
    
}

?>