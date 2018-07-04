<?php

namespace BinaryStudioAcademy\Game\Modules;

use BinaryStudioAcademy\Game\Modules\Module;

class Ic extends Module
{
    public function __construct()
    {
        $this->name = 'Ic'; 
        $this->needs = ['metal','silicon'];
    }
}