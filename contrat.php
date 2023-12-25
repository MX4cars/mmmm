<?php
$serveur = "localhost";
$utilisateur = "MALIKA";
$motDePasse = "test1234";
$base = "gestion location de voiture";

$sum=mysqli_connect($serveur, $utilisateur , $motDePasse,$base);
if(isset($_POST['submit'])){
@$num_c=$_POST ["num_c"];
@$date_contrat=$_POST ["date_contrat"];
@$obligation=$_POST["obligation"];
$obligation1 =implode(",",$obligation);
$carte_ID=$_POST["carte_ID"];
$ajout="INSERT INTO Contrat  VALUES('$num_c','$date_contrat','$obligation1','$carte_ID')";


$add=mysqli_query($sum,$ajout);
if($add){
    header("Location:paiement.html");
}
else {
    echo "cest pas bon";
}
}




    


?>