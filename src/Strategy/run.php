<?php
require __DIR__ . '/../../vendor/autoload.php';

use Bmitch\Strategy\Duck as Duck;

$mallard = new Duck\MallardDuck();
$mallard->performQuack();
$mallard->performFly();

$modelDuck = new Duck\ModelDuck();
$modelDuck->performFly();
$modelDuck->setFlyBehaviour(new Duck\Behavior\FlyRocketPowered());
$modelDuck->performFly();
