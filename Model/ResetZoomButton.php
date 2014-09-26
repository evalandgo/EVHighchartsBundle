<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;

class ResetZoomButton extends Base{
    
    protected $postion = null;
    
    protected $relativeTo = "plot";
    
    protected $theme = null;
    
    public function __construct()
    {
         
    }
    
    public function getPostion() {
        return $this->postion;
    }

    public function setPostion($postion) {
        $this->postion = $postion;
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
