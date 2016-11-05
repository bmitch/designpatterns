<?php

namespace Bmitch\Strategy\Duck\Behavior;

class Quack implements QuackBehaviour
{
    public function quack()
    {
    	echo "Quack!!\n";
    }
}
