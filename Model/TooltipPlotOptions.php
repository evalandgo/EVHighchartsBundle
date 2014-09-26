<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;

class TooltipPlotOptions extends Base{
    
    protected $dateTimeLabelFormats;
    
    protected $followPointer =  false;
    
    protected $followTouchMove =  false;
    
    protected $footerFormat =  false;
    
    protected $headerFormat = '<span style="font-size: 10px">{point.key}</span><br/>';
    
    protected $hideDelay =  500;
    
    protected $pointFormat =  '<span style="color = {series.color}"></span> {series.name} =  <b>{point.y}</b><br/>';
    
    protected $shape =  'callout';
    
    protected $valueDecimals =  null;
    
    protected $valuePrefix =  null;
    
    protected $valueSuffix =  null;
    
    protected $xDateFormat =  null;
    
    public function getDateTimeLabelFormats() {
        return $this->dateTimeLabelFormats;
    }

    public function setDateTimeLabelFormats($dateTimeLabelFormats) {
        $this->dateTimeLabelFormats = $dateTimeLabelFormats;
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

    public function getShape() {
        return $this->shape;
    }

    public function setShape($shape) {
        $this->shape = $shape;
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
