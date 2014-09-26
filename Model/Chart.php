<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\ResetZoomButton;
use EV\HighchartsBundle\Model\Base;

/**
 * Description of Chart
 *
 * @author Nathan
 * 
 * TODO : - $event & Methods
 *        - $options3d & Methods
 */
class Chart extends Base{
    
    protected $alignTicks = true;
    
    protected $animation = true;
    
    protected $backgroundColor = '#FFFFFF';
    
    protected $borderColor = '#4572A7';
    
    protected $borderRadius = 5;
    
    protected $borderWidth = 0;
    
    protected $className = null;
    
    protected $defaultSeriesType = 'line';
    
    //protected $event;
    
    protected $height = null;
    
    protected $ignoreHiddenSeries = true;
    
    protected $inverted = false;
    
    protected $margin = null;
    
    protected $marginBottom = null;
    
    protected $marginLeft = null;
    
    protected $marginRight = null;
    
    protected $marginTop = null;
    
    //protected $options3d;
    
    protected $panning = false;
    
    protected $pinchType = null;
    
    protected $plotBackgroundColor = null;
    
    protected $plotBackgroundImage = null;
    
    protected $plotBorderColor = "#C0C0C0";
    
    protected $plotBorderWidth = 0;
    
    protected $plotShadow = false;
    
    protected $polar = false;
    
    protected $reflow = true;
    
    protected $renderTo = null;
    
    protected $resetZoomButton;
    
    protected $selectionMarkerFill = "rgb(69,114,167,0)";
    
    protected $shadow = false;
    
    protected $showAxes = false;
    
    protected $spacing = array(10,10,15,10);
    
    protected $spacingBottom = 15;
    
    protected $spacingLeft = 10;
    
    protected $spacingRight = 10;
    
    protected $spacingTop = 10;
    
    protected $style = null;
    
    protected $type = "line";
    
    protected $width = null;
    
    protected $zoomType = null;
    
    public function __construct()
    {
         $this->resetZoomButton = new ResetZoomButton();
    }
    
    
    public function getAlignTicks() {
        return $this->alignTicks;
    }

    public function setAlignTicks($alignTicks) {
        $this->alignTicks = $alignTicks;
    }

    public function getAnimation() {
        return $this->animation;
    }

    public function setAnimation($animation) {
        $this->animation = $animation;
    }

    public function getBackgroundColor() {
        return $this->backgroundColor;
    }

