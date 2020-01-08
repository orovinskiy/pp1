<?php

function printArr($array){
    for($i = 0; $i < count($array); $i++){
        echo "<p>$array[$i]</p><br>";
    }
}

function largest($array){
    if(!empty($array)){
        $max = $array[0];
        for($i = 0; $i < count($array); $i++){
            if($array[$i] > $max){
                $max = $array[$i];
            }
        }
        echo "<p>The largest number is $max";
    }
}
