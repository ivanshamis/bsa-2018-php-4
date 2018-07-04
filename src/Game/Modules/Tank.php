<?php

namespace BinaryStudioAcademy\Game\Modules;

use BinaryStudioAcademy\Game\Modules\Module;

class Tank extends Module
{
    public function __construct()
    {
        $this->name = 'Tank'; 
        $this->needs = ['metal','fuel'];
    }
}