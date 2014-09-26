<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;

class DataLabelsRangePlotOptions extends Base{
    
    protected $align =  'center';
    
    protected $backgroundColor =  null;
    
    protected $borderColor =  null;
    
    protected $borderRadius =  0;
    
    protected $borderWidth =  0;
    
    protected $color =  null;
    
    protected $crop =  true;
    
    protected $defer =  true;
    
    protected $enabled =  false;
    
    protected $format =  'y';
    
    protected $formatter =  null;
    
    protected $inside =  null;
    
    protected $overflow =  'justify';
    
    protected $padding =  2;
    
    protected $rotation =  0;
    
    protected $shadow =  false;
    
    protected $style =  null;
    
    protected $useHTML =  false;
    
    protected $verticalAlign =  null;
    
    protected $xHigh =  0;
    
    protected $xLow =  0;
    
    protected $yHigh =  -6;
    
    protected $yLow =  16;
    
    protected $zIndex =  6;
    
    public function getAlign() {
        return $this->align;
    }

    public function setAlign($align) {
        $this->align = $align;
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

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getCrop() {
        return $this->crop;
    }

    public function setCrop($crop) {
        $this->crop = $crop;
    }

    public function getDefer() {
        return $this->defer;
    }

    public function setDefer($defer) {
        $this->defer = $defer;
    }

    public function getEnabled() {
        return $this->enabled;
    }

    public function setEnabled($enabled) {
        $this->enabled = $enabled;
    }

    public function getFormat() {
        return $this->format;
    }

    public function setFormat($format) {
        $this->format = $format;
    }

    public function getFormatter() {
        return $this->formatter;
    }

    public function setFormatter($formatter) {
        $this->formatter = $formatter;
    }

    public function getInside() {
        return $this->inside;
    }

    public function setInside($inside) {
        $this->inside = $inside;
    }

    public function getOverflow() {
        return $this->overflow;
    }

    public function setOverflow($overflow) {
        $this->overflow = $overflow;
    }

    public function getPadding() {
        return $this->padding;
    }

    public function setPadding($padding) {
        $this->padding = $padding;
    }

    public function getRotation() {
        return $this->rotation;
    }

    public function setRotation($rotation) {
        $this->rotation = $rotation;
    }

    public function getShadow() {
        return $this->shadow;
    }

    public function setShadow($shadow) {
        $this->shadow = $shadow;
    }

    public function getStyle() {
        return $this->style;
    }

    public function setStyle($style) {
        $this->style = $style;
    }

    public function getUseHTML() {
        return $this->useHTML;
    }

    public function setUseHTML($useHTML) {
        $this->useHTML = $useHTML;
    }

    public function getVerticalAlign() {
        return $this->verticalAlign;
    }

    public function setVerticalAlign($verticalAlign) {
        $this->verticalAlign = $verticalAlign;
    }

    public function getXHigh() {
        return $this->xHigh;
    }

    public function setXHigh($xHigh) {
        $this->xHigh = $xHigh;
    }

    public function getXLow() {
        return $this->xLow;
    }

    public function setXLow($xLow) {
        $this->xLow = $xLow;
    }

    public function getYHigh() {
        return $this->yHigh;
    }

    public function setYHigh($yHigh) {
        $this->yHigh = $yHigh;
    }

    public function getYLow() {
        return $this->yLow;
    }

    public function setYLow($yLow) {
        $this->yLow = $yLow;
    }

    public function getZIndex() {
        return $this->zIndex;
    }

    public function setZIndex($zIndex) {
        $this->zIndex = $zIndex;
    }

}
?>
