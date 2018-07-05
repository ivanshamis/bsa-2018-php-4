<?php

namespace BinaryStudioAcademy\Game\Elements;

use BinaryStudioAcademy\Game\Elements\Element;

final class Metal extends Element
{
    protected $name = 'Metal';
    protected $type = 'produce element';
    protected $needs = ['iron','fire'];
}