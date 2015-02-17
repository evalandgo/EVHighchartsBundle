<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;
use EV\HighchartsBundle\Model\Legend;

class ChartOptions extends Base{
    
    protected $legend;
        
    public function __construct()
    {
        $this->legend = new Legend();
    }
    
    public function getLegend() {
        return $this->legend;
    }

    public function setLegend($legend) {
        $this->legend = $legend;
    }
    
}

?>
