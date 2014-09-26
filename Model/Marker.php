<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;
use EV\HighchartsBundle\Model\StatesMarker;

class Marker extends Base{
    
    protected $enabled = true;
    
    protected $fillColor = null;
    
    protected $lineColor = "#FFFFFF";
    
    protected $lineWidth = 0;
    
    protected $radius = 4;
    
    protected $states;
    
    protected $symbol = null;
    
    public function __construct()
    {
         $this->states = new StatesMarker();
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

    public function getStates() {
        return $this->states;
    }

    public function setStates($states) {
        $this->states = $states;
    }

    public function getSymbol() {
        return $this->symbol;
    }

    public function setSymbol($symbol) {
        $this->symbol = $symbol;
    }

    
}

?>