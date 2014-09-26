<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;
use EV\HighchartsBundle\Model\AreaPlotOptions;
use EV\HighchartsBundle\Model\ArearangePlotOptions;
use EV\HighchartsBundle\Model\AreasplinePlotOptions;
use EV\HighchartsBundle\Model\AreasplineRangePlotOptions;
use EV\HighchartsBundle\Model\BarPlotOptions;
use EV\HighchartsBundle\Model\BoxplotPlotOptions;
use EV\HighchartsBundle\Model\BubblePlotOptions;
use EV\HighchartsBundle\Model\ColumnPlotOptions;
use EV\HighchartsBundle\Model\ColumnRangePlotOptions;
use EV\HighchartsBundle\Model\ErrorbarPlotOptions;
use EV\HighchartsBundle\Model\FunnelPlotOptions;
use EV\HighchartsBundle\Model\GaugePlotOptions;
use EV\HighchartsBundle\Model\LinePlotOptions;
use EV\HighchartsBundle\Model\PiePlotOptions;
use EV\HighchartsBundle\Model\PyramidPlotOptions;
use EV\HighchartsBundle\Model\ScatterPlotOptions;
use EV\HighchartsBundle\Model\SeriesPlotOptions;
use EV\HighchartsBundle\Model\SplinePlotOptions;
use EV\HighchartsBundle\Model\WaterfallPlotOptions;


class PlotOptions extends Base{
    
    protected $area;
    
    protected $arearange;
    
    protected $areaspline;
    
    protected $areasplinerange;
    
    protected $bar;
    
    protected $boxplot;
    
    protected $bubble;
    
    protected $column;
    
    protected $columnrange;
    
    protected $errorbar;
    
    protected $funnel;
    
    protected $gauge;
    
    protected $heatmap;
    
    protected $line;
    
    protected $pie;
    
    protected $pyramid;
    
    protected $scatter;
    
    protected $series;
    
    protected $solidgauge;
    
    protected $spline;
    
    protected $waterfall;
    
    
    public function __construct()
    {
        $this->area = new AreaPlotOptions();
        $this->arearange = new ArearangePlotOptions();
        $this->areaspline = new AreasplinePlotOptions();
        $this->areasplinerange = new AreasplineRangePlotOptions();
        $this->bar = new BarPlotOptions();
        $this->boxplot = new BoxplotPlotOptions();
        $this->bubble = new BubblePlotOptions();
        $this->column = new ColumnPlotOptions();
        $this->columnrange = new ColumnRangePlotOptions();
        $this->errorbar = new ErrorbarPlotOptions();
        $this->funnel = new FunnelPlotOptions();
        $this->gauge = new GaugePlotOptions();
        $this->line = new LinePlotOptions();
        $this->pie = new PiePlotOptions();
        $this->pyramid = new PyramidPlotOptions();
        $this->scatter = new ScatterPlotOptions();
        $this->series = new SeriesPlotOptions();
        $this->solidgauge = new SolidgaugePlotOptions();
        $this->spline = new SplinePlotOptions();
        $this->waterfall = new WaterfallPlotOptions();
    }
    
    public function getArea() {
        return $this->area;
    }

    public function setArea($area) {
        $this->area = $area;
    }

    public function getArearange() {
        return $this->arearange;
    }

    public function setArearange($arearange) {
        $this->arearange = $arearange;
    }

    public function getAreaspline() {
        return $this->areaspline;
    }

    public function setAreaspline($areaspline) {
        $this->areaspline = $areaspline;
    }

    public function getAreasplinerange() {
        return $this->areasplinerange;
    }

    public function setAreasplinerange($areasplinerange) {
        $this->areasplinerange = $areasplinerange;
    }

    public function getBar() {
        return $this->bar;
    }

    public function setBar($bar) {
        $this->bar = $bar;
    }

    public function getBoxplot() {
        return $this->boxplot;
    }

    public function setBoxplot($boxplot) {
        $this->boxplot = $boxplot;
    }

    public function getBubble() {
        return $this->bubble;
    }

    public function setBubble($bubble) {
        $this->bubble = $bubble;
    }

    public function getColumn() {
        return $this->column;
    }

    public function setColumn($column) {
        $this->column = $column;
    }

    public function getColumnrange() {
        return $this->columnrange;
    }

    public function setColumnrange($columnrange) {
        $this->columnrange = $columnrange;
    }

    public function getErrorbar() {
        return $this->errorbar;
    }

    public function setErrorbar($errorbar) {
        $this->errorbar = $errorbar;
    }

    public function getFunnel() {
        return $this->funnel;
    }

    public function setFunnel($funnel) {
        $this->funnel = $funnel;
    }

    public function getGauge() {
        return $this->gauge;
    }

    public function setGauge($gauge) {
        $this->gauge = $gauge;
    }

    public function getHeatmap() {
        return $this->heatmap;
    }

    public function setHeatmap($heatmap) {
        $this->heatmap = $heatmap;
    }

    public function getLine() {
        return $this->line;
    }

    public function setLine($line) {
        $this->line = $line;
    }

    public function getPie() {
        return $this->pie;
    }

    public function setPie($pie) {
        $this->pie = $pie;
    }

    public function getPyramid() {
        return $this->pyramid;
    }

    public function setPyramid($pyramid) {
        $this->pyramid = $pyramid;
    }

    public function getScatter() {
        return $this->scatter;
    }

    public function setScatter($scatter) {
        $this->scatter = $scatter;
    }

    public function getSeries() {
        return $this->series;
    }

    public function setSeries($series) {
        $this->series = $series;
    }

    public function getSolidgauge() {
        return $this->solidgauge;
    }

    public function setSolidgauge($solidgauge) {
        $this->solidgauge = $solidgauge;
    }

    public function getSpline() {
        return $this->spline;
    }

    public function setSpline($spline) {
        $this->spline = $spline;
    }

    public function getWaterfall() {
        return $this->waterfall;
    }

    public function setWaterfall($waterfall) {
        $this->waterfall = $waterfall;
    }
    
}
?>
