<?php

namespace Bmitch\Strategy\Duck\Behavior;

class Squeak implements QuackBehaviour
{
    public function quack()
    {
    	echo "Squeak\n";
    }
}
