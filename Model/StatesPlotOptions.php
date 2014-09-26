<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;
use EV\HighchartsBundle\Model\HoverStatesPlotOptions;

class StatesPlotOptions extends Base{
    
    protected $hover;
    
    public function __construct()
    {
        $this->hover = new HoverStatesPlotOptions();
    }
    
    public function getHover() {
        return $this->hover;
    }

    public function setHover($hover) {
        $this->hover = $hover;
    }

}

?>
