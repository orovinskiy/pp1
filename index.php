<?php
/**
 * @author Oleg Rovinskiy
 * @date 1/6/2020
 * @url https://github.com/orovinskiy/pp1.git
 * Pair Programing 1
 */

    //error reporting
    ini_set("display_errors",1);
    error_reporting(E_ALL);

    require "function.php";
    $numbers = array(7,9,8,9,8,8,6);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Pair Programing 1</h1>
    <?php
        printArr($numbers);
        largest($numbers);
        echo "<p>[";
        foreach (removeDups($numbers) as $single){
            echo "$single,";
        }
    echo "]</p>";
    echo "<p>[";
    foreach (distribution($numbers) as $single=>$value){
        echo "$single=>$value, ";
    }
    echo "]</p>";
    ?>
</body>
</html>
