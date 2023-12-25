<?php
$serveur = "localhost";
$utilisateur = "MALIKA";
$motDepasse = "test1234";
$base = "gestion location de voiture";

$sum=mysqli_connect($serveur, $utilisateur , $motDepasse,$base);

$num_cli=$_POST["num_cli"];


@$num_permis=$_POST["num_permis"];


@$nom_cli=$_POST["nom_cli"];



@$prenom_cli=$_POST["prenom_cli"];
@$adresse=$_POST ["adresse"];

@$carte_ID=$_POST["carte_ID"];


@$email=$_POST["email"];
 
@$motdepa=$_POST["motdepasse"];


@$motdepasse= password_hash($motdepa,PASSWORD_DEFAULT);
$verifier=password_verify($motdepa,$motdepasse);

$ajouter ="INSERT INTO Client VALUES('$num_cli','$num_permis','$nom_cli','$prenom_cli','$adresse','$carte_ID','$email','$motdepasse')";
$requete=mysqli_query($sum,$ajouter);
if ($requete){
    header("Location:recherchervoiture.php");
}
else {
    echo"non";
}



?>