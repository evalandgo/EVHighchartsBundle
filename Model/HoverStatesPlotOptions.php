<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;
use EV\HighchartsBundle\Model\HaloStatesPlotOptions;
use EV\HighchartsBundle\Model\Marker;

class HoverStatesPlotOptions extends Base{
    
    protected $enabled =  true;
    
    protected $halo;
    
    protected $lineWidth =  2;
    
    protected $lineWidthPlus =  1;
    
    protected $marker;
    
    public function __construct()
    {
        $this->halo = new HaloStatesPlotOptions();
        $this->marker = new Marker();
    }

    public function getEnabled() {
        return $this->enabled;
    }

    public function setEnabled($enabled) {
        $this->enabled = $enabled;
    }

    public function getHalo() {
        return $this->halo;
    }

    public function setHalo($halo) {
        $this->halo = $halo;
    }

    public function getLineWidth() {
        return $this->lineWidth;
    }

    public function setLineWidth($lineWidth) {
        $this->lineWidth = $lineWidth;
    }

    public function getLineWidthPlus() {
        return $this->lineWidthPlus;
    }

    public function setLineWidthPlus($lineWidthPlus) {
        $this->lineWidthPlus = $lineWidthPlus;
    }

    public function getMarker() {
        return $this->marker;
    }

    public function setMarker($marker) {
        $this->marker = $marker;
    }

    
}

?>
