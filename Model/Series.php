<?php
namespace EV\HighchartsBundle\Model;

use EV\HighchartsBundle\Model\Base;
use EV\HighchartsBundle\Model\DataSeries;

class Series extends Base{
    
    protected $data;
        
    protected $dataParser = null;
        
    protected $dataURL = null;
        
    protected $id;
        
    protected $index = null;

    protected $innerSize = 0;
        
    protected $legendIndex = null;
        
    protected $name = null;
            
    protected $stack = null;
        
    protected $type = null;
        
    protected $xAxis = 0;
        
    protected $yAxis = 0;
        
    protected $zIndex;
    
    public function __construct()
    {
        
    }
    
    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
    }
    
    public function addData(array $arrData,$optionsPoints = null)
    {
        $i = 0;
        foreach($arrData as $data){
            $dataSerie = new DataSeries();
            
            if(isset($data["x"]))
                $dataSerie->setX($data["x"]);
            else
                $dataSerie->setX($i);

            if($data["y"] != null)
                $dataSerie->setY($data["y"]);
            
            if(isset($data["name"])){
                $dataSerie->setName($data["name"]);
            }
            
            if($optionsPoints != null){
                foreach($optionsPoints as $typeOption => $pointOption){
                    $method = "set".ucfirst($typeOption);
                    
                    if(method_exists($dataSerie, $method)){
                        $dataSerie->$method($pointOption);
                    }else{
                        return "La méthode ".$method." n'éxiste pas dans Series.php";
                    }
                        
                }
                
            }
            $this->data[] = $dataSerie;
            $i++;
        }
        
        return $this;
    }

    
    public function getDataParser() {
        return $this->dataParser;
    }

    public function setDataParser($dataParser) {
        $this->dataParser = $dataParser;
    }

    public function getDataURL() {
        return $this->dataURL;
    }

    public function setDataURL($dataURL) {
        $this->dataURL = $dataURL;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getIndex() {
        return $this->index;
    }

    public function setIndex($index) {
        $this->index = $index;
    }

    public function getInnerSize()
    {
        return $this->innerSize;
    }

    public function setInnerSize($innerSize)
    {
        $this->innerSize = $innerSize;
    }

    public function getLegendIndex() {
        return $this->legendIndex;
    }

    public function setLegendIndex($legendIndex) {
        $this->legendIndex = $legendIndex;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getStack() {
        return $this->stack;
    }

    public function setStack($stack) {
        $this->stack = $stack;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getXAxis() {
        return $this->xAxis;
    }

    public function setXAxis($xAxis) {
        $this->xAxis = $xAxis;
    }

    public function getYAxis() {
        return $this->yAxis;
    }

    public function setYAxis($yAxis) {
        $this->yAxis = $yAxis;
    }

    public function getZIndex() {
        return $this->zIndex;
    }

    public function setZIndex($zIndex) {
        $this->zIndex = $zIndex;
    }

    
}

?>
