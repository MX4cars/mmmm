<html>

 <head>
    <title>INSCRIPTION</title>
    
   </title> 
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width ,initial-scale=1.0"> 
   <link rel="stylesheet"  href="project.css">
 </head>


   
 <body id="acceuile">
    
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
         
        </div>
        
          
      
      </header>
      
      <nav>
      
          
      
      </nav>

      <form method="get" action="paiement.php">
   <center> <h3><U>RESERVATION </U></h3> </center> 
   <div class="tab">
   <table border="0">
    


   <tr>

        <td> <label for="name"  >numero reservation :</label></td>
       <td>  <input type="number" name="num_r"  ></td> 
         </tr>
         <tr>
          <td> <label for="name"  > Date debut:</label></td> 
         <td>   <input type="date" name="date_debut"></td> 
            </tr>
         <tr>
       <td> <label for="name"  >heure debut:</label></td> 
      <td>   <input type="time" name="heure_debut"  ></td> 
         </tr>
         
         <tr>
     <td><label for="name"  >Date fin :</label></td>  
  <td> <input type="date" name="date_fin"  >  </td>  
</tr>

<tr>
  <td><label for="name"  >heure fin :</label></td>  
<td> <input type="time" name="heure_fin"  >  </td>  
</tr>


<tr>
  <td><label for="name"  >nombre de jour:</label></td>  
<td> <input type="number" name="nombre_jour"  >  </td>  
</tr>

<tr>
  <td>
      <input type="reset" name="reset" value="Annuler">
      <input type="submit" name="submit" value="Reserver">
  </td>
</tr>
</table>
</div>


</form>


 
<?php
$serveur = "localhost";
$utilisateur = "MALIKA";
$motDePasse = "test1234";
$base = "gestion location de voiture";

$sum=mysqli_connect($serveur, $utilisateur , $motDePasse,$base);
if(isset($_POST['submit'])){
@$num_r=$_POST ["num_r"];
@$date_debut=$_POST ["date_debut"];
$heure_debut=$_POST["heure_debut"];
$date_fin=$_POST["date_fin"];
$heure_fin=$_POST["heure_fin"];
$nombre_jour=$_POST["nombre_jour"];
$num_v=$_POST["num_v"];
$carte_ID=$_POST["carte_ID"];

$ajout="INSERT INTO Reservation  VALUES('$num_r','$date_debut','$heure_debut','$date_fin','$heure_fin','$nombre_jour','$num_v','$carte_ID')";


$add=mysqli_query($sum,$ajout);
if($add){
  header("Location:contrat.html");
}
else {
    echo "cest pas bon";
}
}




    


?>
</body>
</html>