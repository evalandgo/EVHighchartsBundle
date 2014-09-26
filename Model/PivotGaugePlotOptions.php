<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;


class PivotGaugePlotOptions extends Base{
    
    protected $backgroundColor = 'black';
    
    protected $borderColor = 'silver';
    
    protected $borderWidth = 0;
    
    protected $radius = 5;
    
    public function getBackgroundColor() {
        return $this->backgroundColor;
    }

    public function setBackgroundColor($backgroundColor) {
        $this->backgroundColor = $backgroundColor;
    }

    public function getBorderColor() {
        return $this->borderColor;
    }

    public function setBorderColor($borderColor) {
        $this->borderColor = $borderColor;
    }

    public function getBorderWidth() {
        return $this->borderWidth;
    }

    public function setBorderWidth($borderWidth) {
        $this->borderWidth = $borderWidth;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

}
?>
