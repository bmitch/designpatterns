<?php

namespace Bmitch\Observer;

class WeatherData implements SubjectInterface
{
	protected $observers;

	protected $temperature;

	protected $humidity;

	protected $pressure;

	public function __construct()
	{
		$this->observers = [];
	}

	public function registerObserver(ObserverInterface $observer)
	{
		$this->observers[] = $observer;
	}

	public function removeObserver(ObserverInterface $observer)
	{
		foreach ($this->observers as $index => $currentObserver) {
			if ($observer == $currentObserver) {
				unset($this->observers[$index]);
			}
		}
	}

	public function notifyObservers()
	{
		foreach ($this->observers as $observer) {
			$observer->update(
				$this->temperature,
				$this->humidity,
				$this->pressure
			);
		}
	}

	public function measurementsChanged()
	{
		$this->notifyObservers();
	}

	public function setMeasurements($temperature, $humidity, $pressure)
	{
		$this->temperature = $temperature;
		$this->humidity = $humidity;
		$this->pressure = $pressure;
		$this->measurementsChanged();
	}

}
