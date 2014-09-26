<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;

class Colors extends Base{
    
    protected $colors = array('#7cb5ec', '#434348', '#90ed7d', '#f7a35c', '#8085e9','#f15c80', '#e4d354', '#8085e8', '#8d4653', '#91e8e1');
    
    public function getColor() {
        return $this->colors;
    }

    public function setColor($colors) {
        $this->colors = $colors;
    }

}

?>
