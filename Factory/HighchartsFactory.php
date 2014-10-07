<?php

namespace EV\HighchartsBundle\Factory;

use EV\HighchartsBundle\Builder\HighchartsBuilder;
use EV\HighchartsBundle\HighchartsType\AbstractHighchartsType;

/**
 * Description of HighchartsFactory
 *
 * @author Nathan
 */
class HighchartsFactory {

    public function createHighchartsBuilder() {
        return new HighchartsBuilder();
    }

    public function createHighchartsFromType(AbstractHighchartsType $highchartsType) {
        $highchartsBuilder = $highchartsType->buildHighcharts(new HighchartsBuilder());
        return $highchartsBuilder;
    }
    

}

?>