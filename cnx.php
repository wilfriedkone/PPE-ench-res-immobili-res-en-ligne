<?php

$user="root";
$mdp="";
$db="immobilier";
$server="localhost";
$port="3307";

$link=mysqli_connect($server,$user,$mdp,$db,$port);

if($link)
{
   // echo "connection etablie";

}else
{
    die(mysqli_connect_error());
}

?>

