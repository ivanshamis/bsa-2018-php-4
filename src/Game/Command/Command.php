<?php

namespace BinaryStudioAcademy\Game\Command;

class help implements CommandInterface
{
    private $output;

    public function __construct(Receiver $output)
    {
        $this->output = $output;
    }

    public function execute()
    {
        $this->output->help();
    }
}