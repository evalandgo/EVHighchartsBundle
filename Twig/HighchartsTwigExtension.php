<?php

namespace EV\HighchartsBundle\Twig;

use EV\HighchartsBundle\Services\Themes;

class HighchartsTwigExtension extends \Twig_Extension
{
    /**
     * @var \Twig_Environment
    */
    protected $environment;
    
    protected $theme;

    public function __construct(Themes $theme){
        $this->theme = $theme;
    }    
    
    /**
     * {@inheritDoc}
     */
    public function initRuntime(\Twig_Environment $environment)
    {
        $this->environment = $environment;
    }
    
    /**
     * Return the functions registered as twig extensions
     * 
     * @return array
     */
    public function getFunctions()
    {
        return array(
            'highcharts_generation_render' => new \Twig_Function_Method($this, 'render', array('is_safe' => array('html'))),
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
    public function render($data,$target = null)
    {
        $addTarget = null;
        
        if($target == null){
            $addTarget = 1;
            $target = "container_".uniqid();
        }
        
        $data = $this->theme->applyTheme($data);
        
        return $this->environment->render("EVHighchartsBundle:Highcharts:graphGenerator.html.twig",array('target'=>$target,'data'=>$data,'addTarget'=>$addTarget));
    }
    
    public function getName() {
        return 'highcharts_generation';
    }
    
}
?>
