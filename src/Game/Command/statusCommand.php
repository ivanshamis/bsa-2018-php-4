<?php

namespace BinaryStudioAcademy\Game\Command;

class statusCommand extends CommandShip
{
    public function execute()
    {
        return $this->output->status($this->spaceship);
    }
}