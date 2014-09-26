<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;

class Credit extends Base{
    
    protected $enabled = false;
    
    protected $href = "http =";//www.highcharts.com;
    
    protected $position = null;
    
    protected $style = null;
    
    protected $text = "Highcharts.com";
    
    public function getEnabled() {
        return $this->enabled;
    }

    public function setEnabled($enabled) {
        $this->enabled = $enabled;
    }

    public function getHref() {
        return $this->href;
    }

    public function setHref($href) {
        $this->href = $href;
    }

    public function getPosition() {
        return $this->position;
    }

    public function setPosition($position) {
        $this->position = $position;
    }

    public function getStyle() {
        return $this->style;
    }

    public function setStyle($style) {
        $this->style = $style;
    }

    public function getText() {
        return $this->text;
    }

    public function setText($text) {
        $this->text = $text;
    }
    
}
?>
