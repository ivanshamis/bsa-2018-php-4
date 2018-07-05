<?php

namespace BinaryStudioAcademy\Game\Command;

class produceCommand extends CommandShip
{
    public function execute()
    {
        return $this->output->produce($this->spaceship,$this->element);
    }
}