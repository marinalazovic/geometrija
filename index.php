<?php 
include 'autoloader.php';

use geometrija\Krug;
use geometrija\Trougao;
use geometrija\Pravougaonik;
try {
    
    $krug=new Krug(3);
    $povrsinaKruga=$krug->povrsina();
    echo "Povrsina kruga je:".$povrsinaKruga."<br>";
    $trougao=new Trougao(2,3,4,4);
    $obimTrougla=$trougao->obim();
    echo "Obim trougla je:".$obimTrougla."<br>";
    $pravougaonik=new Pravougaonik(2,3);
    $obimPravougaonika=$pravougaonik->obim();
    echo "Obim pravougaonika je:".$obimPravougaonika."<br>";
} catch (Throwable $th) {
    echo $th;
}
?>