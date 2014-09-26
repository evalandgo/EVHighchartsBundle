<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;

class HoverStates extends Base{
    
    protected $enabled = true;
    
    protected $fillColor;
    
    protected $lineColor = "#FFFFFF";
    
    protected $lineWidth = 0;
    
    protected $lineWidthPlus = 1;
    
    protected $radius = null;
    
    protected $radiusPlus = 2;
    
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

    public function getLineWidthPlus() {
        return $this->lineWidthPlus;
    }

    public function setLineWidthPlus($lineWidthPlus) {
        $this->lineWidthPlus = $lineWidthPlus;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function getRadiusPlus() {
        return $this->radiusPlus;
    }

    public function setRadiusPlus($radiusPlus) {
        $this->radiusPlus = $radiusPlus;
    }

        
}

?>