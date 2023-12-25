<html>
    <head>
        <title>
MON SITE WEB
        </title> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width ,initial-scale=1.0"> 
        <link rel="stylesheet"  href="project.css">
    </head>
    
    
    
    
    
<body id="more">
<h1> MX4 CARS <img src="non.jpg" align="left" width="150px">    </h1>   
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
<table>
    <tr>
        <td>numero</td> <td> <input type="number" name="num_v" ></td>
    </tr>
    <tr> <td><input type="reset" value="annuler"></td> <td><input type="submit" name="submit" value="afficher"></td></tr>
</table> 

</div>


</header>

<nav>

 

</nav>
    

<?php
$serveur = "localhost";
$utilisateur = "MALIKA";
$motDePasse = "test1234";
$base = "gestion location de voiture";
$sum=mysqli_connect($serveur, $utilisateur , $motDePasse,$base);
@$num_v =$_POST['num_v'];
$ajout="SELECT * FROM Voiture WHERE num_v='$num_v'";
$add=mysqli_query($sum,$ajout);
?>
<?php
while($row =mysqli_fetch_array($add)){
    ?>

<div class="tab">
        <table>
            <tr><td>num_v </td> <td> <input type="number" name="num_v" value="<?=$row['num_v']?>"></td></tr>
            <tr><td>matriculation </td> <td> <input type="text" name="matruculation" value="<?=$row['matruculation']?>"></td></tr>
            <tr><td>marque</td> <td> <input type="text" name="marque" value="<?=$row['marque']?>"></td></tr>
            <tr><td>modele </td> <td> <input type="text" name="modele" value="<?=$row['modele']?>"></td></tr>
            <tr><td>couleur</td> <td> <input type="text" name="couleur" value="<?=$row['couleur']?>"></td></tr>
            <tr><td>prix </td> <td> <input type="number" name="prix"value="<?=$row['prix']?>"></td></tr>
            <tr><td>etat</td> <td> <input type="radio" name="etat" value="disponible" value="<?$row['etat']?>">disponible
                <input type="radio"  name="etat" value="non disponible" value="<?=$row['etat']?>">non disponible
            </td></tr>
            <tr><td>image</td> <td> <input type="file"  name="imagee" value="<?=$row['imagee']?>"></td></tr>

            <tr>
                <td>
                    <input type="reset" name="reset" value="Annuler">
                    <input type="submit" name="submit" value="modifier">
                </td>
            </tr>
            

<?php
}
?>

        </table>
    </div>
    </form>
</body>
</html>


