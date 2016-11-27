<?php
/**
 * Created by PhpStorm.
 * User: meg4r0m
 * Date: 27/11/16
 * Time: 19:47
 */
$age = 31;
$genre = "Homme";

if ($genre == "Homme" && $age >= 18){
    echo "Vous êtes un homme et vous êtes majeur";
}elseif ($genre == "Homme" && $age < 18){
    echo "Vous êtes un homme et vous êtes mineur";
}elseif ($genre == "Femme" && $age >= 18){
    echo "Vous êtes une femme et vous êtes majeur";
}elseif ($genre == "Femme" && $age < 18){
    echo "Vous êtes une femme et vous êtes mineur";
}
?>