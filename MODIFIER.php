<html>
    <head>
        <title>
MON SITE WEB
        </title> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width ,initial-scale=1.0"> 
        <link rel="stylesheet"  href="project.css">
    </head>
    
    
    
    
    
<body id="mo">
<h1> MX4 CARS <img src="non.jpg" align="left" width="150px">    </h1>   
    <header>


<table align="center" border="0" >  
    
      
        
<tr>
<td> <a href="project.html"> ACCUEIL <img src="acc.png" width="60px" align="rigth"> </a></td>
<td>   <a href="login.html"> ESPACE CLIENT<img src="ins.jpg" width="50px" align="rigth"> </a></td> 
<td>    <a href="admistrateur.html">  ADMISTRATEUR  <img src="ad.jpg" width="50px" align="rigth"></a> </td>
<td><a href="conctact.html"> CONTACT <img src="co.png" width="50px" align="rigth"></a> </td>

</tr>



   
</table>    

</div>


</header>

<nav>

 

</nav>


<?php
$serveur = "localhost";
$utilisateur = "MALIKA";
$motdepasse = "test1234";
$base = "gestion location de voiture";

$sum=mysqli_connect($serveur, $utilisateur , $motdepasse,$base);
if(isset($_POST['submit'])){
    @$num_v=$_POST ["num_v"];
    @$matruculation=$_POST ["matruculation"];
    $marque=$_POST["marque"];
    $modele=$_POST["modele"];
    $couleur=$_POST["couleur"];
    $prix=$_POST["prix"];
    @$etat=$_POST["etat"];
    @$imagee=$_FILES['imagee']['tmp_name'];

    @$traget="images/".$_FILES['imagee']['name'];
    move_uploaded_file($imagee,$traget);
$a=("UPDATE Voiture SET num_v='$num_v',matruculation='$matruculation',marque='$marque',modele='$modele',couleur='$couleur',prix='$prix',etat='$etat',imagee='$traget' WHERE num_v='$num_v'");


$mp=mysqli_query($sum,$a);
if($mp){
    echo"cest bon";

}
else{
    echo"non";
}}
?>

 
</body>






















