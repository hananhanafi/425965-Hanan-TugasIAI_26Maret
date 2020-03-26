<?php

function isPrime($n){
    for($x=2; $x<$n; $x++) {
        if($n % $x ==0) { return;}
    } 
    return $n;
}