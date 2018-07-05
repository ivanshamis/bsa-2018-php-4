<?php

namespace BinaryStudioAcademy\Game\Elements;

final class Metal extends Element
{
    protected $name = 'Metal';
    protected $type = 'produce element';
    protected $needs = ['iron','fire'];
}