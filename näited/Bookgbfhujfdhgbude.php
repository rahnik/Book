<?php

class Book {

    protected $title; //public ütleb et see muutuja on avalik, sellele saab ligi väljaspoolt
    protected $inStock = true;
    protected $stockSaldo = 0;

    public function __construct($t) {
        $this->title = $t;
    }
 
    public function getStockSaldo() {
        return $this->stockSaldo;
    }

    public function setStockSaldo($v){
        if ( $v < 0 ) {
            throw new Exception('No bueno negative, Amigo!');
        } else{
            $this->stockSaldo = $v;   
        }
    }

    public function soldOut(){
        $this->inStock = false;
    }

}

$book = new Book('Kalevipoeg');
$book2 = new Book('Rehepapp');
$book2->soldOut();
$book->setStockSaldo(15);

var_dump($book);
var_dump($book2);

echo "\n";
