<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;
use EV\HighchartsBundle\Model\Chart;
use EV\HighchartsBundle\Model\Credit;
use EV\HighchartsBundle\Model\Drilldown;
use EV\HighchartsBundle\Model\Exporting;
use EV\HighchartsBundle\Model\Labels;
use EV\HighchartsBundle\Model\Legend;
use EV\HighchartsBundle\Model\Loading;
use EV\HighchartsBundle\Model\Navigation;
use EV\HighchartsBundle\Model\NoData;
use EV\HighchartsBundle\Model\Pane;
use EV\HighchartsBundle\Model\PlotOptions;
use EV\HighchartsBundle\Model\Series;
use EV\HighchartsBundle\Model\Subtitle;
use EV\HighchartsBundle\Model\Title;
use EV\HighchartsBundle\Model\Tooltip;
use EV\HighchartsBundle\Model\XAxis;
use EV\HighchartsBundle\Model\YAxis;

/**
 * Description of BarPlotOptions
 *
 * @author Nathan
 * 
 * TODO  =  - $exporting & Methods
 *          - $navigation & Methods
 */
class Highcharts extends Base{
    
    protected $chart;
    
    protected $colors;
    
    protected $credits;
    
    protected $drilldown;
    
    protected $exporting;
    
    protected $labels;
    
    protected $legend;
    
    protected $loading;
    
    //protected $navigation;
    
    protected $noData;
    
    protected $pane;
    
    protected $plotOptions;
    
    protected $series;
    
    protected $subtitle;
    
    protected $title;
    
    protected $tooltip;
    
    protected $xAxis;
    
    protected $yAxis;
    
    public function __construct()
    {
         $this->chart = new Chart();
         $this->colors = array('#7cb5ec', '#434348', '#90ed7d', '#f7a35c', '#8085e9','#f15c80', '#e4d354', '#8085e8', '#8d4653', '#91e8e1');
         $this->credits = new Credit();
         $this->drilldown = new Drilldown();
         $this->exporting = new Exporting();
         $this->legend = new Legend();
         $this->labels = new Labels();
         $this->loading = new Loading();
         //$this->navigation = new Navigation();
         $this->noData = new NoData();
         $this->pane = new Pane();
         $this->plotOptions = new PlotOptions();
         $this->subtitle = new Subtitle();
         $this->title = new Title(null);
         $this->tooltip = new Tooltip();
         $this->xAxis = new XAxis();
         //$this->yAxis = new YAxis();
    }
    
    public function getChart() {
        return $this->chart;
    }

    public function setChart($chart) {
        $this->chart = $chart;
    }

    public function getColors() {
        return $this->colors;
    }

    public function setColors($colors) {
        $this->colors = $colors;
    }

    public function getCredits() {
        return $this->credits;
    }

    public function setCredits($credits) {
        $this->credits = $credits;
    }

    public function getDrilldown() {
        return $this->drilldown;
    }

    public function setDrilldown($drilldown) {
        $this->drilldown = $drilldown;
    }

    public function getExporting() {
        return $this->exporting;
    }

    public function setExporting($exporting) {
        $this->exporting = $exporting;
    }

    public function getLabels() {
        return $this->labels;
    }

    public function setLabels($labels) {
        $this->labels = $labels;
    }

    public function getLegend() {
        return $this->legend;
    }

    public function setLegend($legend) {
        $this->legend = $legend;
    }

    public function getLoading() {
        return $this->loading;
    }

    public function setLoading($loading) {
        $this->loading = $loading;
    }

    /*public function getNavigation() {
        return $this->navigation;
    }

    public function setNavigation($navigation) {
        $this->navigation = $navigation;
    }*/

    public function getNoData() {
        return $this->noData;
    }

    public function setNoData($noData) {
        $this->noData = $noData;
    }

    public function getPane() {
        return $this->pane;
    }

    public function setPane($pane) {
        $this->pane = $pane;
    }

    public function getPlotOptions() {
        return $this->plotOptions;
    }

    public function setPlotOptions($plotOptions) {
        $this->plotOptions = $plotOptions;
    }

    public function getSeries() {
        return $this->series;
    }

    public function addSeries(Series $serie)
    {
        $this->series[] = $serie;

        return $this;
    }

    public function removeSeries(Series $serie)
    {
        $this->series->removeElement($serie);
    }

    public function getSubtitle() {
        return $this->subtitle;
    }

    public function setSubtitle($subtitle) {
        $this->subtitle->setText($subtitle);
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title->setText($title);
    }

    public function getTooltip() {
        return $this->tooltip;
    }

    public function setTooltip($tooltip) {
        $this->tooltip = $tooltip;
    }

    public function getXAxis() {
        return $this->xAxis;
    }

    public function setXAxis($xAxis) {
        $this->xAxis = $xAxis;
    }

    public function addYAxis(YAxis $yAxis){
        $this->yAxis[] = $yAxis;
        
        return $this;
    }
    
    public function getYAxis() {
        return $this->yAxis;
    }
}
?>
