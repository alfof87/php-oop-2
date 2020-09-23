<?php
//nell'ottica di quanto visto a lezione definire classe Square e classe Cube (2 e 3 dimensioni);
// definire, oltre a variabili d'istanza, costruttore, e toString, i metodi per il calcolo dell'area/volume
//e del perimetro/superficie cercando di sfruttare al meglio ereditarieta' e polimorfismo; testare le classi definite
//con alcune istanze per verificare che sia tutto corretto

//area quadrato: lato * lato
// perimetro quadrato: 4 * lato

// volume cubo: lato * lato * lato
// superficie cubo: 6 * lato * lato
// N.B.: definire ogni variabile e metodo pubblico come detto in classe

  class Square{
    public $x;
    public $y;

    public function __construct($x, $y){
      $this -> x = $x;
      $this -> y = $y;
    }
    public function getArea(){//////////////////////////////////
      return $this -> x * $this -> y;
    }
    public function getPer(){///////////////////////////////////
      return 4 * $this -> x;
    }
    public function __toString(){
      return "SQUARE:" . "<br>"
           . "x: " . $this -> x . "<br>"
           . "y: " . $this -> y . "<br>"
           . "Area: " . $this -> getArea() . "<br>"
           . "Perimetro: " . $this -> getPer() . "<br>"
           . "<br><br>";
    }
  }
 class Cube extends Square{
   public $z;

   public function __construct($x, $y, $z){
     parent::__construct($x, $y);
     $this -> z = $z;
   }
   public function getArea(){
     return 6 * $this -> x * $this -> y;
   }
   public function getPer(){
     return $this -> x * $this -> y * $this -> z;
   }
   public function __toString(){
     return "CUBE:" . "<br>"
           .  "x: " . $this -> x . "<br>"
           . "y: " . $this -> y . "<br>"
           . "z: " . $this -> z . "<br>"
           . "Area: " . $this -> getArea() . "<br>"
           . "Perimetro: " . $this -> getPer() . "<br>";
   }
 }

$s1 = new Square(5,5);
echo $s1;
$c1 = new Cube(3,3,10);
echo $c1;
