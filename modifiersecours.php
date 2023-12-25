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

<form method="POST" action="MODIFIER.php" enctype="multipart/form-data" >
	<table cellpadding="16">
     <?php 
        
          $serveur="localhost";
          $utilisateur="MALIKA";
          $motdepasse="test1234";
          $base="gestion location de voiture";
       
       $sum=mysqli_connect($serveur,$utilisateur,$motdepasse,$base);
	  @ $num_v=$_POST["num_v"];
	  
	  
      $a=("SELECT * FROM Voiture WHERE num_v='$num_v'");

      $b=mysqli_query($sum,$a);      
         
	?>
  
          <?php
         while ($col=mysqli_fetch_row($b)) {

         ?>
        
		<tr>
			<td><b>Numero voiture: </td>
			<td> <?php 

				echo"<input type='number' name='num_v' value='$col[0]'>";
				 ?>
			</td>
		</tr> 



        <tr>
			<td><b>Matriculation:</td>
			<td> <?php 

				echo"<input type='text' name='matruculation' value='$col[1]'>";
				 ?>
			</td>
		</tr> 


        <tr>
			<td><b>   Marque :</td>
			<td> <?php 

				echo"<input type='text' name='marque' value='$col[2]'>";
				 ?>
			</td>
		</tr> 

        <tr>
			<td><b>Modele:</td>
			<td> <?php 

				echo"<input type='text' name='modele' value='$col[3]'>";
				 ?>
			</td>
		</tr> 

        <tr>
			<td><b>couleur : </td>
			<td> <?php 

				echo"<input type='text' name='couleur' value='$col[4]'>";
				 ?>
			</td>
		</tr> 


        <tr>
			<td><b>Prix: </td>
			<td> <?php 

				echo"<input type='number' name='prix' value='$col[5]'>";
				 ?>
			</td>
		</tr> 



        <tr>
			<td><b>Etat: </td>
			<td> <?php 

				echo"<input type='text' name='etat' value='$col[6]'>";
				 ?>
			</td>
		</tr> 





		<tr>
			<td><b>Image :</td>
			<td>

				<?php 
              
			  
			  @$imagee=$_FILES['imagee']['tmp_name'];
			  @$traget="images/".$_FILES['imagee']['name'];
			  move_uploaded_file($imagee,$traget);

				echo"<input type='file' name='imagee' value='$col[7]'>"
             
				  

				 ?>
			</td>
		</tr>
        <?php 
    }
    ?>

		<tr>
			<td><input type="reset" name="annuler" value="Annuler"></td>
			<td><input type="submit" name="submit" value="Modifier"></td>
		</tr>
	</table>
</form>

<TR>
        <td> <a href="admistrateur.html"> <input type="submit" value="RETOUR"></a></td>
    </TR>
</body>
</center>
</html>

















