<?php 
namespace geometrija;
class Trougao extends Oblik{
    private $a;
    private $b;
    private $c;
    private $h;
    public function __construct($a,$b,$c,$h){
        $this->a=$a;
        $this->b=$b;
        $this->c=$c;
        $this->h=$h;
    }
    public function obim(){
        return $this->a+$this->b+$this->c;
    }
    public function povrsina(){
        return $this->a*$this->h/2;
    }
}

?>