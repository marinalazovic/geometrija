<?php 
namespace geometrija;
class Pravougaonik extends Oblik{
    private $a;
    private $b;
    public function __construct($a,$b){
        $this->a=$a;
        $this->b=$b;
    }
    public function obim(){
        return 2*$this->a+2*$this->b;

    }
    public function povrsina(){
        return $this->a*$this->b;
    }
}

?>