<?php

namespace BinaryStudioAcademy\Game\Elements;

use BinaryStudioAcademy\Game\Elements\Element;

class Metal extends Element
{
    public function __construct()
    {
        $this->name = 'Metal'; 
        $this->needs = ['iron','fire'];
        $this->type = 'produce element';
    }
}