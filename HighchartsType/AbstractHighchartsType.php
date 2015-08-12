<?php

namespace EV\HighchartsBundle\HighchartsType;

use EV\HighchartsBundle\Builder\HighchartsBuilder;

use Symfony\Component\DependencyInjection\ContainerAware;

/**
 * Description of AbstractHighchartsType
 *
 * @author Nathan
 */
abstract class AbstractHighchartsType extends ContainerAware{

    abstract protected function buildHighcharts(HighchartsBuilder $highchartsBuilder);

}

?>