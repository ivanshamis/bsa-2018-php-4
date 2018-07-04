<?php

namespace BinaryStudioAcademy\Game\Command;

use BinaryStudioAcademy\Game\Contracts\Command\CommandInterface;

abstract class Command implements CommandInterface
{
    abstract public function execute();
}