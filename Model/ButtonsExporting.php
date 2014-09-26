<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;
use EV\HighchartsBundle\Model\ContextButtonExporting;

class ButtonsExporting extends Base{
    
    protected $contextButton;
    
    public function __construct()
    {
        $this->contextButton = new ContextButtonExporting();
    }
    
    public function getContextButton() {
        return $this->contextButton;
    }

    public function setContextButton($contextButton) {
        $this->contextButton = $contextButton;
    }

    
}

?>
