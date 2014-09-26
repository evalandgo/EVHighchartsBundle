<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;
use EV\HighchartsBundle\Model\NavigationLegend;
use EV\HighchartsBundle\Model\TitleLegend;

class Legend extends Base{
    
    protected $align = "center";
    
    protected $backgroundColor = null;
    
    protected $borderColor = "#909090";
    
    protected $borderRadius = 0;
    
    protected $borderWidth = 0;
    
    protected $enabled = true;
    
    protected $floating = false;
    
    protected $itemDistance = 20;
    
    protected $itemHiddenStyle = null;
    
    protected $itemHoverStyle = null;
    
    protected $itemMarginBottom = 0;
    
    protected $itemMarginTop = 0;
    
    protected $itemStyle = array("color" => "#333333", "cursor" => "pointer", "fontSize" => "12px", "fontWeight" => "bold");
    
    protected $itemWidth = null;
    
    protected $labelFormat = "{name}";
    
    protected $labelFormatter = null;
    
    protected $layout = "horizontal";
    
    protected $lineHeight = 16;
    
    protected $margin = 15;
    
    protected $maxHeight = null;
    
    protected $navigation;
    
    protected $padding = 8;
    
    protected $reversed = false;
    
    protected $rtl = false;
    
    protected $shadow = false;
    
    protected $style = null;
    
    protected $symbolHeight = 12;
    
    protected $symbolPadding = 5;
    
    protected $symbolRadius = 2;
    
    protected $symbolWidth = 16;
    
    protected $title;
    
    protected $useHTML = false;
    
    protected $verticalAlign = "bottom";
    
    protected $width = 400;
    
    protected $x = 0;
    
    protected $y = 0;
    
    public function __construct()
    {
        $this->navigation = new NavigationLegend();
        $this->title = new TitleLegend();
    }
    
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

    public function getEnabled() {
        return $this->enabled;
    }

    public function setEnabled($enabled) {
        $this->enabled = $enabled;
    }

    public function getFloating() {
        return $this->floating;
    }

    public function setFloating($floating) {
        $this->floating = $floating;
    }

    public function getItemDistance() {
        return $this->itemDistance;
    }

    public function setItemDistance($itemDistance) {
        $this->itemDistance = $itemDistance;
    }

    public function getItemHiddenStyle() {
        return $this->itemHiddenStyle;
    }

    public function setItemHiddenStyle($itemHiddenStyle) {
        $this->itemHiddenStyle = $itemHiddenStyle;
    }

    public function getItemHoverStyle() {
        return $this->itemHoverStyle;
    }

    public function setItemHoverStyle($itemHoverStyle) {
        $this->itemHoverStyle = $itemHoverStyle;
    }

    public function getItemMarginBottom() {
        return $this->itemMarginBottom;
    }

    public function setItemMarginBottom($itemMarginBottom) {
        $this->itemMarginBottom = $itemMarginBottom;
    }

    public function getItemMarginTop() {
        return $this->itemMarginTop;
    }

    public function setItemMarginTop($itemMarginTop) {
        $this->itemMarginTop = $itemMarginTop;
    }

    public function getItemStyle() {
        return $this->itemStyle;
    }

    public function setItemStyle($itemStyle) {
        $this->itemStyle = $itemStyle;
    }

    public function getItemWidth() {
        return $this->itemWidth;
    }

    public function setItemWidth($itemWidth) {
        $this->itemWidth = $itemWidth;
    }

    public function getLabelFormat() {
        return $this->labelFormat;
    }

    public function setLabelFormat($labelFormat) {
        $this->labelFormat = $labelFormat;
    }

    public function getLabelFormatter() {
        return $this->labelFormatter;
    }

    public function setLabelFormatter($labelFormatter) {
        $this->labelFormatter = $labelFormatter;
    }

    public function getLayout() {
        return $this->layout;
    }

    public function setLayout($layout) {
        $this->layout = $layout;
    }

    public function getLineHeight() {
        return $this->lineHeight;
    }

    public function setLineHeight($lineHeight) {
        $this->lineHeight = $lineHeight;
    }

    public function getMargin() {
        return $this->margin;
    }

    public function setMargin($margin) {
        $this->margin = $margin;
    }

    public function getMaxHeight() {
        return $this->maxHeight;
    }

    public function setMaxHeight($maxHeight) {
        $this->maxHeight = $maxHeight;
    }

    public function getNavigation() {
        return $this->navigation;
    }

    public function setNavigation($navigation) {
        $this->navigation = $navigation;
    }

    public function getPadding() {
        return $this->padding;
    }

    public function setPadding($padding) {
        $this->padding = $padding;
    }

    public function getReversed() {
        return $this->reversed;
    }

    public function setReversed($reversed) {
        $this->reversed = $reversed;
    }

    public function getRtl() {
        return $this->rtl;
    }

    public function setRtl($rtl) {
        $this->rtl = $rtl;
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

    public function getSymbolHeight() {
        return $this->symbolHeight;
    }

    public function setSymbolHeight($symbolHeight) {
        $this->symbolHeight = $symbolHeight;
    }

    public function getSymbolPadding() {
        return $this->symbolPadding;
    }

    public function setSymbolPadding($symbolPadding) {
        $this->symbolPadding = $symbolPadding;
    }

    public function getSymbolRadius() {
        return $this->symbolRadius;
    }

    public function setSymbolRadius($symbolRadius) {
        $this->symbolRadius = $symbolRadius;
    }

    public function getSymbolWidth() {
        return $this->symbolWidth;
    }

    public function setSymbolWidth($symbolWidth) {
        $this->symbolWidth = $symbolWidth;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
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

    public function getWidth() {
        return $this->width;
    }

    public function setWidth($width) {
        $this->width = $width;
    }

    public function getX() {
        return $this->x;
    }

    public function setX($x) {
        $this->x = $x;
    }

    public function getY() {
        return $this->y;
    }

    public function setY($y) {
        $this->y = $y;
    }

    
}

?>
