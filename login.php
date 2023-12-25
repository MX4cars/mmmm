

<?php
session_start();
error_reporting(0);
include('deconnexion.php');
$serveur = "localhost";
$utilisateur = "MALIKA";
$motDePasse = "test1234";
$base = "gestion location de voiture";

$sum=mysqli_connect($serveur, $utilisateur , $motDePasse,$base);

@$nom_cli=$_POST["nom_cli"];
@$motdepa=$_POST["motdepasse"];

$requete=mysqli_query( $sum,"SELECT * FROM client WHERE nom_cli='$nom_cli'");
if (mysqli_num_rows($requete)>0) {
  $row=mysqli_fetch_assoc($requete);
  $verifier=password_verify($motdepa,$row['motdepasse']);
  if($verifier==1){
    
    
    header("Location:recherchervoiture.php");
  }
  else {
    echo"mot de passe incorecte";
  }
 
}
?>

