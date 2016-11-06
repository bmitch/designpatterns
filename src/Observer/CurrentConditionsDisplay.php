<?php

namespace Bmitch\Observer;

class CurrentConditionsDisplay implements ObserverInterface, DisplayElementInterface
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
		echo "Current conditions: {$this->temperature} degrees and humidity {$this->humidity}.\n";
	}

}
