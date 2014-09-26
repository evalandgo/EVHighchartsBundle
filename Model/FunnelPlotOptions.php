<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;
use EV\HighchartsBundle\Model\DataLabelsPlotOptions;
use EV\HighchartsBundle\Model\StatesPlotOptions;
use EV\HighchartsBundle\Model\TooltipPlotOptions;

/**
 * Description of FunnelPlotOptions
 *
 * @author Nathan
 * 
 * TODO  =  - $event & Methods
 *          - $point & Methods
 */
class FunnelPlotOptions extends Base{
    
    protected $allowPointSelect = false;
    
    protected $borderColor = '#FFFFFF';
    
    protected $borderWidth = 1;
    
    protected $center = array("50%", "50%");
    
    protected $colors = null;
    
    protected $cursor = null;
    
    protected $dataLabels;
    
    protected $depth = 0;
    
    protected $enableMouseTracking = true;
    
    //protected $events;
    
    protected $height;
    
    protected $ignoreHiddenPoint = true;
    
    protected $linkedTo;
    
    protected $minSize = 80;
    
    protected $neckHeight = '25%';
    
    protected $neckWidth;
    
    //protected $point;
    
    protected $reversed = false;
    
    protected $selected = false;
    
    protected $shadow = false;
    
    protected $showInLegend = false;
    
    protected $size;
    
    protected $slicedOffset = 10;
    
    protected $states;
    
    protected $stickyTracking = false;
    
    protected $tooltip;
    
    protected $visible = true;
    
    protected $width = '90%';
    
    public function __construct()
    {
        $this->dataLabels = new DataLabelsPlotOptions();
        $this->states = new StatesPlotOptions();
        $this->tooltip = new TooltipPlotOptions();     
    }
    
    public function getAllowPointSelect() {
        return $this->allowPointSelect;
    }

    public function setAllowPointSelect($allowPointSelect) {
        $this->allowPointSelect = $allowPointSelect;
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

    public function getHeight() {
        return $this->height;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function getIgnoreHiddenPoint() {
        return $this->ignoreHiddenPoint;
    }

    public function setIgnoreHiddenPoint($ignoreHiddenPoint) {
        $this->ignoreHiddenPoint = $ignoreHiddenPoint;
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

    public function getNeckHeight() {
        return $this->neckHeight;
    }

    public function setNeckHeight($neckHeight) {
        $this->neckHeight = $neckHeight;
    }

    public function getNeckWidth() {
        return $this->neckWidth;
    }

    public function setNeckWidth($neckWidth) {
        $this->neckWidth = $neckWidth;
    }

    public function getReversed() {
        return $this->reversed;
    }

    public function setReversed($reversed) {
        $this->reversed = $reversed;
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

    public function getWidth() {
        return $this->width;
    }

    public function setWidth($width) {
        $this->width = $width;
    }

}

?>
