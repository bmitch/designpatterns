<?php

namespace Bmitch\Strategy\Duck;

abstract class AbstractDuck
{

	protected $flyBehavior;

	protected $quackBehavior;

    public abstract function display();

    public function performFly()
    {
    	$this->flyBehavior->fly();
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function setFlyBehaviour($flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehaviour($quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
    }

    public function swim()
    {
    	echo "All ducks float, even decoys!";
    }
}
