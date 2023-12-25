

<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width ,initial-scale=1.0"> 
        <link rel="stylesheet"  href="project.css">
    </head>



    <h1> MX4 CARS <img src="non.jpg" align="left" width="150px">    </h1>   
    <body id="om">
 
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

    
    <form action="" method="post" enctype="multipart/form-data">
    <div id="image">
            <table border="1">
<thead>
<tr>
<th> num_v </th>
<th> matruculation </th>
<th> marque </th>
<th> modele </th>
<th> couleur </th>
<th>  prix</th>
<th> etat </th>
<th> image </th>  
</tr>

</thead>
<?php

$serveur = "localhost";
$utilisateur = "MALIKA";
$motDePasse = "test1234";
$base = "gestion location de voiture";

$sum=mysqli_connect($serveur, $utilisateur , $motDePasse,$base);

$query="SELECT * FROM Voiture";
$query_run=mysqli_query($sum,$query);

while($row =mysqli_fetch_array($query_run)){
?>

<tr>
    <td><?php echo $row['num_v']   ;   ?> </td>
    <td><?php echo $row['matruculation']   ;   ?> </td>
    <td><?php echo $row['marque']   ;   ?> </td>
    <td><?php echo $row['modele']   ;   ?> </td>
    <td><?php echo $row['couleur']   ;   ?> </td>
    <td><?php echo $row['prix']   ;   ?> </td>
    <td><?php echo $row['etat']   ;   ?> </td>
    <td><?php echo '<img src="'.$row['imagee'].'" alt="Image" style="width=:200px ;heigth:100px; " >'   ;   ?> </td>
</tr>

<?php
}



  









?>

</table>
</div>
</form>



<BR>
        <a href="admistrateur.html"> <input type="submit" value="RETOUR"></a>
    </body>
</html>