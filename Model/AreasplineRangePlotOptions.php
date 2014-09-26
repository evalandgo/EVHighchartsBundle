<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;
use EV\HighchartsBundle\Model\DataLabelsRangePlotOptions;
use EV\HighchartsBundle\Model\StatesPlotOptions;
use EV\HighchartsBundle\Model\TooltipPlotOptions;

/**
 * Description of AreasplineRangePlotOptions
 *
 * @author Nathan
 * 
 * TODO  =  - $event & Methods
 *          - $point & Methods
 */
class AreasplineRangePlotOptions extends Base{
    
    protected $allowPointSelect =  false;
    
    protected $animation =  true;
    
    protected $color =  null;
        
    protected $connectNulls =  false;
    
    protected $cropThreshold =  300;
    
    protected $cursor =  null;
    
    protected $dashStyle =  null;
    
    protected $dataLabels;
    
    protected $enableMouseTracking =  true;
    
    //protected $events;
    
    protected $fillColor =  null;
    
    protected $fillOpacity =  0.75;
    
    protected $lineColor =  null;
    
    protected $lineWidth =  2;
    
    protected $linkedTo;
    
    protected $marker;
    
    protected $negativeColor =  null;
    
    protected $negativeFillColor;
    
    //protected $point;
    
    protected $pointInterval =  1;
    
    protected $pointPlacement =  null;
    
    protected $pointStart =  0;
    
    protected $selected =  false;
    
    protected $shadow =  false;
    
    protected $showCheckbox =  false;
    
    protected $showInLegend =  true;
    
    protected $stacking =  null;
    
    protected $states;
    
    protected $stickyTracking =  true;
    
    protected $threshold =  0;
    
    protected $tooltip;
    
    protected $trackByArea =  false;
    
    protected $turboThreshold =  1000;
    
    protected $visible =  true;
    
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

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getConnectNulls() {
        return $this->connectNulls;
    }

    public function setConnectNulls($connectNulls) {
        $this->connectNulls = $connectNulls;
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

    public function getFillColor() {
        return $this->fillColor;
    }

    public function setFillColor($fillColor) {
        $this->fillColor = $fillColor;
    }

    public function getFillOpacity() {
        return $this->fillOpacity;
    }

    public function setFillOpacity($fillOpacity) {
        $this->fillOpacity = $fillOpacity;
    }

    public function getLineColor() {
        return $this->lineColor;
    }

    public function setLineColor($lineColor) {
        $this->lineColor = $lineColor;
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

    public function getNegativeFillColor() {
        return $this->negativeFillColor;
    }

    public function setNegativeFillColor($negativeFillColor) {
        $this->negativeFillColor = $negativeFillColor;
    }

    public function getPointInterval() {
        return $this->pointInterval;
    }

    public function setPointInterval($pointInterval) {
        $this->pointInterval = $pointInterval;
    }

    public function getPointPlacement() {
        return $this->pointPlacement;
    }

    public function setPointPlacement($pointPlacement) {
        $this->pointPlacement = $pointPlacement;
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

    public function getTrackByArea() {
        return $this->trackByArea;
    }

    public function setTrackByArea($trackByArea) {
        $this->trackByArea = $trackByArea;
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
