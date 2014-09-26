<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;
use EV\HighchartsBundle\Model\DataLabelsPiePlotOptions;
use EV\HighchartsBundle\Model\StatesPlotOptions;
use EV\HighchartsBundle\Model\TooltipPlotOptions;

/**
 * Description of PiePlotOptions
 *
 * @author Nathan
 * 
 * TODO  =  - $event & Methods
 *          - $point & Methods
 */
class PiePlotOptions extends Base{
    
    protected $allowPointSelect = false;
    
    protected $animation = true;
    
    protected $borderColor = '#FFFFFF';
    
    protected $borderWidth = 1;
    
    protected $center = array(null, null);
    
    protected $colors = null;
    
    protected $cursor = null;
    
    protected $dataLabels;
    
    protected $depth = 0;
    
    protected $enableMouseTracking = true;
    
    protected $endAngle = null;
    
    //protected $events;
    
    protected $ignoreHiddenPoint = true;
    
    protected $innerSize = 0;
    
    protected $linkedTo;
    
    protected $minSize = 80;
    
    //protected $point;
    
    protected $selected = false;
    
    protected $shadow = false;
    
    protected $showInLegend = false;
    
    protected $size;
    
    protected $slicedOffset = 10;
    
    protected $startAngle = 0;
    
    protected $states;
    
    protected $stickyTracking = false;
    
    protected $tooltip;
    
    protected $visible = true;
    
    public function __construct()
    {
        $this->dataLabels = new DataLabelsPiePlotOptions();
        $this->states = new StatesPlotOptions();
        $this->tooltip = new TooltipPlotOptions();     
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

    public function getCenter() {
        return $this->center;
    }

    public function setCenter($center) {
        $this->center = $center;
    }

    public function getColors() {
        return $this->colors;
    }

    public function setColors($colors) {
        $this->colors = $colors;
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

    public function getDepth() {
        return $this->depth;
    }

    public function setDepth($depth) {
        $this->depth = $depth;
    }

    public function getEnableMouseTracking() {
        return $this->enableMouseTracking;
    }

    public function setEnableMouseTracking($enableMouseTracking) {
        $this->enableMouseTracking = $enableMouseTracking;
    }

    public function getEndAngle() {
        return $this->endAngle;
    }

    public function setEndAngle($endAngle) {
        $this->endAngle = $endAngle;
    }

    public function getIgnoreHiddenPoint() {
        return $this->ignoreHiddenPoint;
    }

    public function setIgnoreHiddenPoint($ignoreHiddenPoint) {
        $this->ignoreHiddenPoint = $ignoreHiddenPoint;
    }

    public function getInnerSize() {
        return $this->innerSize;
    }

    public function setInnerSize($innerSize) {
        $this->innerSize = $innerSize;
    }

    public function getLinkedTo() {
        return $this->linkedTo;
    }

    public function setLinkedTo($linkedTo) {
        $this->linkedTo = $linkedTo;
    }

    public function getMinSize() {
        return $this->minSize;
    }

    public function setMinSize($minSize) {
        $this->minSize = $minSize;
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

    public function getShowInLegend() {
        return $this->showInLegend;
    }

    public function setShowInLegend($showInLegend) {
        $this->showInLegend = $showInLegend;
    }

    public function getSize() {
        return $this->size;
    }

    public function setSize($size) {
        $this->size = $size;
    }

    public function getSlicedOffset() {
        return $this->slicedOffset;
    }

    public function setSlicedOffset($slicedOffset) {
        $this->slicedOffset = $slicedOffset;
    }

    public function getStartAngle() {
        return $this->startAngle;
    }

    public function setStartAngle($startAngle) {
        $this->startAngle = $startAngle;
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

}
?>
