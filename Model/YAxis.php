<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;
use EV\HighchartsBundle\Model\TitleAxis;
use EV\HighchartsBundle\Model\LabelsAxis;
use EV\HighchartsBundle\Model\PlotBandsAxis;
use EV\HighchartsBundle\Model\PlotLinesAxis;
use EV\HighchartsBundle\Model\StackLabelAxis;


/**
 * Description of YAxis
 *
 * @author Nathan
 * 
 * TODO : - $event & Methods
 *        - AddPlotBands()
 *        - AddPlotLines()
 */
class YAxis extends Base{
    
    protected $allowDecimals = true;
    
    protected $alternateGridColor = null;
    
    protected $categories = null;
    
    protected $ceiling;
    
    protected $dateTimeLabelFormats = null;
    
    protected $endOnTick = true;
    
    //protected $events;
    
    protected $floor = null;
    
    protected $gridLineColor = "#C0C0C0";
    
    protected $gridLineDashStyle = "Solid";
    
    protected $gridLineInterpolation = null;
    
    protected $gridLineWidth = 1;
    
    protected $gridZIndex = 1;
    
    protected $id = null;
    
    protected $labels;
    
    protected $lineColor = "#C0D0E0";
    
    protected $lineWidth = 0;
    
    protected $linkedTo = null;
    
    protected $max = null;
    
    protected $maxColor = "#102D4C";
    
    protected $maxPadding = 0.05;
    
    protected $maxZoom = null;
    
    protected $min = null;
    
    protected $minColor = "#EFEFFF";
    
    protected $minPadding = 0.05;
    
    protected $minRange = null;
    
    protected $minTickInterval = null;
    
    protected $minorGridLineColor = "#E0E0E0";
    
    protected $minorGridLineDashStyle = "Solid";
    
    protected $minorGridLineWidth = 1;
    
    protected $minorTickColor = "#A0A0A0";
    
    protected $minorTickInterval = null;
    
    protected $minorTickLength = 2;
    
    protected $minorTickPosition = "outside";
    
    protected $minorTickWidth = 0;
    
    protected $offset = 0;
    
    protected $opposite = false;
    
    protected $plotBands;
    
    protected $plotLines;
    
    protected $reversed = false;
    
    protected $reversedStacks = true;
    
    protected $showEmpty = true;
    
    protected $showFirstLabel = true;
    
    protected $showLastLabel = true;
    
    protected $stackLabels;
    
    protected $startOfWeek = 1;
    
    protected $startOnTick = true;
    
    protected $stops = null;
    
    protected $tickColor = "#C0D0E0";
    
    protected $tickInterval = null;
    
    protected $tickLength = 10;
    
    protected $tickPixelInterval = 72;
    
    protected $tickPosition = "outside";
    
    protected $tickPositioner = null;
    
    protected $tickPositions = null;
    
    protected $tickWidth = 0;
    
    protected $tickmarkPlacement = "between";
    
    protected $title;
    
    protected $type = "linear";
    
    public function __construct()
    {
         $this->title = new TitleAxis();
         $this->labels = new LabelsAxis();
         $this->stackLabels = new StackLabelAxis();
    }
    
    public function getAllowDecimals() {
        return $this->allowDecimals;
    }

    public function setAllowDecimals($allowDecimals) {
        $this->allowDecimals = $allowDecimals;
    }

    public function getAlternateGridColor() {
        return $this->alternateGridColor;
    }

    public function setAlternateGridColor($alternateGridColor) {
        $this->alternateGridColor = $alternateGridColor;
    }

    public function getCategories() {
        return $this->categories;
    }

    public function setCategories($categories) {
        $this->categories = $categories;
    }

    public function getCeiling() {
        return $this->ceiling;
    }

    public function setCeiling($ceiling) {
        $this->ceiling = $ceiling;
    }

    public function getDateTimeLabelFormats() {
        return $this->dateTimeLabelFormats;
    }

    public function setDateTimeLabelFormats($dateTimeLabelFormats) {
        $this->dateTimeLabelFormats = $dateTimeLabelFormats;
    }

    public function getEndOnTick() {
        return $this->endOnTick;
    }

    public function setEndOnTick($endOnTick) {
        $this->endOnTick = $endOnTick;
    }

