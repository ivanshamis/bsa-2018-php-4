<?php

namespace BinaryStudioAcademy\Game\Elements;

class Element extends AbstractElement
{
    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type;
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
        $this->count--;
    }
}
