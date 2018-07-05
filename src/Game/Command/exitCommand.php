<?php

namespace BinaryStudioAcademy\Game\Command;

class exitCommand extends Command
{
    public function execute()
    {
        return $this->output->exit();
    }
}