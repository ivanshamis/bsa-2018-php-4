<?php

namespace BinaryStudioAcademy\Game\Command;

use BinaryStudioAcademy\Game\Command\Command;

class exitCommand extends Command
{
    private $output;

    public function __construct(Receiver $output)
    {
        $this->output = $output;
    }

    public function execute()
    {
        return $this->output->exit();
    }
}