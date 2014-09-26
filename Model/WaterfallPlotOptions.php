<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;
use EV\HighchartsBundle\Model\DataLabelsPlotOptions;
use EV\HighchartsBundle\Model\StatesPlotOptions;
use EV\HighchartsBundle\Model\TooltipPlotOptions;

/**
 * Description of WaterfallPlotOptions
 *
 * @author Nathan
 * 
 * TODO  =  - $event & Methods
 *          - $point & Methods
 */
class WaterfallPlotOptions extends Base{
    
    protected $allowPointSelect = false;
    
    protected $animation = true;
    
    protected $borderColor = '#333333';
    
    protected $borderRadius = 0;
    
    protected $borderWidth = 1;
    
    protected $color = null;
    
    protected $colorByPoint = false;
    
    protected $colors;
    
    protected $cursor = null;
    
    protected $dashStyle = 'Dot';
    
    protected $dataLabels;
    
    protected $depth = 25;
    
    protected $edgeColor;
    
    protected $edgeWidth = 1;
    
    protected $enableMouseTracking = true;
    
    //protected $events;
    
    protected $groupPadding = 0.2;
    
    protected $groupZPadding = 1;
    
    protected $grouping = true;
    
    protected $lineColor = '#333333';
    
    protected $linkedTo;
    
    protected $minPointLength = 0;
    
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
    
    protected $state;
    
    protected $stickyTracking = true;
    
    protected $threshold = 0;
    
    protected $tooltip;
    
    protected $upColor;
    
    protected $visible = true;
    
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

    public function getLineColor() {
        return $this->lineColor;
    }

    public function setLineColor($lineColor) {
        $this->lineColor = $lineColor;
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

    public function getState() {
        return $this->state;
    }

    public function setState($state) {
        $this->state = $state;
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

    public function getUpColor() {
        return $this->upColor;
    }

    public function setUpColor($upColor) {
        $this->upColor = $upColor;
    }

    public function getVisible() {
        return $this->visible;
    }

    public function setVisible($visible) {
        $this->visible = $visible;
    }
    
}
?>
