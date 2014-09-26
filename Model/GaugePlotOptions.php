<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;
use EV\HighchartsBundle\Model\DataLabelsPlotOptions;
use EV\HighchartsBundle\Model\StatesPlotOptions;
use EV\HighchartsBundle\Model\TooltipPlotOptions;
use EV\HighchartsBundle\Model\DialGaugePlotOptions;
use EV\HighchartsBundle\Model\PivotGaugePlotOptions;

/**
 * Description of GaugePlotOptions
 *
 * @author Nathan
 * 
 * TODO  =  - $event & Methods
 *          - $point & Methods
 */
class GaugePlotOptions extends Base{
    
    protected $animation = true;
    
    protected $color = null;
    
    protected $cursor = null;
    
    protected $dataLabels;
    
    protected $dial;
    
    protected $enableMouseTracking = true;
    
    //protected $events;
    
    protected $linkedTo;
    
    protected $negativeColor = null;
    
    protected $overshoot = 0;
    
    protected $pivot;
    
    //protected $point;
    
    protected $selected = false;
    
    protected $showCheckbox = false;
    
    protected $showInLegend = null;
    
    protected $states;
    
    protected $stickyTracking = true;
    
    protected $threshold = 0;
    
    protected $tooltip;
    
    protected $visible = true;
    
    protected $wrap = true;
    
    public function __construct()
    {
        $this->dataLabels = new DataLabelsPlotOptions();
        $this->states = new StatesPlotOptions();
        $this->tooltip = new TooltipPlotOptions();
        $this->dial = new DialGaugePlotOptions();
        $this->pivot =new PivotGaugePlotOptions();
    }
    
    public function getAnimation() {
        return $this->animation;
    }

    public function setAnimation($animation) {
        $this->animation = $animation;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getCursor() {
        return $this->cursor;
    }

    public function setCursor($cursor) {
        $this->cursor = $cursor;
    }

    public function getDataLabels() {
        return $this->dataLabels;
    }

    public function setDataLabels($dataLabels) {
        $this->dataLabels = $dataLabels;
    }

    public function getDial() {
        return $this->dial;
    }

    public function setDial($dial) {
        $this->dial = $dial;
    }

    public function getEnableMouseTracking() {
        return $this->enableMouseTracking;
    }

    public function setEnableMouseTracking($enableMouseTracking) {
        $this->enableMouseTracking = $enableMouseTracking;
    }

    public function getLinkedTo() {
        return $this->linkedTo;
    }

    public function setLinkedTo($linkedTo) {
        $this->linkedTo = $linkedTo;
    }

    public function getNegativeColor() {
        return $this->negativeColor;
    }

    public function setNegativeColor($negativeColor) {
        $this->negativeColor = $negativeColor;
    }

    public function getOvershoot() {
        return $this->overshoot;
    }

    public function setOvershoot($overshoot) {
        $this->overshoot = $overshoot;
    }

    public function getPivot() {
        return $this->pivot;
    }

    public function setPivot($pivot) {
        $this->pivot = $pivot;
    }

    public function getSelected() {
        return $this->selected;
    }

    public function setSelected($selected) {
        $this->selected = $selected;
    }

    public function getShowCheckbox() {
        return $this->showCheckbox;
    }

    public function setShowCheckbox($showCheckbox) {
        $this->showCheckbox = $showCheckbox;
    }

    public function getShowInLegend() {
        return $this->showInLegend;
    }

    public function setShowInLegend($showInLegend) {
        $this->showInLegend = $showInLegend;
    }

    public function getStates() {
        return $this->states;
    }

    public function setStates($states) {
        $this->states = $states;
    }

    public function getStickyTracking() {
        return $this->stickyTracking;
    }

    public function setStickyTracking($stickyTracking) {
        $this->stickyTracking = $stickyTracking;
    }

    public function getThreshold() {
        return $this->threshold;
    }

    public function setThreshold($threshold) {
        $this->threshold = $threshold;
    }

    public function getTooltip() {
        return $this->tooltip;
    }

    public function setTooltip($tooltip) {
        $this->tooltip = $tooltip;
    }

    public function getVisible() {
        return $this->visible;
    }

    public function setVisible($visible) {
        $this->visible = $visible;
    }

    public function getWrap() {
        return $this->wrap;
    }

    public function setWrap($wrap) {
        $this->wrap = $wrap;
    }

}
?>
