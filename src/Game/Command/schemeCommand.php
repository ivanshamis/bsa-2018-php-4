<?php

namespace BinaryStudioAcademy\Game\Command;

class schemeCommand extends CommandShip
{
    public function execute()
    {
        return $this->output->scheme($this->spaceship,$this->element);
    }
}