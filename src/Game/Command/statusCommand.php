<?php

namespace BinaryStudioAcademy\Game\Command;

use BinaryStudioAcademy\Game\Command\Command;
use BinaryStudioAcademy\Game\SpaceshipFactory;

class statusCommand extends Command
{
    private $output;
    private $spaceship;

    public function __construct(Receiver $output, SpaceshipFactory $spaceship)
    {
        $this->output = $output;
        $this->spaceship = $spaceship;
    }

    public function execute()
    {
        return $this->output->status($this->spaceship);
    }
}