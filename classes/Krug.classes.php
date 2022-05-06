<?php 
namespace geometrija;
class Krug extends Oblik{
    private $r;
    public const PI=3.14;
    public function __construct($r){
        $this->r=$r;
    }
    public function obim(){
        return 2*$this->r*$this::PI;
    }
    public function povrsina(){
        return $this->r*$this->r*$this::PI;
    }
}

?>