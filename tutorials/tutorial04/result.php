<?php 


// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// 

$p=$_POST['p'];
$r=$_POST['r'];
$n=$_POST['n'];


$ans=($p*$r*$n)/100;


echo "<h1>Intrest Is: {$ans} </h1>";

?>
