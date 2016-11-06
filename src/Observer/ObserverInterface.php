<?php

namespace Bmitch\Observer;

interface ObserverInterface
{
    public function update($temp, $humidity, $pressure);
}
