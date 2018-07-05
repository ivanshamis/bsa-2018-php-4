<?php

namespace BinaryStudioAcademy\Game\Elements;

abstract class Element
{
    protected $name;
    protected $needs = [];
    protected $count = 0;
    protected $type = 'mine element';

    public function __construct()
    {
    }

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