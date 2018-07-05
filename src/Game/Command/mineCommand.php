<?php

namespace BinaryStudioAcademy\Game\Command;

class mineCommand extends CommandShip
{
    public function execute()
    {
        return $this->output->mine($this->spaceship,$this->element);
    }
}