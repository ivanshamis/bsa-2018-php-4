<?php

namespace BinaryStudioAcademy\Game\Command;

use BinaryStudioAcademy\Game\Contracts\Command\CommandInterface;

abstract class Command implements CommandInterface
{
    protected $output;

    public function __construct(Receiver $output)
    {
        $this->output = $output;
    }

    abstract public function execute();
}