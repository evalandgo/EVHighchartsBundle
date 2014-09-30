<?php
namespace EV\HighchartsBundle\Services;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\Container;

class Themes{
    
    protected $request;
    protected $container;
    
    public function __construct(Request $request,Container $container)
    {        
        $this->request = $request;
        $this->container = $container;
    }
    
    public function applyTheme($arrJson,$theme = null){ 
        
        $kernel = $this->container->get('kernel');
        
        $arrThemesPerso = $this->container->getParameter('ev_highcharts.themes');
        
        $path = null;
        
        if($theme == null){
            $path = $kernel->locateResource($arrThemesPerso['default']);   
        }else{ 
            $path = $kernel->locateResource($arrThemesPerso[$theme]);
        }
        
        $fp = fopen ($path, "r");  

        $themeJson = fread ($fp, filesize($path));  

        fclose ($fp);
        
        $data = array_replace_recursive(json_decode($arrJson,true), json_decode($themeJson, true) );
        
        return json_encode($data);
    }
    
}

?>
