<?php

namespace Bmitch\Strategy\Duck\Behavior;

class FlyWithWings implements FlyBehaviour
{
    public function fly()
    {
    	echo "I'm flying!\n";
    }
}
