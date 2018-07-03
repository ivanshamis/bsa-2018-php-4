<?php

namespace BinaryStudioAcademy\Game;

use BinaryStudioAcademy\Game\Contracts\Io\Reader;
use BinaryStudioAcademy\Game\Contracts\Io\Writer;

//use BinaryStudioAcademy\Game\Contracts\Command\CommandInterface;
use BinaryStudioAcademy\Game\Command;

class Game
{
    public function start(Reader $reader, Writer $writer): void
    {
        // TODO: Implement infinite loop and process user's input
        // Feel free to delete these lines
        //$writer->writeln("You can't play yet! Please read input and convert it to commands.");
        //$writer->writeln("Don't forget to create game's world.");
        //$writer->write("Type your name: ");
        //$input = trim($reader->read());
        //$writer->writeln("Good luck with this task, {$input}!");
        
        $writer->write("Type your command: ");
        $input = trim($reader->read());

        $command = new $input ( new Receiver () );
    }

    public function run(Reader $reader, Writer $writer): void
    {
        // TODO: Implement step by step mode with game state persistence between steps
        $writer->writeln("You can't play yet. Please read input and convert it to commands.");
        $writer->writeln("Don't forget to create game's world.");
    }
}
