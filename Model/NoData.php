<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;

class NoData extends Base{
    
    protected $attr = null;
    
    protected $position = array("x" => 0, "y" => 0, "align" => "center", "verticalAlign" => "middle");
    
    protected $style = array( "fontSize" => "12px", "fontWeight" => "bold", "color" => "#60606a");
    
    public function getAttr() {
        return $this->attr;
    }

    public function setAttr($attr) {
        $this->attr = $attr;
    }

    public function getPosition() {
        return $this->position;
    }

    public function setPosition($position) {
        $this->position = $position;
    }

    public function getStyle() {
        return $this->style;
    }

    public function setStyle($style) {
        $this->style = $style;
    }
    
}

?>
