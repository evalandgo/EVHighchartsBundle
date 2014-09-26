<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;
use EV\HighchartsBundle\Model\StatesPlotOptions;
use EV\HighchartsBundle\Model\TooltipPlotOptions;
use EV\HighchartsBundle\Model\DataLabelsRangePlotOptions;

/**
 * Description of ColumnRangePlotOptions
 *
 * @author Nathan
 * 
 * TODO  =  - $event & Methods
 *          - $point & Methods
 */
class ColumnRangePlotOptions extends Base{
    
    protected $allowPointSelect = false;
    
    protected $animation = true;
    
    protected $borderColor = '#FFFFFF';
    
    protected $borderRadius = 0;
    
    protected $borderWidth = 1;
    
    protected $color = null;
    
    protected $colorByPoint = false;
    
    protected $colors;
    
    protected $cropThreshold = 50;
    
    protected $cursor = null;
    
    protected $dataLabels;
    
    protected $depth = 25;
    
    protected $edgeColor;
    
    protected $edgeWidth = 1;
    
    protected $enableMouseTracking = true;
    
    //protected $events;
    
    protected $groupPadding = 0.2;
    
    protected $groupZPadding = 1;
    
    protected $grouping = true;
    
    protected $linkedTo;
    
    protected $minPointLength = 0;
    
    protected $negativeColor = null;
    
    //protected $point;
    
    protected $pointInterval = 1;
    
    protected $pointPadding = 0.1;
    
    protected $pointPlacement = null;
    
    protected $pointRange = null;
    
    protected $pointStart = 0;
    
    protected $pointWidth = null;
    
    protected $selected = false;
    
    protected $shadow = false;
    
    protected $showCheckbox = false;
    
    protected $showInLegend = true;
    
    protected $stacking = null;
    
    protected $states;
    
    protected $stickyTracking = true;
    
    protected $threshold = 0;
    
    protected $tooltip;
    
    protected $turboThreshold = 1000;
    
    protected $visible = true;
    
    public function __construct()
    {
        $this->dataLabels = new DataLabelsRangePlotOptions();
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

    public function getBorderRadius() {
        return $this->borderRadius;
    }

    public function setBorderRadius($borderRadius) {
        $this->borderRadius = $borderRadius;
    }

    public function getBorderWidth() {
        return $this->borderWidth;
    }

    public function setBorderWidth($borderWidth) {
        $this->borderWidth = $borderWidth;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getColorByPoint() {
        return $this->colorByPoint;
    }

    public function setColorByPoint($colorByPoint) {
        $this->colorByPoint = $colorByPoint;
    }

    public function getColors() {
        return $this->colors;
    }

    public function setColors($colors) {
        $this->colors = $colors;
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

    public function getEdgeColor() {
        return $this->edgeColor;
    }

    public function setEdgeColor($edgeColor) {
        $this->edgeColor = $edgeColor;
    }

    public function getEdgeWidth() {
        return $this->edgeWidth;
    }

    public function setEdgeWidth($edgeWidth) {
        $this->edgeWidth = $edgeWidth;
    }

    public function getEnableMouseTracking() {
        return $this->enableMouseTracking;
    }

    public function setEnableMouseTracking($enableMouseTracking) {
        $this->enableMouseTracking = $enableMouseTracking;
    }

    public function getGroupPadding() {
        return $this->groupPadding;
    }

    public function setGroupPadding($groupPadding) {
        $this->groupPadding = $groupPadding;
    }

    public function getGroupZPadding() {
        return $this->groupZPadding;
    }

    public function setGroupZPadding($groupZPadding) {
        $this->groupZPadding = $groupZPadding;
    }

    public function getGrouping() {
        return $this->grouping;
    }

    public function setGrouping($grouping) {
        $this->grouping = $grouping;
    }

    public function getLinkedTo() {
        return $this->linkedTo;
    }

    public function setLinkedTo($linkedTo) {
        $this->linkedTo = $linkedTo;
    }

    public function getMinPointLength() {
        return $this->minPointLength;
    }

    public function setMinPointLength($minPointLength) {
        $this->minPointLength = $minPointLength;
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

    public function getPointPadding() {
        return $this->pointPadding;
    }

    public function setPointPadding($pointPadding) {
        $this->pointPadding = $pointPadding;
    }

    public function getPointPlacement() {
        return $this->pointPlacement;
    }

    public function setPointPlacement($pointPlacement) {
        $this->pointPlacement = $pointPlacement;
    }

    public function getPointRange() {
        return $this->pointRange;
    }

    public function setPointRange($pointRange) {
        $this->pointRange = $pointRange;
    }

    public function getPointStart() {
        return $this->pointStart;
    }

    public function setPointStart($pointStart) {
        $this->pointStart = $pointStart;
    }

    public function getPointWidth() {
        return $this->pointWidth;
    }

    public function setPointWidth($pointWidth) {
        $this->pointWidth = $pointWidth;
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

    public function getStacking() {
        return $this->stacking;
    }

    public function setStacking($stacking) {
        $this->stacking = $stacking;
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
