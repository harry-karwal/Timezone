# Timezone plugin for CakePHP

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer require harry-karwal/Timezone
```

## Call Element to initialize timezone in view(ctp).
echo $this->element('Timezone.device');

## Call Component in controller and use its methods.
$this->loadComponent('Timezone', ['className' => '\Timezone\Controller\Component\DeviceComponent']);

## Call View Helper.
$time = $this->loadHelper('Timezone.Device'); echo $time->system();
