<?php

namespace BinaryStudioAcademy\Game\Modules;

use BinaryStudioAcademy\Game\Modules\Module;

class ControlUnit extends Module
{
    protected $name = 'Control_unit';
    protected $needs = ['ic','wires'];
}