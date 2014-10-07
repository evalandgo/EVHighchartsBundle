# EVHighchartsBundle
Highcharts bundle for Symfony2 to use the library javascript Highcharts with php

## Features
- Highcharts librairie usable in php
- Factory with basics charts type available
- Themes customizable and editable on json

## Installation and configuration

### Installation
In composer.json file, add :
```json
{
    "repositories": [
        {
            "type": "git",
            "url":  "git@github.com:evalandgo/EVHighchartsBundle.git"
        }
    ],
    "require": {
        "ev/ev-highcharts-bundle": "dev-master"
    }
}
```

For download this bundle, a permission is requiered on this repository and the Composer needs to use a **SSH** connexion on GitHub.

More informations : [Generating SSH Keys](https://help.github.com/articles/generating-ssh-keys).

In app/AppKernel.php file, add :
```php
public function registerBundles()
{
    return array(
        // ...
        new EV\HighchartsBundle\HighchartsBundle(),
        // ...
    );
}
```

### Configuration example
In config.yml
```yaml
    ev_highcharts:
        themes: 
            - default : "@DemoAcmeBundle/Resources/public/js/default.json"
            - red : "@DemoAcmeBundle/Resources/public/js/red.json"
```

If no theme is entered, a default theme will be applied. This theme can be redefined in the name of "default" as the example above.

## Basic Usage example

Currently this bundle have 6 basic charts type:
- Line chart (EV\HighchartsBundle\HighchartsType\LineChartType.php)
- Column chart (EV\HighchartsBundle\HighchartsType\ColumnChartType.php)
- Pie chart (EV\HighchartsBundle\HighchartsType\PieChartType.php)
- Stacked column chart (EV\HighchartsBundle\HighchartsType\StackedColumnChartType.php)
- Gauge chart (EV\HighchartsBundle\HighchartsType\GaugeChartType.php)

### Service

```xml
    <service id="demo_highcharts.columnChart.type" class="Demo\AcmeBundle\Type\DemoColumnChartType">
    </service>
```

### Own Type
```php

// Acme\DemoBundle\Type;

use EV\HighchartsBundle\HighchartsType\DemoColumnChartType;

class ColumnTypeClient extends ColumnChartType{
    
    public function buildHighcharts(HighchartsBuilder $highchartsBuilder) {
        
        $arrayLabels = array('Apples', 'Bananas', 'Oranges');

        $labelTitle = "Eaten fruits";

        $arraySeries = array();
        $arraySeries[0]['name'] = 'John';
        $arraySeries[0]['data'] = array(array("y"=>2),array("y"=>6),array("y"=>4));
        $arraySeries[1]['name'] = 'Jane';
        $arraySeries[1]['data'] = array(array("y"=>7),array("y"=>5),array("y"=>3));
        $arraySeries[2]['name'] = 'Joe';
        $arraySeries[2]['data'] = array(array("y"=>8),array("y"=>2),array("y"=>7));  

        $additionalOptions = array();

        parent::buildHighcharts($highchartsBuilder, $arrayLabels, $labelTitle, $arraySeries,$additionalOptions);
        
        return $highchartsBuilder;
    }
    
}

```

### Controller

```php
// Acme\DemoBundle\Controller\DemoController.php

    $factoryHighcharts = $this->container->get('ev_highcharts.factory.highcharts');

    $highcharts = $factoryHighcharts->createHighchartsFromType($this->container->get('demo_highcharts.columnChart.type'))->createView();

    return array('data' => $highcharts);
```

Function HighchartsBuilder->createView() accept 1 theme referenced by his name like he is in config

```php

    $highcharts = $factoryHighcharts->createHighchartsFromType($this->container->get('demo_highcharts.columnChart.type'))->createView('red');

```

### View

```jinja
    <div id="container"></div>
    {{ highcharts_generation_render(data,'container') }}
```

OR

```jinja
    {{ highcharts_generation_render(data) }}
```

### Personalized usage

Highcharts Object is based on the Api of Highcharts javascript

##Controller

```php
// Acme\DemoBundle\Controller\DemoController.php

    $highchartsBuilder = $factoryHighcharts->createHighchartsBuilder();

    $highchartObject = $highchartsBuilder->getHighcharts();

    $arraySeries = array();
    $arraySeries[0]['name'] = 'John';
    $arraySeries[0]['data'] = array(array("y"=>2),array("y"=>6),array("y"=>4));
    $arraySeries[1]['name'] = 'Jane';
    $arraySeries[1]['data'] = array(array("y"=>7),array("y"=>5),array("y"=>3));
    $arraySeries[2]['name'] = 'Joe';
    $arraySeries[2]['data'] = array(array("y"=>8),array("y"=>2),array("y"=>7));

    foreach($arraySeries as $series){
        $serie = $highchartsBuilder->createSeries($series['name'],$series['data']);
        $highchartObject->addSeries($serie);
    }

    $highchartObject->getYAxis()->setTitle("Eaten food");

    $highchartObject->getXAxis()->setCategories(array('Pommes', 'Bananes', 'Oranges'));

    $highchartObject->getChart()->setType('column');

    return array('data' => $highchartsBuilder->createView());

```