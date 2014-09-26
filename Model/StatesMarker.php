<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;
use EV\HighchartsBundle\Model\HoverStates;
use EV\HighchartsBundle\Model\SelectStates;

class StatesMarker extends Base{
    
    protected $hover;
    
    protected $select;
    
    public function __construct()
    {
         $this->hover = new HoverStates();
         $this->select = new SelectStates();
    }
    
    public function getHover() {
        return $this->hover;
    }

    public function setHover($hover) {
        $this->hover = $hover;
    }

    public function getSelect() {
        return $this->select;
    }

    public function setSelect($select) {
        $this->select = $select;
    }


}

?>