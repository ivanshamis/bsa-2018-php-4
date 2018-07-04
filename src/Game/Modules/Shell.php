<?php

namespace BinaryStudioAcademy\Game\Modules;

use BinaryStudioAcademy\Game\Modules\Module;

class Shell extends Module
{
    public function __construct()
    {
        $this->name = 'Shell'; 
        $this->needs = ['metal','fire'];
    }
}