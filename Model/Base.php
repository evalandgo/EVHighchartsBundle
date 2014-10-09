<?php
namespace EV\HighchartsBundle\Model;

abstract class Base
{

    public function toArray(){
        $var = get_object_vars($this);
        foreach($var as &$value){
           if(is_object($value) && method_exists($value,'toArray')){
              $value = $value->toArray();
           }
           elseif(is_array($value)){
               foreach($value as &$value1){
                   if(is_object($value1) && method_exists($value1,'toArray')){
                        $value1 = $value1->toArray();
                     }
               }
           }
        }
        return $var;
     }
}

?>
