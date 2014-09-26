<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;

class DrilldownButton extends Base{
    
    protected $position;
    
    protected $relativeTo = "plotBox";
    
    protected $theme;
    
    public function getPosition() {
        return $this->position;
    }

    public function setPosition($position) {
        $this->position = $position;
    }

    public function getRelativeTo() {
        return $this->relativeTo;
    }

    public function setRelativeTo($relativeTo) {
        $this->relativeTo = $relativeTo;
    }

    public function getTheme() {
        return $this->theme;
    }

    public function setTheme($theme) {
        $this->theme = $theme;
    }
    
}

?>
