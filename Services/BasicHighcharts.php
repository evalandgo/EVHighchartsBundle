<?php
namespace EV\HighchartsBundle\Services;

use EV\HighchartsBundle\Model\Highcharts;
use EV\HighchartsBundle\Model\Series;
use EV\HighchartsBundle\Model\Background;
use EV\HighchartsBundle\Model\DataLabelsPlotOptions;
use EV\HighchartsBundle\Services\Themes;

class BasicHighcharts{
    
    protected $themes;
    
    public function __construct(Themes $themes)
    {
        $this->themes = $themes;
    }
    
    private function createSeries($name,$data,$arrOptions = null){
        $series = new Series();
        $series->setName($name);
        
        if(isset($arrOptions['data']))
            $series->addData($data,$arrOptions['data']);
        else
            $series->addData($data);
            
        if(isset($arrOptions['series'])){
            foreach($arrOptions['series'] as $attr => $value){
                $method = "set".ucfirst($attr);
                $series->$method($value);
            }
        }
        
        return $series;
    }
    
    private function useTheme($arrJson,$theme = null){
        return $this->themes->applyTheme($arrJson,$theme);
    }
    
    public function generateBasicBaseChart($type,$categories,$titleY,$dataSeries,$additionalOptions = null){
        $highCharts = new Highcharts();
        
        $highCharts->getChart()->setType($type);
        
        if(isset($additionalOptions['title']))
            $highCharts->setTitle($additionalOptions['title']);
        
        $highCharts->getXAxis()->setCategories($categories);
        $highCharts->getYAxis()->setTitle($titleY);
        
        foreach($dataSeries as $series){
            $serie = $this->createSeries($series['name'],$series['data']);
            $highCharts->addSeries($serie);
        }
        
        if(isset($additionalOptions['subtitle']))
            $highCharts->setSubtitle($additionalOptions['subtitle']);
        
        return $highCharts;
    }
    
    public function generateBasicColumnChart($categories,$titleY,$dataSeries,$additionalOptions = null){

        $highCharts = $this->generateBasicBaseChart("column",$categories, $titleY, $dataSeries);
        
        if(isset($additionalOptions['subtitle']))
            $highCharts->setSubtitle($additionalOptions['subtitle']);
        
        if(isset($additionalOptions['theme']))
            return $this->useTheme(json_encode($highCharts),$additionalOptions['theme']);
        else
            return $this->useTheme(json_encode($highCharts));
    }
    
    public function generateBasicStackedColumn($categories,$titleY,$dataSeries,$additionalOptions = null){
        $highCharts = $this->generateBasicBaseChart("column",$categories, $titleY, $dataSeries);
        
        $stackLabels = $highCharts->getYAxis()->getStackLabels();
        $stackLabels->setEnabled(true);
        
        $column = $highCharts->getPlotOptions()->getColumn();
        $column->setStacking('normal');
                
        if(isset($additionalOptions['subtitle']))
            $highCharts->setSubtitle($additionalOptions['subtitle']);
                
        if(isset($additionalOptions['theme']))
            return $this->useTheme(json_encode($highCharts),$additionalOptions['theme']);
        else
            return $this->useTheme(json_encode($highCharts));
    }
    
    public function generateBasicLineChart($categories,$titleY,$dataSeries,$additionalOptions = null){

        $highCharts = $this->generateBasicBaseChart("line",$categories, $titleY, $dataSeries);
        
        if(isset($additionalOptions['subtitle']))
            $highCharts->setSubtitle($additionalOptions['subtitle']);
        
        if(isset($additionalOptions['theme']))
            return $this->useTheme(json_encode($highCharts),$additionalOptions['theme']);
        else
            return $this->useTheme(json_encode($highCharts));
    }
    
    public function generateBasicPieChart($dataSeries,$additionalOptions = null){
        $highCharts = new Highcharts();
        
        $highCharts->getChart()->setType("pie");
        $highCharts->getChart()->setPlotBackgroundColor(null);
        $highCharts->getChart()->setPlotBorderWidth(1);
        $highCharts->getChart()->setPlotShadow(false);
        
        if(isset($additionalOptions['title']))
            $highCharts->setSubtitle($additionalOptions['title']);
        
        $arrOptionSeries = array();
        $arrOptionSeries['series'] = array('type'=>'pie');
        $serie = $this->createSeries($dataSeries['name'],$dataSeries['data'],$arrOptionSeries);
        $highCharts->addSeries($serie);
        
        if(isset($additionalOptions['subtitle']))
            $highCharts->setSubtitle($additionalOptions['subtitle']);
        
        $plotOptions = $highCharts->getPlotOptions();
        
        
        $pie = $plotOptions->getPie();
        $pie->setAllowPointSelect(true);
        $pie->setCursor('pointer');
        
        $dataLabels = $pie->getDatalabels();
        $dataLabels->setEnabled(true);
        $dataLabels->setFormat('<b>{point.percentage:.1f}</b>');
        
        if(isset($additionalOptions['theme']))
            return $this->useTheme(json_encode($highCharts),$additionalOptions['theme']);
        else
            return $this->useTheme(json_encode($highCharts));
            
    }
    