    public function getFloor() {
        return $this->floor;
    }

    public function setFloor($floor) {
        $this->floor = $floor;
    }

    public function getGridLineColor() {
        return $this->gridLineColor;
    }

    public function setGridLineColor($gridLineColor) {
        $this->gridLineColor = $gridLineColor;
    }

    public function getGridLineDashStyle() {
        return $this->gridLineDashStyle;
    }

    public function setGridLineDashStyle($gridLineDashStyle) {
        $this->gridLineDashStyle = $gridLineDashStyle;
    }

    public function getGridLineInterpolation() {
        return $this->gridLineInterpolation;
    }

    public function setGridLineInterpolation($gridLineInterpolation) {
        $this->gridLineInterpolation = $gridLineInterpolation;
    }

    public function getGridLineWidth() {
        return $this->gridLineWidth;
    }

    public function setGridLineWidth($gridLineWidth) {
        $this->gridLineWidth = $gridLineWidth;
    }

    public function getGridZIndex() {
        return $this->gridZIndex;
    }

    public function setGridZIndex($gridZIndex) {
        $this->gridZIndex = $gridZIndex;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getLabels() {
        return $this->labels;
    }

    public function setLabels($labels) {
        $this->labels = $labels;
    }

    public function getStackLabels() {
        return $this->stackLabels;
    }

    public function setStackLabels($stackLabels) {
        $this->stackLabels = $stackLabels;
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

    public function getMax() {
        return $this->max;
    }

    public function setMax($max) {
        $this->max = $max;
    }

    public function getMaxColor() {
        return $this->maxColor;
    }

    public function setMaxColor($maxColor) {
        $this->maxColor = $maxColor;
    }

    public function getMaxPadding() {
        return $this->maxPadding;
    }

    public function setMaxPadding($maxPadding) {
        $this->maxPadding = $maxPadding;
    }

    public function getMaxZoom() {
        return $this->maxZoom;
    }

    public function setMaxZoom($maxZoom) {
        $this->maxZoom = $maxZoom;
    }

    public function getMin() {
        return $this->min;
    }

    public function setMin($min) {
        $this->min = $min;
    }

    public function getMinColor() {
        return $this->minColor;
    }

    public function setMinColor($minColor) {
        $this->minColor = $minColor;
    }

    public function getMinPadding() {
        return $this->minPadding;
    }

    public function setMinPadding($minPadding) {
        $this->minPadding = $minPadding;
    }

    public function getMinRange() {
        return $this->minRange;
    }

    public function setMinRange($minRange) {
        $this->minRange = $minRange;
    }

    public function getMinTickInterval() {
        return $this->minTickInterval;
    }

    public function setMinTickInterval($minTickInterval) {
        $this->minTickInterval = $minTickInterval;
    }

    public function getMinorGridLineColor() {
        return $this->minorGridLineColor;
    }

    public function setMinorGridLineColor($minorGridLineColor) {
        $this->minorGridLineColor = $minorGridLineColor;
    }

    public function getMinorGridLineDashStyle() {
        return $this->minorGridLineDashStyle;
    }

    public function setMinorGridLineDashStyle($minorGridLineDashStyle) {
        $this->minorGridLineDashStyle = $minorGridLineDashStyle;
    }

    public function getMinorGridLineWidth() {
        return $this->minorGridLineWidth;
    }

    public function setMinorGridLineWidth($minorGridLineWidth) {
        $this->minorGridLineWidth = $minorGridLineWidth;
    }

    public function getMinorTickColor() {
        return $this->minorTickColor;
    }

    public function setMinorTickColor($minorTickColor) {
        $this->minorTickColor = $minorTickColor;
    }

    public function getMinorTickInterval() {
        return $this->minorTickInterval;
    }

    public function setMinorTickInterval($minorTickInterval) {
        $this->minorTickInterval = $minorTickInterval;
    }

    public function getMinorTickLength() {
        return $this->minorTickLength;
    }

    public function setMinorTickLength($minorTickLength) {
        $this->minorTickLength = $minorTickLength;
    }

    public function getMinorTickPosition() {
        return $this->minorTickPosition;
    }

    public function setMinorTickPosition($minorTickPosition) {
        $this->minorTickPosition = $minorTickPosition;
    }

    public function getMinorTickWidth() {
        return $this->minorTickWidth;
    }

    public function setMinorTickWidth($minorTickWidth) {
        $this->minorTickWidth = $minorTickWidth;
    }

    public function getOffset() {
        return $this->offset;
    }

    public function setOffset($offset) {
        $this->offset = $offset;
    }

    public function getOpposite() {
        return $this->opposite;
    }

    public function setOpposite($opposite) {
        $this->opposite = $opposite;
    }
    
    public function getPlotBands() {
        return $this->plotBands;
    }

    public function addPlotBands($plotBands) {
        $this->plotBands[] = $plotBands;
    }

    public function getPlotLines() {
        return $this->plotLines;
    }

    public function setPlotLines($plotLines) {
        $this->plotLines = $plotLines;
    }
    
    public function getReversed() {
        return $this->reversed;
    }

    public function setReversed($reversed) {
        $this->reversed = $reversed;
    }

    public function getReversedStacks() {
        return $this->reversedStacks;
    }

    public function setReversedStacks($reversedStacks) {
        $this->reversedStacks = $reversedStacks;
    }

    public function getShowEmpty() {
        return $this->showEmpty;
    }

    public function setShowEmpty($showEmpty) {
        $this->showEmpty = $showEmpty;
    }

    public function getShowFirstLabel() {
        return $this->showFirstLabel;
    }

    public function setShowFirstLabel($showFirstLabel) {
        $this->showFirstLabel = $showFirstLabel;
    }

    public function getShowLastLabel() {
        return $this->showLastLabel;
    }

    public function setShowLastLabel($showLastLabel) {
        $this->showLastLabel = $showLastLabel;
    }

    public function getStartOfWeek() {
        return $this->startOfWeek;
    }

    public function setStartOfWeek($startOfWeek) {
        $this->startOfWeek = $startOfWeek;
    }

    public function getStartOnTick() {
        return $this->startOnTick;
    }

    public function setStartOnTick($startOnTick) {
        $this->startOnTick = $startOnTick;
    }

    public function getStops() {
        return $this->stops;
    }

    public function setStops($stops) {
        $this->stops = $stops;
    }

    public function getTickColor() {
        return $this->tickColor;
    }

    public function setTickColor($tickColor) {
        $this->tickColor = $tickColor;
    }

    public function getTickInterval() {
        return $this->tickInterval;
    }

    public function setTickInterval($tickInterval) {
        $this->tickInterval = $tickInterval;
    }

    public function getTickLength() {
        return $this->tickLength;
    }

    public function setTickLength($tickLength) {
        $this->tickLength = $tickLength;
    }

    public function getTickPixelInterval() {
        return $this->tickPixelInterval;
    }

    public function setTickPixelInterval($tickPixelInterval) {
        $this->tickPixelInterval = $tickPixelInterval;
    }

    public function getTickPosition() {
        return $this->tickPosition;
    }

    public function setTickPosition($tickPosition) {
        $this->tickPosition = $tickPosition;
    }

    public function getTickPositioner() {
        return $this->tickPositioner;
    }

    public function setTickPositioner($tickPositioner) {
        $this->tickPositioner = $tickPositioner;
    }

    public function getTickPositions() {
        return $this->tickPositions;
    }

    public function setTickPositions($tickPositions) {
        $this->tickPositions = $tickPositions;
    }

    public function getTickWidth() {
        return $this->tickWidth;
    }

    public function setTickWidth($tickWidth) {
        $this->tickWidth = $tickWidth;
    }

    public function getTickmarkPlacement() {
        return $this->tickmarkPlacement;
    }

    public function setTickmarkPlacement($tickmarkPlacement) {
        $this->tickmarkPlacement = $tickmarkPlacement;
    }
    
    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title, $optionsTitle = null) {
        $newTitle = $this->title;
        $newTitle->setText($title);
        if($optionsTitle != null){
            foreach($optionsTitle as $optionTitle=>$value){
                $method = 'set'.ucfirst($optionTitle);
                if(method_exists($newTitle, $method)){  
                    $newTitle->$method($value);
                }else{
                    return "La méthode ".$method." n'éxiste pas dans YAxis.php";
                }
            }
        }
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }


}

?>
