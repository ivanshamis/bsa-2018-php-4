<?php

namespace BinaryStudioAcademy\Game\Command;

class buildCommand extends CommandShip
{
    public function execute()
    {
        return $this->output->build($this->spaceship,$this->element);
    }
}