<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;
use EV\HighchartsBundle\Model\DataLabelsPlotOptions;
use EV\HighchartsBundle\Model\StatesPlotOptions;
use EV\HighchartsBundle\Model\TooltipPlotOptions;
use EV\HighchartsBundle\Model\Marker;

/**
 * Description of ScatterPlotOptions
 *
 * @author Nathan
 * 
 * TODO  =  - $event & Methods
 *          - $point & Methods
 */
class ScatterPlotOptions extends Base{
    
    protected $allowPointSelect = false;
    
    protected $animation = true;
    
    protected $color = null;
    
    protected $cropThreshold = 300;
    
    protected $cursor = null;
    
    protected $dashStyle = null;
    
    protected $dataLabels;
    
    protected $enableMouseTracking = true;
    
    //protected $events;
    
    protected $lineWidth = 0;
    
    protected $linkedTo;
    
    protected $marker;
    
    protected $negativeColor = null;
    
    //protected $point;
    
    protected $pointInterval = 1;
    
    protected $pointStart = 0;
    
    protected $selected = false;
    
    protected $shadow = false;
    
    protected $showCheckbox = false;
    
    protected $showInLegend = true;
    
    protected $states;
    
    protected $stickyTracking = false;
    
    protected $threshold = 0;
    
    protected $tooltip;
    
    protected $turboThreshold = 1000;
    
    protected $visible = true;
           
    public function __construct()
    {
        $this->dataLabels = new DataLabelsPlotOptions();
        $this->states = new StatesPlotOptions();
        $this->tooltip = new TooltipPlotOptions();   
        $this->marker = new Marker();
    }  
    
    public function getAllowPointSelect() {
        return $this->allowPointSelect;
    }

    public function setAllowPointSelect($allowPointSelect) {
        $this->allowPointSelect = $allowPointSelect;
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

    public function getCropThreshold() {
        return $this->cropThreshold;
    }

    public function setCropThreshold($cropThreshold) {
        $this->cropThreshold = $cropThreshold;
    }

    public function getCursor() {
        return $this->cursor;
    }

    public function setCursor($cursor) {
        $this->cursor = $cursor;
    }

    public function getDashStyle() {
        return $this->dashStyle;
    }

    public function setDashStyle($dashStyle) {
        $this->dashStyle = $dashStyle;
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

    public function getLineWidth() {
        return $this->lineWidth;
    }

    public function setLineWidth($lineWidth) {
        $this->lineWidth = $lineWidth;
    }

    public function getLinkedTo() {
        return $this->linkedTo;
    }

    public function setLinkedTo($linkedTo) {
        $this->linkedTo = $linkedTo;
    }

    public function getMarker() {
        return $this->marker;
    }

    public function setMarker($marker) {
        $this->marker = $marker;
    }

    public function getNegativeColor() {
        return $this->negativeColor;
    }

    public function setNegativeColor($negativeColor) {
        $this->negativeColor = $negativeColor;
    }

    public function getPointInterval() {
        return $this->pointInterval;
    }

    public function setPointInterval($pointInterval) {
        $this->pointInterval = $pointInterval;
    }

    public function getPointStart() {
        return $this->pointStart;
    }

    public function setPointStart($pointStart) {
        $this->pointStart = $pointStart;
    }

    public function getSelected() {
        return $this->selected;
    }

    public function setSelected($selected) {
        $this->selected = $selected;
    }

    public function getShadow() {
        return $this->shadow;
    }

    public function setShadow($shadow) {
        $this->shadow = $shadow;
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

    public function getTurboThreshold() {
        return $this->turboThreshold;
    }

    public function setTurboThreshold($turboThreshold) {
        $this->turboThreshold = $turboThreshold;
    }

    public function getVisible() {
        return $this->visible;
    }

    public function setVisible($visible) {
        $this->visible = $visible;
    }
    
}
?>
