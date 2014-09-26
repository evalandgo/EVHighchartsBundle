<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;

class Title extends Base{
    
    protected $align = "center";
    
    protected $floating = false;
    
    protected $margin = 15;
    
    protected $style = array("color" => "#333333", "fontSize" => "18px");
    
    protected $text = null;
    
    protected $useHTML = false;
    
    protected $verticalAlign;
            
    protected $x = 0;
    
    protected $y = 25;
    
    public function __construct($title)
    {
         $this->text = $title;
    }
    
    public function getAlign() {
        return $this->align;
    }

    public function setAlign($align) {
        $this->align = $align;
    }

    public function getFloating() {
        return $this->floating;
    }

    public function setFloating($floating) {
        $this->floating = $floating;
    }

    public function getMargin() {
        return $this->margin;
    }

    public function setMargin($margin) {
        $this->margin = $margin;
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
