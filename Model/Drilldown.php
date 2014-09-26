<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;
use EV\HighchartsBundle\Model\DrilldownButton;

class Drilldown extends Base{
    
    protected $activeAxisLabelStyle = null;
    
    protected $activeDataLabelStyle = null;
    
    protected $animation;
    
    protected $drillUpButton;
    
    protected $series = null;
    
    public function __construct()
    {
        $this->drillUpButton = new DrilldownButton();
    }
    
    public function getActiveAxisLabelStyle() {
        return $this->activeAxisLabelStyle;
    }

    public function setActiveAxisLabelStyle($activeAxisLabelStyle) {
        $this->activeAxisLabelStyle = $activeAxisLabelStyle;
    }

    public function getActiveDataLabelStyle() {
        return $this->activeDataLabelStyle;
    }

    public function setActiveDataLabelStyle($activeDataLabelStyle) {
        $this->activeDataLabelStyle = $activeDataLabelStyle;
    }

    public function getAnimation() {
        return $this->animation;
    }

    public function setAnimation($animation) {
        $this->animation = $animation;
    }

    public function getDrillUpButton() {
        return $this->drillUpButton;
    }

    public function setDrillUpButton($drillUpButton) {
        $this->drillUpButton = $drillUpButton;
    }

    public function getSeries() {
        return $this->series;
    }

    public function setSeries($series) {
        $this->series = $series;
    }
    
}

?>
