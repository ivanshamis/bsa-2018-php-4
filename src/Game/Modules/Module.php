<?php

namespace BinaryStudioAcademy\Game\Modules;

use BinaryStudioAcademy\Game\Modules\AbstractModule;

class Module extends AbstractModule
{
    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getScheme()
    {
        return implode('|',$this->needs);
    }

    public function getNeeds()
    {
        return $this->needs;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function add()
    {
        $this->count++;
    }
}