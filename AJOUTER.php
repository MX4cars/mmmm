<?php
$serveur = "localhost";
$utilisateur = "MALIKA";
$motDePasse = "test1234";
$base = "gestion location de voiture";

$sum=mysqli_connect($serveur, $utilisateur , $motDePasse,$base);
if(isset($_POST['submit'])){
@$num_v=$_POST ["num_v"];
@$matriculation=$_POST ["matriculation"];
$marque=$_POST["marque"];
$modele=$_POST["modele"];
$couleur=$_POST["couleur"];
$prix=$_POST["prix"];
@$etat=$_POST["etat"];
$imagee=$_FILES['imagee']['tmp_name'];
$traget="images/".$_FILES['imagee']['name'];
move_uploaded_file($imagee,$traget);
$ajout="INSERT INTO Voiture  VALUES('$num_v','$matriculation','$marque','$modele','$couleur','$prix','$etat','$traget')";


$add=mysqli_query($sum,$ajout);
if($add){
    echo "cest bon";
}
else {
    echo "cest pas bon";
}
}




    


?>