    public function setBackgroundColor($backgroundColor) {
        $this->backgroundColor = $backgroundColor;
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

    public function getClassName() {
        return $this->className;
    }

    public function setClassName($className) {
        $this->className = $className;
    }

    public function getDefaultSeriesType() {
        return $this->defaultSeriesType;
    }

    public function setDefaultSeriesType($defaultSeriesType) {
        $this->defaultSeriesType = $defaultSeriesType;
    }

    public function getHeight() {
        return $this->height;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function getIgnoreHiddenSeries() {
        return $this->ignoreHiddenSeries;
    }

    public function setIgnoreHiddenSeries($ignoreHiddenSeries) {
        $this->ignoreHiddenSeries = $ignoreHiddenSeries;
    }

    public function getInverted() {
        return $this->inverted;
    }

    public function setInverted($inverted) {
        $this->inverted = $inverted;
    }

    public function getMargin() {
        return $this->margin;
    }

    public function setMargin($margin) {
        $this->margin = $margin;
    }

    public function getMarginBottom() {
        return $this->marginBottom;
    }

    public function setMarginBottom($marginBottom) {
        $this->marginBottom = $marginBottom;
    }

    public function getMarginLeft() {
        return $this->marginLeft;
    }

    public function setMarginLeft($marginLeft) {
        $this->marginLeft = $marginLeft;
    }

    public function getMarginRight() {
        return $this->marginRight;
    }

    public function setMarginRight($marginRight) {
        $this->marginRight = $marginRight;
    }

    public function getMarginTop() {
        return $this->marginTop;
    }

    public function setMarginTop($marginTop) {
        $this->marginTop = $marginTop;
    }

    public function getPanning() {
        return $this->panning;
    }

    public function setPanning($panning) {
        $this->panning = $panning;
    }

    public function getPinchType() {
        return $this->pinchType;
    }

    public function setPinchType($pinchType) {
        $this->pinchType = $pinchType;
    }

    public function getPlotBackgroundColor() {
        return $this->plotBackgroundColor;
    }

    public function setPlotBackgroundColor($plotBackgroundColor) {
        $this->plotBackgroundColor = $plotBackgroundColor;
    }

    public function getPlotBackgroundImage() {
        return $this->plotBackgroundImage;
    }

    public function setPlotBackgroundImage($plotBackgroundImage) {
        $this->plotBackgroundImage = $plotBackgroundImage;
    }

    public function getPlotBorderColor() {
        return $this->plotBorderColor;
    }

    public function setPlotBorderColor($plotBorderColor) {
        $this->plotBorderColor = $plotBorderColor;
    }

    public function getPlotBorderWidth() {
        return $this->plotBorderWidth;
    }

    public function setPlotBorderWidth($plotBorderWidth) {
        $this->plotBorderWidth = $plotBorderWidth;
    }

    public function getPlotShadow() {
        return $this->plotShadow;
    }

    public function setPlotShadow($plotShadow) {
        $this->plotShadow = $plotShadow;
    }

    public function getPolar() {
        return $this->polar;
    }

    public function setPolar($polar) {
        $this->polar = $polar;
    }

    public function getReflow() {
        return $this->reflow;
    }

    public function setReflow($reflow) {
        $this->reflow = $reflow;
    }

    public function getRenderTo() {
        return $this->renderTo;
    }

    public function setRenderTo($renderTo) {
        $this->renderTo = $renderTo;
    }

    public function getResetZoomButton() {
        return $this->resetZoomButton;
    }

    public function setResetZoomButton($resetZoomButton) {
        $this->resetZoomButton = $resetZoomButton;
    }
    
    public function getSelectionMarkerFill() {
        return $this->selectionMarkerFill;
    }

    public function setSelectionMarkerFill($selectionMarkerFill) {
        $this->selectionMarkerFill = $selectionMarkerFill;
    }

    public function getShadow() {
        return $this->shadow;
    }

    public function setShadow($shadow) {
        $this->shadow = $shadow;
    }

    public function getShowAxes() {
        return $this->showAxes;
    }

    public function setShowAxes($showAxes) {
        $this->showAxes = $showAxes;
    }

    public function getSpacing() {
        return $this->spacing;
    }

    public function setSpacing($spacing) {
        $this->spacing = $spacing;
    }

    public function getSpacingBottom() {
        return $this->spacingBottom;
    }

    public function setSpacingBottom($spacingBottom) {
        $this->spacingBottom = $spacingBottom;
    }

    public function getSpacingLeft() {
        return $this->spacingLeft;
    }

    public function setSpacingLeft($spacingLeft) {
        $this->spacingLeft = $spacingLeft;
    }

    public function getSpacingRight() {
        return $this->spacingRight;
    }

    public function setSpacingRight($spacingRight) {
        $this->spacingRight = $spacingRight;
    }

    public function getSpacingTop() {
        return $this->spacingTop;
    }

    public function setSpacingTop($spacingTop) {
        $this->spacingTop = $spacingTop;
    }

    public function getStyle() {
        return $this->style;
    }

    public function setStyle($style) {
        $this->style = $style;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getWidth() {
        return $this->width;
    }

    public function setWidth($width) {
        $this->width = $width;
    }

    public function getZoomType() {
        return $this->zoomType;
    }

    public function setZoomType($zoomType) {
        $this->zoomType = $zoomType;
    }


}
?>
