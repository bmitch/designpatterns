<?php

namespace Bmitch\Strategy\Duck;

use Bmitch\Strategy\Duck\Behavior\Quack;
use Bmitch\Strategy\Duck\Behavior\FlyNoWay;

class ModelDuck extends AbstractDuck
{

    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyNoWay();
    }

    public function display()
    {
    	echo "I'm a Model duck\n";
    }
}
