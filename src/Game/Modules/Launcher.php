<?php

namespace BinaryStudioAcademy\Game\Modules;

use BinaryStudioAcademy\Game\Modules\Module;

class Launcher extends Module
{
    public function __construct()
    {
        $this->name = 'Launcher'; 
        $this->needs = ['water','fire','fuel'];
    }
}