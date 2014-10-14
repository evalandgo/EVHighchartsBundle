<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;

class StackLabelAxis extends Base{
    
    protected $align =  null;
    
    protected $enabled;
    
    protected $format =  '{total}';
    
    protected $formatter =  null;
    
    protected $rotation =  0;
    
    protected $style =  null;
    
    protected $textAlign =  null;
    
    protected $useHTML =  false;
    
    protected $verticalAlign =  null;
    
    protected $x =  null;
    
    public function __construct($enabled) {
        $this->enabled = $enabled;
    }
    
    public function getAlign() {
        return $this->align;
    }

    public function setAlign($align) {
        $this->align = $align;
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


}

?>
