<html>
    <head>
        <title>
MON SITE WEB
        </title> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width ,initial-scale=1.0"> 
        <link rel="stylesheet"  href="project.css">
        <body id="page1">
            
        <h1> MX4 CARS <img src="non.jpg" align="left" width="150px">    </h1>   
    </head>
    
    
    
    
    
   
<header>
   
<div class="mop">
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

<h3> RECHERCHER DIFFERENTS VOITURES </h3>
<form method="post" action="recherchervoiture.php">
<div class="tab">
<table border="0">

<tr><td>marque</td> <td> <input type="text" name="marque" required></td></tr>
<tr><td>modele </td> <td> <input type="text" name="modele" required></td></tr>
<tr><td>couleur</td> <td> <input type="text" name="couleur" required></td></tr>
<tr>
    <td>
        <input type="reset" name="reset" value="Annuler">
        <input type="submit" name="submit" value="RECHERCHER">
    </td>
</tr>
<tr>
    <td>
    <a href="login.html"> DECONNEXION</a>
</td>
</tr>

</table>

</div>




</form>
<a href="modifierafficher.php"> see more</a>
<?php
session_start();

$serveur = "localhost";
$utilisateur = "MALIKA";
$motDePasse = "test1234";
$base = "gestion location de voiture";
$sum=mysqli_connect($serveur, $utilisateur , $motDePasse,$base);


if(isset($_POST['submit'])){
    $marque=$_POST["marque"];
    $modele=$_POST["modele"];
    $couleur=$_POST["couleur"];
    $req="SELECT * FROM Voiture WHERE marque like'%$marque%' and modele like'%$modele%' and couleur like'%$couleur%'";

    
  
$resul=mysqli_query($sum,$req);
while($row=mysqli_fetch_assoc($resul)){
    ?>
    <div class="image">
<table>
<tr><td><img src="<?php echo$row['imagee']?>"/> </td></tr>
<tr><td>numero de voiture: <?php echo $row['num_v']   ;   ?> </td>  </tr> 
<tr><td>matricule: <?php echo $row['matruculation']   ;   ?></br>
<tr><td>Marque:<?php echo $row['marque']   ;   ?> </br>
<tr><td>Modele:<?php echo $row['modele']   ;   ?> </br>
<tr><td>Couleur:<?php echo $row['couleur']   ;   ?> </br>
<tr><td>Prix:<?php echo $row['prix']   ;  ?> </td>
<tr><td><a href="reserver.html">Reserver</a>      </td>      
      </div>
         <?php   
          
}}





?>


</body></html>
