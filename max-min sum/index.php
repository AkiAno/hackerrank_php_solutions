<?php
    function miniMaxSum($arr) {
        $temp = 0;
        $min = 0;
        $max = 0;


        for ($i = 0; $i < count($arr)-1; $i++) {
            for($j = $i+1; $j < count($arr); $j++){
                if($arr[$i] > $arr[$j]){
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $temp;
                }
            }
        }
        for ($i = 0; $i < count($arr); $i++) {
            if($i < 4) {
                $min += $arr[$i];
            } 
            if($i > 0) {
                $max += $arr[$i];
            }
        }
        var_dump($arr);
        print($min." ");
        print($max);
    }
miniMaxSum([6,2,5,4,3]);
