<?php

class Horse {

    public $name; //public ütleb et see muutuja on avalik, sellele saab ligi väljaspoolt
    public $inside = true;
    public function __construct($n) {
        $this->name = $n;
    }
    public function outside(){
        $this->inside = false;
    }

}

$horse = new Horse('Naomie');
$horse2 = new Horse('Clara');
$horse3 = new Horse('American-Beauty');
$horse4 = new Horse('Alle');
$horse4->outside();
$horse5 = new Horse('Elektra');

var_dump($horse);
var_dump($horse2);
var_dump($horse3);
var_dump($horse4);
var_dump($horse5);

echo "\n";
