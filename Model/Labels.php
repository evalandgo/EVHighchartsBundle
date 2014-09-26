<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;
use EV\HighchartsBundle\Model\ItemsLabels;

/**
 * Description of Lables
 *
 * @author Nathan
 * 
 * TODO : - AddItems()
 */
class Labels extends Base{
    
    protected $items;
        
    protected $style = null;
    
    public function __construct()
    {
        
    }
    
    public function getItems() {
        return $this->items;
    }

    public function setItems($items) {
        $this->items = $items;
    }

    public function getStyle() {
        return $this->style;
    }

    public function setStyle($style) {
        $this->style = $style;
    }

}

?>