    public function generateBasicGauge($titleY,$dataSeries,$valMin,$valMax,$additionalOptions = null){
        $highCharts = new Highcharts();
        
        $highCharts->getChart()->setType("solidgauge");
        
        if(isset($additionalOptions['chartHeight']))
            $highCharts->getChart()->setHeight($additionalOptions['chartHeight']);
        
        if(isset($additionalOptions['title']))
            $highCharts->setTitle($additionalOptions['title']);
        
        if(isset($additionalOptions['exporting']))
            $highCharts->getExporting()->setEnabled($additionalOptions['exporting']);
                
        $yAxis = $highCharts->getYAxis();
        $yAxis->setTitle($titleY);
        
        $arrayColor = array();
        if(isset($additionalOptions['color'])){
            foreach($additionalOptions['color'] as $arrColor){
                $arrayColor[] = array($arrColor['limit'],$arrColor['codeColor']);
            }
            $yAxis->setStops($arrayColor);
        }else{
            $yAxis->setStops(array(array(0.1,'#55BF3B'),array(0.5,'#DDDF0D'),array(0.9,'#DF5353')));
        }
        
        $yAxis->setLineWidth(0);
        $yAxis->setMinorTickInterval(null);
        $yAxis->setTickPixelInterval(72);
        $yAxis->setTickWidth(0);
        $yAxis->setMin($valMin);
        $yAxis->setMax($valMax);
        $yAxis->getLabels()->setEnabled(false);
        $yAxis->getLabels()->setY(20);
        $yAxis->setGridLineColor("#0000ffff");
        
        if(isset($additionalOptions['noLabels'])){     
            $yAxis->setShowFirstLabel(false);
            $yAxis->setShowLastLabel(false);
        }
                
        $pane = $highCharts->getPane();
        
        if(isset($additionalOptions['paneCenter']))
            $pane->setCenter($additionalOptions['paneCenter']);
        else
            $pane->setCenter(array('50%','85%'));
        
        $pane->setStartAngle(-90);
        $pane->setEndAngle(90);
        
        $background = new Background();
        $background->setBackgroundColor("#EEE");
        $background->setInnerRadius('60%');
        $background->setOuterRadius('100%');
        $background->setShape('arc');
        $pane->setBackground($background);
                
        $dataLabels = $highCharts->getPlotOptions()->getSolidGauge()->getDataLabels();
        $dataLabels->sety(5);
        $dataLabels->setBorderWidth(0);
        $dataLabels->setUseHTML(true);
        
        $highCharts->getTooltip()->setEnabled(false);
        
        if(isset($additionalOptions['subtitle']))
            $highCharts->setSubtitle($additionalOptions['subtitle']);
     
        $dataLabelsDataSeries = new DataLabelsPlotOptions();
        $dataLabelsDataSeries->setY(60);
        
        if(isset($additionalOptions['valueFormat']))
            $dataLabelsDataSeries->setFormat('<div style="text-align:center"><span style="font-size:25px;color:black ">'.$additionalOptions['valueFormat'].'</span><br/>');
        else
            $dataLabelsDataSeries->setFormat('<div style="text-align:center"><span style="font-size:25px;color:black ">{y}</span><br/>');   
        
        $arrOptionSeries = array();
        $arrOptionSeries['data'] = array("dataLabels"=>$dataLabelsDataSeries);
        $serie = $this->createSeries($dataSeries['name'],$dataSeries['data'],$arrOptionSeries);
        $highCharts->addSeries($serie);
        
        $highCharts->getLegend()->setEnabled(false);
        
        if(isset($additionalOptions['theme']))
            return $this->useTheme(json_encode($highCharts),$additionalOptions['theme']);
        else
            return $this->useTheme(json_encode($highCharts));
        
    }
    
}

?>
