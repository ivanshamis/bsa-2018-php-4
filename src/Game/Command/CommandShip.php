<?php

namespace BinaryStudioAcademy\Game\Command;

use BinaryStudioAcademy\Game\SpaceshipFactory;

abstract class CommandShip extends Command
{
    protected $spaceship;
    protected $element;

    public function __construct(Receiver $output, SpaceshipFactory $spaceship, string $param)
    {
        $this->output = $output;
        $this->spaceship = $spaceship;
        $this->element = $param;
    }

    abstract public function execute();
}