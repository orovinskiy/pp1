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

function removeDups($array){
    $j=0;
    if(!empty($array)){
       $newArray = array();
        for($i = 0; $i < count($array); $i++){
            if(!in_array($array[$i], $newArray)){
                $newArray[$j] = $array[$i];
                $j++;
            }
        }
        return $newArray;
    }
}

function distribution($array){

    if(!empty($array)){
        $newArray = array();
        for($i = 0; $i < count($array); $i++){
            if(!array_key_exists($array[$i], $newArray)){
                $newArray[$array[$i]] = 1;
            }
            else{
                $newArray[$array[$i]] = $newArray[$array[$i]]+1;
            }
        }
        return $newArray;
    }
}
