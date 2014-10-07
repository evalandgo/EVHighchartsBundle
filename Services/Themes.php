<?php
namespace EV\HighchartsBundle\Services;

use Symfony\Component\HttpKernel\Kernel;

class Themes{
    
    protected $kernel;
    protected $arrThemes;
    
    public function __construct(Kernel $kernel,$arrThemes)
    {        
        $this->kernel = $kernel;
        $this->arrThemes = $arrThemes;
    }
    
    public function applyTheme($highchartsView){ 
        
        $path = null;
        
        if($highchartsView->getTheme() == null){
            $path = $this->kernel->locateResource($this->arrThemes['default']);   
        }else{ 
            $path = $this->kernel->locateResource($this->arrThemes[$highchartsView->getTheme()]);
        }
        
        $fp = fopen ($path, "r");  

        $themeJson = fread ($fp, filesize($path));  

        fclose ($fp);
        
        $data = array_replace_recursive(json_decode($highchartsView->getHighcharts(),true), json_decode($themeJson, true) );
        
        return json_encode($data);
    }
    
}

?>
