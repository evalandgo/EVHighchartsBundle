<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;

class Pane extends Base{
    
    protected $background = null;
    
    protected $center = array("50%", "50%");
    
    protected $endAngle = null;
    
    protected $startAngle = null;
    
    protected $size = '85%';
    
    public function getBackground() {
        return $this->background;
    }

    public function setBackground($background) {
        $this->background = $background;
    }

    public function getCenter() {
        return $this->center;
    }

    public function setCenter($center) {
        $this->center = $center;
    }

    public function getEndAngle() {
        return $this->endAngle;
    }

    public function setEndAngle($endAngle) {
        $this->endAngle = $endAngle;
    }

    public function getStartAngle() {
        return $this->startAngle;
    }

    public function setStartAngle($startAngle) {
        $this->startAngle = $startAngle;
    }
    
    public function getSize() {
        return $this->size;
    }

    public function setSize($size) {
        $this->size = $size;
    }

}


?>
