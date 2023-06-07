<?php

namespace App;

class Counter {
    public int $count;
    public bool $negative;

    public function __construct()
    {
        $this->count = 0;
        $this->negative=true;
    }
    public function increment():void {
        $this->count++;
        echo "{$this->count}";
    }
    public function decrement():void {
        if ($this->count < 0 && $this->negative) {
            $this->count--;
        }
 
    }
    public function display(): void
    {
        $this->count;
        echo"la valeur du compteur est {$this->count}";
    }




}

?>