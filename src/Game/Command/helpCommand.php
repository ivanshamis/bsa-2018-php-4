<?php

namespace BinaryStudioAcademy\Game\Command;

class helpCommand extends Command
{
    public function execute()
    {
        return $this->output->help();
    }
}