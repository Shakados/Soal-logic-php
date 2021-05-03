<?php
function rIsEven(){
    static $a=1;
    if($a===11){
        return;
    } 
    else {
        if($a%2 === 0){
            echo $a.". Bilangan Genap\n <br>";
        } else {
            echo $a.". Bilangan Ganjil\n <br>";
        };
        $a+=1;
        rIsEven();
    }
}
rIsEven();
?>
