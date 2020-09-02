<?php

class Klass {

    public $title;

    function __construct($t) {
        $this->title = $t;
    }

}

$Klass = new Klass('Sibul');
$Klass2 = new Klass('Kartul');
$Klass3 = new Klass('Porgand');
$Klass4 = new Klass('Õun');

var_dump($Klass->title);
var_dump($Klass2->title);
var_dump($Klass3->title);
var_dump($Klass4->title);


echo "\n";