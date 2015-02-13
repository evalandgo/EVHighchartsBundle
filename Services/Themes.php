<?php
namespace EV\HighchartsBundle\Services;

use Symfony\Component\HttpKernel\Config\FileLocator;

class Themes
{    
    protected $fileLocator;
    protected $arrThemes;
    
    public function __construct(FileLocator $fileLocator,$arrThemes)
    {        
        $this->fileLocator = $fileLocator;
        $this->arrThemes = $arrThemes;
    }
    
    public function applyTheme($highchartsView){ 
        
        $path = null;
            
        if($highchartsView->getTheme() == null){
            $path = $this->fileLocator->locate($this->arrThemes['default']);   
        }else{ 
            $path = $this->fileLocator->locate($this->arrThemes[$highchartsView->getTheme()]);
        }
        
        $fp = fopen ($path, "r");  

        $themeJson = fread ($fp, filesize($path));  

        fclose ($fp);
        
        $data = array_replace_recursive($highchartsView->getHighcharts(), json_decode($themeJson, true) );
                
        return json_encode($data);
    }
    
}

?>
