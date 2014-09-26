<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;
use EV\HighchartsBundle\Model\DataLabelsPlotOptions;
use EV\HighchartsBundle\Model\StatesPlotOptions;
use EV\HighchartsBundle\Model\TooltipPlotOptions;

/**
 * Description of SolidgaugePlotOptions
 *
 * @author Nathan
 * 
 * TODO  =  - $event & Methods
 *          - $point & Methods
 */
class SolidgaugePlotOptions extends Base{
    
    protected $animation = true;
    
    protected $cursor = null;
    
    protected $dataLabels;
    
    protected $enableMouseTracking = true;
    
    //protected $events;
    
    protected $overshoot = 0;
    
    //protected $point;
    
    protected $selected = false;
    
    protected $showCheckbox = false;
    
    protected $showInLegend = null;
    
    protected $states;
    
    protected $stickyTracking = true;
    
    protected $tooltip;
    
    protected $visible = true;
    
    protected $wrap = true;
    
    public function __construct()
    {
        $this->dataLabels = new DataLabelsPlotOptions();
        $this->states = new StatesPlotOptions();
        $this->tooltip = new TooltipPlotOptions();     
    }
    
    public function getAnimation() {
        return $this->animation;
    }

    public function setAnimation($animation) {
        $this->animation = $animation;
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

    public function getEnableMouseTracking() {
        return $this->enableMouseTracking;
    }

    public function setEnableMouseTracking($enableMouseTracking) {
        $this->enableMouseTracking = $enableMouseTracking;
    }

    public function getOvershoot() {
        return $this->overshoot;
    }

    public function setOvershoot($overshoot) {
        $this->overshoot = $overshoot;
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
