<?php

namespace Bmitch\Strategy\Duck\Behavior;

class FlyNoWay implements FlyBehaviour
{
    public function fly()
    {
    	echo "I can't fly!\n";
    }
}
