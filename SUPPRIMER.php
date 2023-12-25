<?php

$serveur = "localhost";
$utilisateur = "MALIKA";
$motDePasse = "test1234";
$base = "gestion location de voiture";

$sum=mysqli_connect($serveur, $utilisateur , $motDePasse,$base);

$num_v=$_POST["num_v"];
    @$supp="DELETE FROM Voiture where num_v=$num_v";
    $add= mysqli_query($sum,$supp);
    if($add){
        echo "c est bon";
    }
    else {
        echo"non";
    }





?>