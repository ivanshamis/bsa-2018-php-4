<?php

namespace BinaryStudioAcademy\Game\Command;

use BinaryStudioAcademy\Game\SpaceshipFactory;

class Receiver
{
    public function help() {
        $commands = get_class_methods($this);
        $help = "Available commands: ".implode(', ',$commands).".";
        return $help;
    }

    public function status(SpaceshipFactory $spaceship) {
        return $spaceship->getStatus();
    }

    public function mine(SpaceshipFactory $spaceship, $element) {
        $produce = $spaceship::NO_SUCH_RESOURCE;
        if (isset($spaceship->getMineElements()[$element])) 
        {
            $produce = $spaceship->mine($spaceship->getMineElements()[$element]);
        }
        return $produce;
    }

    public function produce(SpaceshipFactory $spaceship, $element) {
        $produce = $spaceship::NO_SUCH_RESOURCE;
        if (isset($spaceship->getProduceElements()[$element])) 
        {
            $produce = $spaceship->produce($spaceship->getProduceElements()[$element]);
        }
        return $produce;
    }

    public function build(SpaceshipFactory $spaceship, $module) {
        $build = $spaceship::THERE_IS_NO_MODULE;
        if (isset($spaceship->getModules()[$module])) 
        {
            $build = $spaceship->produce($spaceship->getModules()[$module]);
        }
        return $build;
    }

    public function scheme(SpaceshipFactory $spaceship, $module) {
        $scheme = $spaceship::THERE_IS_NO_MODULE;
        if (isset($spaceship->getModules()[$module])) 
        {
            $scheme_module = $spaceship->getModules()[$module];
            $scheme = "{$scheme_module->getName()} => {$scheme_module->getScheme()}";
        }
        return $scheme;
    }

    public function exit() {
        return 'Good bye!';
    }        
}