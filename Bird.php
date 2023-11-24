<?php

class Bird {
    public $name;
    private $age;

    public function __construct($n, $a){
        $this->name = $n;
        $this->age = $a;
    }

    public function fly(){
        echo "Fly away" . $this->name . "<br>";
    }



    public function __destruct(){
        echo $this->name . "is dead💀";
    }
}




class Suns {
    public $name;
    private $age;

    public function __construct($n, $a){
        $this->name = $n;
        $this->age = $a;
    }

}