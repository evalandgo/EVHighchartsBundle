<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;

class TitleAxis extends Base{
    
    protected $align = "middle";
    
    protected $enabled = "middle";
    
    protected $margin = 40;
    
    protected $offset = null;
    
    protected $rotation = 270;
    
    protected $style = array("color" => "#707070", "fontWeight" => "bold");
    
    protected $text = null;
    
    public function __construct()
    {
         
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

    public function getMargin() {
        return $this->margin;
    }

    public function setMargin($margin) {
        $this->margin = $margin;
    }

    public function getOffset() {
        return $this->offset;
    }

    public function setOffset($offset) {
        $this->offset = $offset;
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

}

?>
