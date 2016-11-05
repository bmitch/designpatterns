<?php

namespace Bmitch\Strategy\Duck\Behavior;

class FlyRocketPowered implements FlyBehaviour
{
    public function fly()
    {
    	echo "I'm flying with a rocket!\n";
    }
}
