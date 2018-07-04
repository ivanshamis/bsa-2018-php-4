<?php

namespace BinaryStudioAcademy\Game\Command;

use BinaryStudioAcademy\Game\Command\Command;
use BinaryStudioAcademy\Game\SpaceshipFactory;

class schemeCommand extends Command
{
    private $output;
    private $spaceship;

    public function __construct(Receiver $output, SpaceshipFactory $spaceship, string $param)
    {
        $this->output = $output;
        $this->spaceship = $spaceship;
        $this->element = $param;
    }

    public function execute()
    {
        return $this->output->scheme($this->spaceship,$this->element);
    }
}