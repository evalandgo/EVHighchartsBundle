<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;

class Background extends Base{
    
    protected $backgroundColor;
    
    protected $innerRadius;
    
    protected $outerRadius;
    
    protected $shape;
    
    public function getBackgroundColor() {
        return $this->backgroundColor;
    }

    public function setBackgroundColor($backgroundColor) {
        $this->backgroundColor = $backgroundColor;
    }

    public function getInnerRadius() {
        return $this->innerRadius;
    }

    public function setInnerRadius($innerRadius) {
        $this->innerRadius = $innerRadius;
    }

    public function getOuterRadius() {
        return $this->outerRadius;
    }

    public function setOuterRadius($outerRadius) {
        $this->outerRadius = $outerRadius;
    }

    public function getShape() {
        return $this->shape;
    }

    public function setShape($shape) {
        $this->shape = $shape;
    }

}
?>
