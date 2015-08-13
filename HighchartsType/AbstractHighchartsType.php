<?php

namespace EV\HighchartsBundle\HighchartsType;

use EV\HighchartsBundle\Builder\HighchartsBuilder;

/**
 * Description of AbstractHighchartsType
 *
 * @author Nathan
 */
abstract class AbstractHighchartsType {

    abstract protected function buildHighcharts(HighchartsBuilder $highchartsBuilder);
}

?>