<?php

namespace BinaryStudioAcademy\Game\Modules;

use BinaryStudioAcademy\Game\Modules\Module;

class Engine extends Module
{
    public function __construct()
    {
        $this->name = 'Engine'; 
        $this->needs = ['metal','carbon','fire'];
    }
}