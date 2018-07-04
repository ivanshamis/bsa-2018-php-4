<?php

namespace BinaryStudioAcademy\Game\Command;

use BinaryStudioAcademy\Game\Command\Command;
use BinaryStudioAcademy\Game\SpaceshipFactory;

class mineCommand extends Command
{
    private $output;
    private $spaceship;
    private $element;

    public function __construct(Receiver $output, SpaceshipFactory $spaceship, string $param)
    {
        $this->output = $output;
        $this->spaceship = $spaceship;
        $this->element = $param;
    }

    public function execute()
    {
        return $this->output->mine($this->spaceship,$this->element);
    }
}