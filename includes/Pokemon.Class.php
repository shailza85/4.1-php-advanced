<?php

class Pokemon 
{

    /**
     * Set up some properties for class
     * Properties can be public, protected and private
     * 
     */
    public $name='';
    public $health=25;
    public $type='normal';
    private $level=1;

    function _construct($name=false, $health=false, $type=false) {

        if (is_string($name)) {
            $this->name=$name;
        }

        if (is_integer($health)) {
            $this->health=$health;
        }

        if (is_string($type)) {
            $this->type=$type;
        }
    }

    //If a property is private, it can still be read/output if you set up a method for it.
    public function getLevel() {
        return $this->level;
    }
// If a property is private, it can still be written to/updated if you set a method for it.
    public function levelUp() {
        $this->level++;
        return $this->level;
    }
}