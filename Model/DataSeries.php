<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;
use EV\HighchartsBundle\Model\Marker;
use EV\HighchartsBundle\Model\DataLabelsSeriesPlotOptions;

class DataSeries extends Base{
    
    protected $color = null;
    
    protected $dataLabels;
    
    protected $drilldown;
    
    //protected $events;
    
    protected $id = null;
    
    protected $isIntermediateSum = false;
    
    protected $isSum = false;
    
    protected $legendIndex = null;
    
    protected $marker;
    
    protected $name = null;
    
    protected $sliced = false;
    
    protected $x = null;
    
    protected $y = null;
    
    public function __construct()
    {
         $this->marker = new Marker();
         $this->dataLabels = new DataLabelsSeriesPlotOptions();
    }
    
    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getDataLabels() {
        return $this->dataLabels;
    }

    public function setDataLabels(DataLabelsSeriesPlotOptions $dataLabels) {
        $this->dataLabels = $dataLabels;
    }

    public function getDrilldown() {
        return $this->drilldown;
    }

    public function setDrilldown($drilldown) {
        $this->drilldown = $drilldown;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getIsIntermediateSum() {
        return $this->isIntermediateSum;
    }

    public function setIsIntermediateSum($isIntermediateSum) {
        $this->isIntermediateSum = $isIntermediateSum;
    }

    public function getIsSum() {
        return $this->isSum;
    }

    public function setIsSum($isSum) {
        $this->isSum = $isSum;
    }

    public function getLegendIndex() {
        return $this->legendIndex;
    }

    public function setLegendIndex($legendIndex) {
        $this->legendIndex = $legendIndex;
    }

    public function getMarker() {
        return $this->marker;
    }

    public function setMarker(MarkerDataSeries $marker) {
        $this->marker = $marker;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getSliced() {
        return $this->sliced;
    }

    public function setSliced($sliced) {
        $this->sliced = $sliced;
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
