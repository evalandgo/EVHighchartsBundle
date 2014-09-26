<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;
use EV\HighchartsBundle\Model\StatesPlotOptions;
use EV\HighchartsBundle\Model\TooltipPlotOptions;

/**
 * Description of boxplotPlotOptions
 *
 * @author Nathan
 * 
 * TODO  =  - $event & Methods
 *          - $point & Methods
 */
class BoxplotPlotOptions extends Base{
    
    protected $allowPointSelect = false;
    
    protected $color = null;
    
    protected $colorByPoint = false;
    
    protected $colors;
    
    protected $cursor = null;
    
    protected $depth = 25;
    
    protected $edgeColor;
    
    protected $edgeWidth = 1;
    
    protected $enableMouseTracking = true;
    
    //protected $events;
    
    protected $fillColor = '#FFFFFF';
    
    protected $groupPadding = 0.2;
    
    protected $groupZPadding = 1;
    
    protected $grouping = true;
    
    protected $lineWidth = 1;
    
    protected $linkedTo;
    
    protected $medianColor = null;
    
    protected $medianWidth = 2;
    
    protected $negativeColor = null;
    
    //protected $point;
    
    protected $pointInterval = 1;
    
    protected $pointPadding = 0.1;
    
    protected $pointPlacement = null;
    
    protected $pointRange = null;
    
    protected $pointStart = 0;
    
    protected $pointWidth = null;
    
    protected $selected = false;
    
    protected $showCheckbox = false;
    
    protected $showInLegend = true;
    
    protected $states;
    
    protected $stemColor = null;
    
    protected $stemDashStyle = null;
    
    protected $stemWidth = null;
    
    protected $stickyTracking = true;
    
    protected $tooltip;
    
    protected $turboThreshold = 1000;
    
    protected $visible = true;
    
    protected $whiskerColor = null;
    
    protected $whiskerLength = '50%';
    
    protected $whiskerWidth = 2;
    
    public function __construct()
    {
        $this->states = new StatesPlotOptions();
        $this->tooltip = new TooltipPlotOptions();     
    }
    
    public function getAllowPointSelect() {
        return $this->allowPointSelect;
    }

    public function setAllowPointSelect($allowPointSelect) {
        $this->allowPointSelect = $allowPointSelect;
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

    public function getCursor() {
        return $this->cursor;
    }

    public function setCursor($cursor) {
        $this->cursor = $cursor;
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

    public function getFillColor() {
        return $this->fillColor;
    }

    public function setFillColor($fillColor) {
        $this->fillColor = $fillColor;
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

    public function getMedianColor() {
        return $this->medianColor;
    }

    public function setMedianColor($medianColor) {
        $this->medianColor = $medianColor;
    }

    public function getMedianWidth() {
        return $this->medianWidth;
    }

    public function setMedianWidth($medianWidth) {
        $this->medianWidth = $medianWidth;
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

    public function getStemColor() {
        return $this->stemColor;
    }

    public function setStemColor($stemColor) {
        $this->stemColor = $stemColor;
    }

    public function getStemDashStyle() {
        return $this->stemDashStyle;
    }

    public function setStemDashStyle($stemDashStyle) {
        $this->stemDashStyle = $stemDashStyle;
    }

    public function getStemWidth() {
        return $this->stemWidth;
    }

    public function setStemWidth($stemWidth) {
        $this->stemWidth = $stemWidth;
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

    public function getWhiskerColor() {
        return $this->whiskerColor;
    }

    public function setWhiskerColor($whiskerColor) {
        $this->whiskerColor = $whiskerColor;
    }

    public function getWhiskerLength() {
        return $this->whiskerLength;
    }

    public function setWhiskerLength($whiskerLength) {
        $this->whiskerLength = $whiskerLength;
    }

    public function getWhiskerWidth() {
        return $this->whiskerWidth;
    }

    public function setWhiskerWidth($whiskerWidth) {
        $this->whiskerWidth = $whiskerWidth;
    }

    
}
?>
