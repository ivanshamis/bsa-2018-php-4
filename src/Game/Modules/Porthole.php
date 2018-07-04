<?php

namespace BinaryStudioAcademy\Game\Modules;

use BinaryStudioAcademy\Game\Modules\Module;

class Porthole extends Module
{
    public function __construct()
    {
        $this->name = 'Porthole'; 
        $this->needs = ['sand','fire'];
    }

    public function getName()
    {
        return $this->name;
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

    public function use()
    {
    
    }

}