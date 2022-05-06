<?php  
spl_autoload_register('myAutoLoader');
function myAutoLoader($fullClassName){
    $prefix = 'geometrija\\';
    $len = strlen($prefix);
    $className = $fullClassName;

    if(strncmp($fullClassName,$prefix,$len)===0){
        $className = substr($fullClassName, $len);
    }
    require "classes/".$className.".classes.php";
}

?>