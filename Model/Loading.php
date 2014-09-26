<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;

class Loading extends Base{
    
    protected $hideDuration = 100;
    
    protected $labelStyle = array("fontWeight" => "bold", "position" => "relative", "top" => "45%");
    
    protected $showDuration = 100;
    
    protected $style = array("position" => "absolute", "backgroundColor" => "white", "opacity" => "0.5", "textAlign" => "center");
    
    public function getHideDuration() {
        return $this->hideDuration;
    }

    public function setHideDuration($hideDuration) {
        $this->hideDuration = $hideDuration;
    }

    public function getLabelStyle() {
        return $this->labelStyle;
    }

    public function setLabelStyle($labelStyle) {
        $this->labelStyle = $labelStyle;
    }

    public function getShowDuration() {
        return $this->showDuration;
    }

    public function setShowDuration($showDuration) {
        $this->showDuration = $showDuration;
    }

    public function getStyle() {
        return $this->style;
    }

    public function setStyle($style) {
        $this->style = $style;
    }

}

?>
