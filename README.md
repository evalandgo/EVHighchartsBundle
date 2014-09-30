# EVHighchartsBundle
Highcharts bundle for Symfony2 to use the library javascript Highcharts with php

## Features
- Highcharts librairie usable in php
- Service with basics charts available
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

## Usage example

### Controller

Currently this bundle have 6 basics charts:
- Line chart
- Column chart
- Pie chart
- Stacked column chart
- Gauge chart

```php
// Acme\DemoBundle\Controller\DemoBasicChartStackedColumnController.php

        $highchartsGenerator = $this->container->get('ev_basicHighcharts.services');

        //Define series of data
        $arraySeries = array();
        $arraySeries[0]['name'] = 'John';
        $arraySeries[0]['data'] = array(array("y"=>2),array("y"=>6),array("y"=>4));
        $arraySeries[2]['name'] = 'Jane';
        $arraySeries[2]['data'] = array(array("y"=>7),array("y"=>5),array("y"=>3));
        $arraySeries[4]['name'] = 'Joe';
        $arraySeries[4]['data'] = array(array("y"=>8),array("y"=>2),array("y"=>7));
        
        //Define label
        $arrayLabels = array('Apples', 'Bananas', 'Oranges');

        //Change the theme
        $additionalOptions['theme'] = "red";

        $labelTitle = "Eaten fruits";

        $basicChartStackedColumn = $highchartsGenerator->generateBasicStackedColumn($arrayLabels,$labelTitle,$arraySeries,$additionalOptions);

        return array('dataChart' => $basicChartStackedColumn);
```

### View

```html
    <div id="container"></div>
    {{ highcharts_generation_render('container',dataChart) }}
```

## WARNING

The theme configuration of this bundle is based on the parameter ev_highcharts. Don't change the name of this parameter.