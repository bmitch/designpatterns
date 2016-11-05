<?php

namespace Bmitch\Strategy\Duck\Behavior;

class MuteQuack implements QuackBehaviour
{
    public function quack()
    {
    	echo "<< Silence >>\n";
    }
}
