<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;
use EV\HighchartsBundle\Model\LabelPlotAxis;

class PlotBandsAxis extends Base{
    
    protected $color =  null;
    
    protected $events =  null;
    
    protected $from =  null;
    
    protected $id =  null;
    
    protected $label;
    
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

}

?>
