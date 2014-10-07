<?php

namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;
use EV\HighchartsBundle\Model\Highcharts;

/**
 * Description of HighchartsView
 *
 * @author Nathan
 * 
 */
class HighchartsView extends Base {
    
    protected $highcharts;
    
    protected $theme;
    
    public function __construct(Highcharts $highcharts,$theme)
    {
         $this->highcharts = $highcharts;
         $this->theme = $theme;
    }
    
    public function getHighcharts() {
        return json_encode($this->highcharts);
    }

    public function setHighcharts($highcharts) {
        $this->highcharts = $highcharts;
    }

    public function getTheme() {
        return $this->theme;
    }

    public function setTheme($theme) {
        $this->theme = $theme;
    }

}

?>