<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;
use EV\HighchartsBundle\Model\ButtonOptionsNavigation;

class Navigation extends Base{
    
    protected $buttonOptions;
        
    protected $menuItemHoverStyle = null;
        
    protected $menuItemStyle = null;
        
    protected $menuStyle = null;
        
    public function __construct()
    {
        $this->buttonOptions = new ButtonOptionsNavigation();
    }
    
    public function getButtonOptions() {
        return $this->buttonOptions;
    }

    public function setButtonOptions($buttonOptions) {
        $this->buttonOptions = $buttonOptions;
    }

    public function getMenuItemHoverStyle() {
        return $this->menuItemHoverStyle;
    }

    public function setMenuItemHoverStyle($menuItemHoverStyle) {
        $this->menuItemHoverStyle = $menuItemHoverStyle;
    }

    public function getMenuItemStyle() {
        return $this->menuItemStyle;
    }

    public function setMenuItemStyle($menuItemStyle) {
        $this->menuItemStyle = $menuItemStyle;
    }

    public function getMenuStyle() {
        return $this->menuStyle;
    }

    public function setMenuStyle($menuStyle) {
        $this->menuStyle = $menuStyle;
    }
    
}

?>
