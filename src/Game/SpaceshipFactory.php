<?php

namespace BinaryStudioAcademy\Game;

use BinaryStudioAcademy\Game\Elements\{Element,Carbon,Copper,Fire,Fuel,Iron,Metal,Sand,Silicon,Water};
use BinaryStudioAcademy\Game\Modules\{Module,ControlUnit,Engine,Ic,Launcher,Porthole,Shell,Tank,Wires};

final class SpaceshipFactory
{
    private static $instance;
    private static $elements;
    private static $modules;

    public static function getInstance(): SpaceshipFactory
    {
        if (null === static::$instance) 
        {
            static::$instance = new static();

            static::$elements['fire'] = new Fire;
            static::$elements['iron'] = new Iron;
            static::$elements['sand'] = new Sand;
            static::$elements['silicon'] = new Silicon;
            static::$elements['copper'] = new Copper;
            static::$elements['carbon'] = new Carbon;
            static::$elements['water'] = new Water;
            static::$elements['fuel'] = new Fuel;
            static::$elements['metal'] = new Metal;

            static::$modules['shell'] = new Shell;  
            static::$modules['porthole'] = new Porthole;  
            static::$modules['wires'] = new Wires;  
            static::$modules['ic'] = new Ic;
            static::$modules['control_unit'] = new ControlUnit;    
            static::$modules['engine'] = new Engine;    
            static::$modules['launcher'] = new Launcher;
            static::$modules['tank'] = new Tank;        
        }

        return static::$instance;
    }

    public function getModules() 
    {
        return static::$modules;
    }

    public function getMineElements() 
    {
        $mineElements = [];
        foreach (static::$elements as $key => $element) 
            if ($element->getType()=='mine element') { $mineElements[$key]=$element; }
        return $mineElements;
    }

    public function getProduceElements() 
    {
        $produceElements = [];
        foreach (static::$elements as $key => $element) 
            if ($element->getType()=='produce element') { $produceElements[$key]=$element; }
        return $produceElements;
    }

    public function produce(Element $element)
    {
        $need_elements = $element->getNeeds();
        $need_note = '';
        if ($element->getType()=='module') 
            { 
                if ($element->getCount()>0) { return "Attention! {$element->getName()} is ready."; }
                $you_need = 'Inventory should have'; 
                $added = 'is ready!';
                $check_modules = true;
            }
        else 
            {
                $you_need = 'You need to mine';
                $added = 'added to inventory.';
                $check_modules = false; 
            }

        foreach ($need_elements as $need) 
        {
            $count = 0;
            if (isset(static::$elements[$need])) { $count = static::$elements[$need]->getCount(); }
            else 
                if ($check_modules)
                    if (isset(static::$modules[$need])) { $count = static::$modules[$need]->getCount(); }
            if ($count==0) 
                { 
                    if ($need_note!='') { $need_note.=','; }
                    $need_note.=$need;
                }
        }

        if ($need_note!='') { $produce = "{$you_need}: {$need_note}.";}
        else
            {
                foreach ($need_elements as $need) 
                    if (isset(static::$elements[$need])) { static::$elements[$need]->use(); }                
                $element->add();
                $produce = "{$element->getName()} {$added}";
                if ($check_modules) 
                    if ($this->is_ready()) { $produce.=" => You won!"; }
            }
        return $produce;
    } 

    public function mine(Element $element)
    {
        $element->add();
        return "{$element->getName()} added to inventory.";
    }

    public function is_ready() 
    {
        $ready = true;
        foreach (static::$modules as $module) {
            if ($module->getCount()==0) { $ready = false; }
        }
        return $ready;
    }

    public function getStatus()
    {
        $you_have = [];
        foreach (static::$elements as $key => $element) 
        {
            $count = $element->getCount();
            if ($count>0) { $you_have[] = "{$key} - {$count};"; }
        }

        $parts_ready = [];
        $parts_build = [];
        foreach (static::$modules as $key => $module) 
        {
            $count = $module->getCount();
            if ($count==0) { $parts_build[] = $key; } else { $parts_ready[] = $key; }
        }

        $you_have = "You have: ".implode(', ',$you_have);
        $parts_ready = "Parts ready: ".implode(', ',$parts_ready);
        $parts_build = "Parts to build: ".implode(', ',$parts_build);

        return "{$you_have}".PHP_EOL."{$parts_ready}".PHP_EOL."{$parts_build}";
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}