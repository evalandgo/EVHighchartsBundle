<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;
use EV\HighchartsBundle\Model\ButtonsExporting;
use EV\HighchartsBundle\Model\ChartOptions;

class Exporting extends Base{
    
    protected $allowHTML = true;
    
    protected $buttons;
        
    protected $chartOptions;
        
    protected $enabled = true;
        
    protected $filename = "chart";
        
    protected $formAttributes;
        
    protected $scale = 2;
        
    protected $sourceHeight;
        
    protected $sourceWidth;
        
    protected $type = "image/png";
        
    protected $url;
        
    protected $width = "undefined";
        
    public function __construct($export_url = "http://export.highcharts.com/")
    {
        $this->buttons = new ButtonsExporting();
        $this->chartOptions = new ChartOptions();
        $this->url = $export_url;
    }
    
    public function getAllowHTML() {
        return $this->allowHTML;
    }

    public function setAllowHTML($allowHTML) {
        $this->allowHTML = $allowHTML;
    }

    public function getButtons() {
        return $this->buttons;
    }

    public function setButtons($buttons) {
        $this->buttons = $buttons;
    }

    public function getChartOptions() {
        return $this->chartOptions;
    }

    public function setChartOptions($chartOptions) {
        $this->chartOptions = $chartOptions;
    }

    public function getEnabled() {
        return $this->enabled;
    }

    public function setEnabled($enabled) {
        $this->enabled = $enabled;
    }

    public function getFilename() {
        return $this->filename;
    }

    public function setFilename($filename) {
        $this->filename = $filename;
    }

    public function getFormAttributes() {
        return $this->formAttributes;
    }

    public function setFormAttributes($formAttributes) {
        $this->formAttributes = $formAttributes;
    }

    public function getScale() {
        return $this->scale;
    }

    public function setScale($scale) {
        $this->scale = $scale;
    }

    public function getSourceHeight() {
        return $this->sourceHeight;
    }

    public function setSourceHeight($sourceHeight) {
        $this->sourceHeight = $sourceHeight;
    }

    public function getSourceWidth() {
        return $this->sourceWidth;
    }

    public function setSourceWidth($sourceWidth) {
        $this->sourceWidth = $sourceWidth;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function getWidth() {
        return $this->width;
    }

    public function setWidth($width) {
        $this->width = $width;
    }

}

?>
