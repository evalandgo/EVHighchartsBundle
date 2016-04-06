<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;

class LabelsAxis extends Base{
    
    protected $align;
    
    protected $distance =  15;
    
    protected $enabled =  true;
    
    protected $format =  '{value}';
    
    protected $formatter =  null;
    
    protected $maxStaggerLines =  5;
    
    protected $overflow =  false;
    
    protected $rotation =  0;
    
    protected $staggerLines =  null;
    
    protected $step =  null;
    
    protected $style =  "color: '#6D869F',fontWeight: 'bold'";

    protected $useHTML =  false;

    protected $x = 0;

    protected $y =  null;

    protected $zIndex =  7;
    
    
    public function __construct()
    {
        
    }
    
    public function getAlign() {
        return $this->align;
    }

    public function setAlign($align) {
        $this->align = $align;
    }

    public function getDistance() {
        return $this->distance;
    }

    public function setDistance($distance) {
        $this->distance = $distance;
    }

    public function getEnabled() {
        return $this->enabled;
    }

    public function setEnabled($enabled) {
        $this->enabled = $enabled;
    }

    public function getFormat() {
        return $this->format;
    }

    public function setFormat($format) {
        $this->format = $format;
    }

    public function getFormatter() {
        return $this->formatter;
    }

    public function setFormatter($formatter) {
        $this->formatter = $formatter;
    }

    public function getMaxStaggerLines() {
        return $this->maxStaggerLines;
    }

    public function setMaxStaggerLines($maxStaggerLines) {
        $this->maxStaggerLines = $maxStaggerLines;
    }

    public function getOverflow() {
        return $this->overflow;
    }

    public function setOverflow($overflow) {
        $this->overflow = $overflow;
    }

    public function getRotation() {
        return $this->rotation;
    }

    public function setRotation($rotation) {
        $this->rotation = $rotation;
    }

    public function getStaggerLines() {
        return $this->staggerLines;
    }

    public function setStaggerLines($staggerLines) {
        $this->staggerLines = $staggerLines;
    }

    public function getStep() {
        return $this->step;
    }

    public function setStep($step) {
        $this->step = $step;
    }

    public function getStyle() {
        return $this->style;
    }

    public function setStyle($style) {
        $this->style = $style;
    }

    public function getUseHTML() {
        return $this->useHTML;
    }

    public function setUseHTML($useHTML) {
        $this->useHTML = $useHTML;
    }

    public function getX() {
        return $this->x;
    }

    public function setX($x) {
        $this->x = $x;
    }

    public function getY() {
        return $this->y;
    }

    public function setY($y) {
        $this->y = $y;
    }

    public function getZIndex() {
        return $this->zIndex;
    }

    public function setZIndex($zIndex) {
        $this->zIndex = $zIndex;
    }

}

?>
