<?php

namespace BinaryStudioAcademy\Game\Modules;

use BinaryStudioAcademy\Game\Modules\Module;

class ControlUnit extends Module
{
    public function __construct()
    {
        $this->name = 'Control_unit'; 
        $this->needs = ['ic','wires'];
    }
}