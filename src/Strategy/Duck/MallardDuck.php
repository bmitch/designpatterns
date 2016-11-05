<?php

namespace Bmitch\Strategy\Duck;

use Bmitch\Strategy\Duck\Behavior\Quack;
use Bmitch\Strategy\Duck\Behavior\FlyWithWings;

class MallardDuck extends AbstractDuck
{

    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyWithWings();
    }

    public function display()
    {
    	echo "I'm a real Mallard duck\n";
    }
}
