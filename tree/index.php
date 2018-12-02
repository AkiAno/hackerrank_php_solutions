<?php

// Complete the staircase function below.

function repeatString($n, $string){
    $i = 0;
    $str = '';
    while($i < $n){
        $str .= $string;
        $i++;
    }
    return $str;
}

function staircase($n) {
    $space = ' ';
    $hash = '#';
    $last = $n-1;
    $string = '';

    for($i = 1; $i <= $n; $i++) {
        $string .= repeatString($last, $space);
        $string .= repeatString($i, $hash)."\n";
        var_dump($string);
        $last--;
    }
    
}

var_dump(staircase(6));

