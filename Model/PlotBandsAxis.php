<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;
use EV\HighchartsBundle\Model\LabelPlotAxis;

class PlotBandsAxis extends Base{
    
    protected $borderColor = null;
    
    protected $borderWidth = 0;
    
    protected $color =  null;
    
    protected $events =  null;
    
    protected $from =  null;
    
    protected $id =  null;
    
    protected $innerRadius = '100%';
    
    protected $label;
    
    protected $outerRadius = 0;
    
    protected $thickness = 10;
    
    protected $to =  null;
    
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

    public function getEvents() {
        return $this->events;
    }

    public function setEvents($events) {
        $this->events = $events;
    }

    public function getFrom() {
        return $this->from;
    }

    public function setFrom($from) {
        $this->from = $from;
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

    public function getTo() {
        return $this->to;
    }

    public function setTo($to) {
        $this->to = $to;
    }

    public function getZIndex() {
        return $this->zIndex;
    }

    public function setZIndex($zIndex) {
        $this->zIndex = $zIndex;
    }

    public function getBorderColor() {
        return $this->borderColor;
    }

    public function setBorderColor($borderColor) {
        $this->borderColor = $borderColor;
    }

    public function getBorderWidth() {
        return $this->borderWidth;
    }

    public function setBorderWidth($borderWidth) {
        $this->borderWidth = $borderWidth;
    }

    public function getInnerRadius() {
        return $this->innerRadius;
    }

    public function setInnerRadius($innerRadius) {
        $this->innerRadius = $innerRadius;
    }

    public function getOuterRadius() {
        return $this->outerRadius;
    }

    public function setOuterRadius($outerRadius) {
        $this->outerRadius = $outerRadius;
    }

    public function getThickness() {
        return $this->thickness;
    }

    public function setThickness($thickness) {
        $this->thickness = $thickness;
    }

}

?>
