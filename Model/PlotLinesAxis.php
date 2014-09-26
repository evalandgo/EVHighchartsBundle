<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;
use EV\HighchartsBundle\Model\LabelPlotAxis;

class PlotLinesAxis extends Base{
    
    protected $color =  null;
    
    protected $dashStyle =  null;
    
    protected $events =  null;
    
    protected $id =  null;
    
    protected $label;
    
    protected $value =  null;
    
    protected $width =  null;
    
    protected $zIndex =  null;

    public function __construct()
    {
        $this->label = new LabelPlotAxis();
    }
    
    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getDashStyle() {
        return $this->dashStyle;
    }

    public function setDashStyle($dashStyle) {
        $this->dashStyle = $dashStyle;
    }

    public function getEvents() {
        return $this->events;
    }

    public function setEvents($events) {
        $this->events = $events;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getLabel() {
        return $this->label;
    }

    public function setLabel($label) {
        $this->label = $label;
    }

    public function getValue() {
        return $this->value;
    }

    public function setValue($value) {
        $this->value = $value;
    }

    public function getWidth() {
        return $this->width;
    }

    public function setWidth($width) {
        $this->width = $width;
    }

    public function getZIndex() {
        return $this->zIndex;
    }

    public function setZIndex($zIndex) {
        $this->zIndex = $zIndex;
    }

    
}
?>
