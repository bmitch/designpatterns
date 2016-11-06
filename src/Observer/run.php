<?php
require __DIR__ . '/../../vendor/autoload.php';

use Bmitch\Observer as Observer;

$weatherData = new Observer\WeatherData();

$currentDisplay = new Observer\CurrentConditionsDisplay($weatherData);

$heatIndexDisplay = new Observer\HeatIndexDisplay($weatherData);

$weatherData->setMeasurements(80, 65, 30.4);
$weatherData->setMeasurements(82, 70, 29.2);
$weatherData->setMeasurements(78, 90, 29.2);

$weatherData->removeObserver($heatIndexDisplay);

$weatherData->setMeasurements(0, 0, 0);
