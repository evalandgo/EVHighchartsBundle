<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;


class DialGaugePlotOptions extends Base{
    
    protected $backgroundColor = 'black';
    
    protected $baseLength = '70%';
    
    protected $baseWidth = 3;
    
    protected $borderColor = 'silver';
    
    protected $borderWidth = 0;
    
    protected $radius = '80%';
    
    protected $rearLength = '10%';
    
    protected $topWidth = 1;
    
    public function getBackgroundColor() {
        return $this->backgroundColor;
    }

    public function setBackgroundColor($backgroundColor) {
        $this->backgroundColor = $backgroundColor;
    }

    public function getBaseLength() {
        return $this->baseLength;
    }

    public function setBaseLength($baseLength) {
        $this->baseLength = $baseLength;
    }

    public function getBaseWidth() {
        return $this->baseWidth;
    }

    public function setBaseWidth($baseWidth) {
        $this->baseWidth = $baseWidth;
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

    public function getRearLength() {
        return $this->rearLength;
    }

    public function setRearLength($rearLength) {
        $this->rearLength = $rearLength;
    }

    public function getTopWidth() {
        return $this->topWidth;
    }

    public function setTopWidth($topWidth) {
        $this->topWidth = $topWidth;
    }

    
}
?>
