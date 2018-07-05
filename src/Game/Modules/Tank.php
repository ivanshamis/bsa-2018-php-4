<?php

namespace BinaryStudioAcademy\Game\Modules;

use BinaryStudioAcademy\Game\Modules\Module;

class Tank extends Module
{
    protected $name = 'Tank';
    protected $needs = ['metal','fuel'];
}