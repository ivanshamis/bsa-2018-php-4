<?php

namespace BinaryStudioAcademy\Game\Modules;

use BinaryStudioAcademy\Game\Modules\Module;

class Wires extends Module
{
    public function __construct()
    {
        $this->name = 'Wires'; 
        $this->needs = ['copper','fire'];
    }
}