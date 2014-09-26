<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;

class Tooltip extends Base{
    
    protected $animation = true;
    
    protected $backgroundColor = "rgba(255, 255, 255, 0.85)";
    
    protected $borderColor = "auto";
    
    protected $borderRadius = 3;
    
    protected $borderWidth = 1;
    
    protected $crosshairs = null;
    
    protected $dateTimeLabelFormats;
    
    protected $enabled = true;
    
    protected $followPointer = false;
    
    protected $followTouchMove = false;
    
    protected $footerFormat = false;
    
    protected $formatter = null;
    
    protected $headerFormat;
    
    protected $hideDelay = 500;
    
    protected $pointFormat;
    
    protected $positioner = null;
    
    protected $shadow = true;
    
    protected $shape = "callout";
    
    protected $shared = false;
    
    protected $snap = null;
    
    protected $style = array('color'=> '#333333','fontSize'=> '12px','padding'=> '8px');
    
    protected $useHTML = false;
    
    protected $valueDecimals = null;
    
    protected $valuePrefix = null;
    
    protected $valueSuffix = null;
    
    protected $xDateFormat = null;
    
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

    public function getCrosshairs() {
        return $this->crosshairs;
    }

    public function setCrosshairs($crosshairs) {
        $this->crosshairs = $crosshairs;
    }

    public function getDateTimeLabelFormats() {
        return $this->dateTimeLabelFormats;
    }

    public function setDateTimeLabelFormats($dateTimeLabelFormats) {
        $this->dateTimeLabelFormats = $dateTimeLabelFormats;
    }

    public function getEnabled() {
        return $this->enabled;
    }

    public function setEnabled($enabled) {
        $this->enabled = $enabled;
    }

    public function getFollowPointer() {
        return $this->followPointer;
    }

    public function setFollowPointer($followPointer) {
        $this->followPointer = $followPointer;
    }

    public function getFollowTouchMove() {
        return $this->followTouchMove;
    }

    public function setFollowTouchMove($followTouchMove) {
        $this->followTouchMove = $followTouchMove;
    }

    public function getFooterFormat() {
        return $this->footerFormat;
    }

    public function setFooterFormat($footerFormat) {
        $this->footerFormat = $footerFormat;
    }

    public function getFormatter() {
        return $this->formatter;
    }

    public function setFormatter($formatter) {
        $this->formatter = $formatter;
    }

    public function getHeaderFormat() {
        return $this->headerFormat;
    }

    public function setHeaderFormat($headerFormat) {
        $this->headerFormat = $headerFormat;
    }

    public function getHideDelay() {
        return $this->hideDelay;
    }

    public function setHideDelay($hideDelay) {
        $this->hideDelay = $hideDelay;
    }

    public function getPointFormat() {
        return $this->pointFormat;
    }

    public function setPointFormat($pointFormat) {
        $this->pointFormat = $pointFormat;
    }

    public function getPositioner() {
        return $this->positioner;
    }

    public function setPositioner($positioner) {
        $this->positioner = $positioner;
    }

    public function getShadow() {
        return $this->shadow;
    }

    public function setShadow($shadow) {
        $this->shadow = $shadow;
    }

    public function getShape() {
        return $this->shape;
    }

    public function setShape($shape) {
        $this->shape = $shape;
    }

    public function getShared() {
        return $this->shared;
    }

    public function setShared($shared) {
        $this->shared = $shared;
    }

    public function getSnap() {
        return $this->snap;
    }

    public function setSnap($snap) {
        $this->snap = $snap;
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

    public function getValueDecimals() {
        return $this->valueDecimals;
    }

    public function setValueDecimals($valueDecimals) {
        $this->valueDecimals = $valueDecimals;
    }

    public function getValuePrefix() {
        return $this->valuePrefix;
    }

    public function setValuePrefix($valuePrefix) {
        $this->valuePrefix = $valuePrefix;
    }

    public function getValueSuffix() {
        return $this->valueSuffix;
    }

    public function setValueSuffix($valueSuffix) {
        $this->valueSuffix = $valueSuffix;
    }

    public function getXDateFormat() {
        return $this->xDateFormat;
    }

    public function setXDateFormat($xDateFormat) {
        $this->xDateFormat = $xDateFormat;
    }

}

?>
