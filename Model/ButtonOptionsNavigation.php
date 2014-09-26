<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;

/**
 * Description of ButtonOptionsNavigation
 *
 * @author Nathan
 * 
 * TODO  =  - $theme & Methods -> Create Object ThemeButtonOptions
 */
class ButtonOptionsNavigation extends Base{
    
    protected $align = "right";
    
    protected $enabled = true;
    
    protected $height = 20;
    
    protected $symbolFill = "#E0E0E0";
    
    protected $symbolSize = 14;
    
    protected $symbolStroke = "#666";
    
    protected $symbolStrokeWidth = 1;
    
    protected $symbolX = 12.5;
    
    protected $symbolY = 10.5;
    
    protected $text = null;
    
    //protected $theme;
    
    protected $verticalAlign = "top";
    
    protected $width = 24;
    
    protected $y = 0;
    
    public function getAlign() {
        return $this->align;
    }

    public function setAlign($align) {
        $this->align = $align;
    }

    public function getEnabled() {
        return $this->enabled;
    }

    public function setEnabled($enabled) {
        $this->enabled = $enabled;
    }

    public function getHeight() {
        return $this->height;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function getSymbolFill() {
        return $this->symbolFill;
    }

    public function setSymbolFill($symbolFill) {
        $this->symbolFill = $symbolFill;
    }

    public function getSymbolSize() {
        return $this->symbolSize;
    }

    public function setSymbolSize($symbolSize) {
        $this->symbolSize = $symbolSize;
    }

    public function getSymbolStroke() {
        return $this->symbolStroke;
    }

    public function setSymbolStroke($symbolStroke) {
        $this->symbolStroke = $symbolStroke;
    }

    public function getSymbolStrokeWidth() {
        return $this->symbolStrokeWidth;
    }

    public function setSymbolStrokeWidth($symbolStrokeWidth) {
        $this->symbolStrokeWidth = $symbolStrokeWidth;
    }

    public function getSymbolX() {
        return $this->symbolX;
    }

    public function setSymbolX($symbolX) {
        $this->symbolX = $symbolX;
    }

    public function getSymbolY() {
        return $this->symbolY;
    }

    public function setSymbolY($symbolY) {
        $this->symbolY = $symbolY;
    }

    public function getText() {
        return $this->text;
    }

    public function setText($text) {
        $this->text = $text;
    }

    public function getVerticalAlign() {
        return $this->verticalAlign;
    }

    public function setVerticalAlign($verticalAlign) {
        $this->verticalAlign = $verticalAlign;
    }

    public function getWidth() {
        return $this->width;
    }

    public function setWidth($width) {
        $this->width = $width;
    }

    public function getY() {
        return $this->y;
    }

    public function setY($y) {
        $this->y = $y;
    }

}

?>
