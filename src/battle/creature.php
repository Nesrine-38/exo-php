<?php

namespace App\battle;

class creature {
    private string $name;
    private int $hp;
    private bool $isdefending;

    public function __construct(string $paramname, int $paramhp)
    {
        $this->name =$paramname;
        $this->hp = $paramhp;
    }


    public function defend(){
        $this->isdefending =true;
        echo "{$this->name} is defending";
    }
    public function attack(creature $target){
        if ($target->hp <= 0) {
            echo "{$target->name}is already defeated. No attack possible.";
            return;
        }
        if($this->hp < 0){
        echo"{$this->name}is too tired too attack";
        return;
        }else{
        $target->hp-=10;
        echo "{$this->name} est trop fort de {$target->name}";
        return;
        if ($target->isdefending) 
        {
            $target->hp -= 5;
            $target->isdefending =false;
            # code...
        }
        }




    }
}


?>