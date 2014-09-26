<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;

class LabelPlotAxis extends Base{
    
    protected $align =  "center";
    
    protected $rotation =  0;
    
    protected $style =  null;
    
    protected $text =  null;
    
    protected $textAlign =  null;
    
    protected $useHTML =  false;
    
    protected $verticalAlign =  "top";
    
    protected $x =  null;
    
    protected $y =  null;
    
    public function getAlign() {
        return $this->align;
    }

    public function setAlign($align) {
        $this->align = $align;
    }

    public function getRotation() {
        return $this->rotation;
    }

    public function setRotation($rotation) {
        $this->rotation = $rotation;
    }

    public function getStyle() {
        return $this->style;
    }

    public function setStyle($style) {
        $this->style = $style;
    }

    public function getText() {
        return $this->text;
    }

    public function setText($text) {
        $this->text = $text;
    }

    public function getTextAlign() {
        return $this->textAlign;
    }

    public function setTextAlign($textAlign) {
        $this->textAlign = $textAlign;
    }

    public function getUseHTML() {
        return $this->useHTML;
    }

    public function setUseHTML($useHTML) {
        $this->useHTML = $useHTML;
    }

    public function getVerticalAlign() {
        return $this->verticalAlign;
    }

    public function setVerticalAlign($verticalAlign) {
        $this->verticalAlign = $verticalAlign;
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


}

?>
