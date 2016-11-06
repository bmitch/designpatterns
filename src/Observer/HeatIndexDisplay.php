<?php

namespace Bmitch\Observer;

class HeatIndexDisplay implements ObserverInterface, DisplayElementInterface
{
    protected $temperature;

    protected $humidity;

    protected $weatherData;

    public function __construct(SubjectInterface $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;

        $this->display();
    }

    public function display()
    {
        $heatIndex = $this->computeHeatIndex();
        echo "Current heat index: {$heatIndex}\n";
    }

    private function computeHeatIndex() {
        $index = (float)((16.923 + (0.185212 * $this->temperature) + (5.37941 * $this->humidity) - (0.100254 * $this->temperature * $this->humidity) +
            (0.00941695 * ($this->temperature * $this->temperature)) + (0.00728898 * ($this->humidity * $this->humidity)) +
            (0.000345372 * ($this->temperature * $this->temperature * $this->humidity)) - (0.000814971 * ($this->temperature * $this->humidity * $this->humidity)) +
            (0.0000102102 * ($this->temperature * $this->temperature * $this->humidity * $this->humidity)) - (0.000038646 * ($this->temperature * $this->temperature * $this->temperature)) + (0.0000291583 *  
            ($this->humidity * $this->humidity * $this->humidity)) + (0.00000142721 * ($this->temperature * $this->temperature * $this->temperature * $this->humidity)) +
            (0.000000197483 * ($this->temperature * $this->humidity * $this->humidity * $this->humidity)) - (0.0000000218429 * ($this->temperature * $this->temperature * $this->temperature * $this->humidity * $this->humidity)) +     
            0.000000000843296 * ($this->temperature * $this->temperature * $this->humidity * $this->humidity * $this->humidity)) -
            (0.0000000000481975 * ($this->temperature * $this->temperature * $this->temperature * $this->humidity * $this->humidity * $this->humidity)));
        return $index;
    }

}

