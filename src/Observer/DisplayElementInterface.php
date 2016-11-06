<?php

namespace Bmitch\Observer;

interface DisplayElementInterface
{
    public function update($temp, $humidity, $pressure);
}
