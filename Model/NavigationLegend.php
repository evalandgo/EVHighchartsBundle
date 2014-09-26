<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;

class NavigationLegend extends Base{
    
    protected $activeColor = "#3E576F";
        
    protected $animation = true;
        
    protected $arrowSize = 12;
        
    protected $inactiveColor = "#CCC";
        
    protected $style = null;
        
    public function getActiveColor() {
        return $this->activeColor;
    }

    public function setActiveColor($activeColor) {
        $this->activeColor = $activeColor;
    }

    public function getAnimation() {
        return $this->animation;
    }

    public function setAnimation($animation) {
        $this->animation = $animation;
    }

    public function getArrowSize() {
        return $this->arrowSize;
    }

    public function setArrowSize($arrowSize) {
        $this->arrowSize = $arrowSize;
    }

    public function getInactiveColor() {
        return $this->inactiveColor;
    }

    public function setInactiveColor($inactiveColor) {
        $this->inactiveColor = $inactiveColor;
    }

    public function getStyle() {
        return $this->style;
    }

    public function setStyle($style) {
        $this->style = $style;
    }

}
?>
