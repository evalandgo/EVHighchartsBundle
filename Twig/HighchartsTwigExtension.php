<?php

namespace EV\HighchartsBundle\Twig;

use EV\HighchartsBundle\Services\Themes;

class HighchartsTwigExtension extends \Twig_Extension
{
    protected $theme;

    public function __construct(Themes $theme){
        $this->theme = $theme;
    }
    
    /**
     * Return the functions registered as twig extensions
     * 
     * @return array
     */
    public function getFunctions()
    {
        return array(
            'highcharts_generation_render' => new \Twig\TwigFunction($this, 'render', array('is_safe' => array('html'),'needs_environment' => true)),
        );
    }
    
    /**
     * Renders the highcharts template
     *
     * @param string $template
     * @param array $queryParams
     * @param array $viewParams
     *
     * @return string
     */
    public function render(\Twig_Environment $environment,$data,$target = null)
    {
        $addTarget = null;
        
        if($target == null){
            $addTarget = 1;
            $target = "container_".uniqid();
        }
        
        $data = $this->theme->applyTheme($data);
        
        return $environment->render("EVHighchartsBundle:Highcharts:graphGenerator.html.twig",array('target'=>$target,'data'=>$data,'addTarget'=>$addTarget));
    }
    
    public function getName() {
        return 'highcharts_generation';
    }
    
}
?>
