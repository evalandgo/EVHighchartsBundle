<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;

class SelectStates extends Base{
    
    protected $enabled = true;
    
    protected $fillColor = null;
    
    protected $lineColor = "#000000";
    
    protected $lineWidth = 0;
    
    protected $radius = null;
    
    public function __construct()
    {
         
    }
    
    public function getEnabled() {
        return $this->enabled;
    }

    public function setEnabled($enabled) {
        $this->enabled = $enabled;
    }

    public function getFillColor() {
        return $this->fillColor;
    }

    public function setFillColor($fillColor) {
        $this->fillColor = $fillColor;
    }

    public function getLineColor() {
        return $this->lineColor;
    }

    public function setLineColor($lineColor) {
        $this->lineColor = $lineColor;
    }

    public function getLineWidth() {
        return $this->lineWidth;
    }

    public function setLineWidth($lineWidth) {
        $this->lineWidth = $lineWidth;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }


}

?>