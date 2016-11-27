<?php
/**
 * Created by PhpStorm.
 * User: meg4r0m
 * Date: 27/11/16
 * Time: 19:41
 */
$isEasy = true;

if ($isEasy == true){
    echo "C'est facile !!";
}else{
    echo "C'est difficile !!!";
}

echo "<br />Seconde façon de faire:<br />";

switch($isEasy){
    case true:
        echo "C'est facile !!";
        break;
    case false:
        echo "C'est difficile !!!";
        break;
    default:
        echo "Euuh soucis là !!";
        break;
}
?>