<?php

namespace BinaryStudioAcademy\Game\Modules;

use BinaryStudioAcademy\Game\Elements\Element;

abstract class Module extends Element
{
    protected $type = 'module';

    public function getScheme()
    {
        return implode('|',$this->needs);
    }

    public function use()
    {
    }
}