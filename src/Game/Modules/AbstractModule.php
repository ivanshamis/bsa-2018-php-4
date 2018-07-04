<?php

namespace BinaryStudioAcademy\Game\Modules;

use BinaryStudioAcademy\Game\Elements\AbstractElement;

abstract class AbstractModule extends AbstractElement
{
    protected $type = 'module';

    abstract public function getScheme();
}
