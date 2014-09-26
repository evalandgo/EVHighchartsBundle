<?php
namespace EV\HighchartsBundle\Model;

abstract class Base implements \JsonSerializable
{

    public function jsonSerialize() {
        $array = array();
        foreach($this as $key => $val){
            $array[$key] =$val ;
        }
        
        return $array;
    }
}

?>
