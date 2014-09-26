<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;

class HaloStatesPlotOptions extends Base{
    
    protected $attributes;
    
    /*protected $opacity =  0.25;
    
    protected $size =  10;*/
    
    public function getAttributes() {
        return $this->attributes;
    }

    public function setAttributes($attributes) {
        $this->attributes = $attributes;
    }

}
?>
