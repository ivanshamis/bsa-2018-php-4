<?php

namespace BinaryStudioAcademy\Game\Modules;

use BinaryStudioAcademy\Game\Modules\Module;

class Launcher extends Module
{
    protected $name = 'Launcher';
    protected $needs = ['water','fire','fuel']; 
}