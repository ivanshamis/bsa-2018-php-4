<?php

namespace BinaryStudioAcademy\Game\Elements;

abstract class AbstractElement
{
    protected $name;
    protected $needs = [];
    protected $count = 0;
    protected $type = 'mine element';

    abstract public function getName();
    abstract public function getNeeds();
    abstract public function getCount();
    abstract public function add();
    abstract public function getType();
}
