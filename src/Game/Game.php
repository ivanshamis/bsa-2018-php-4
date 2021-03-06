<?php

namespace BinaryStudioAcademy\Game;

use BinaryStudioAcademy\Game\Contracts\Io\Reader;
use BinaryStudioAcademy\Game\Contracts\Io\Writer;
use BinaryStudioAcademy\Game\Command\Receiver;
use BinaryStudioAcademy\Game\SpaceshipFactory;

class Game
{
    public function executeCommand(SpaceshipFactory $spaceship, string $input): string
    {
        $commandDir = "BinaryStudioAcademy\Game\Command\\";
        $param = '';
        $action = $input;
        if (strpos($input,':')) 
            {
                $param = substr($input,strpos($input,':')+1);
                $action = substr($input,0,strpos($input,':'));
            }
        $commandName = "{$commandDir}{$action}Command";
        $output = "There is no command {$action}";

        if (class_exists($commandName)) 
            {
            $parent = get_parent_class($commandName);
            if (($parent=="{$commandDir}Command") or (($parent=="{$commandDir}CommandShip"))) 
                { 
                    $output = (new $commandName(new Receiver(), $spaceship, $param))->execute(); 
                }
            }
        return $output;
    }

    public function start(Reader $reader, Writer $writer): void
    {
        $spaceship = SpaceshipFactory::getInstance();
        $input = '';
        while (($input!='exit') and (!$spaceship->is_ready())) 
        {
            $writer->write("Type your command: ");
            $input = trim($reader->read());
            $output = $this->executeCommand($spaceship,$input);    
            $writer->writeln($output);
        }
    }

    public function run(Reader $reader, Writer $writer): void
    {
        $spaceship = SpaceshipFactory::getInstance();
        $input = trim($reader->read());
        $output = $this->executeCommand($spaceship,$input);    
        $writer->writeln($output);
    }
}
