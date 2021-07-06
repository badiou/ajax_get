
<?php 
include("conn.php");
?>
<?php 
if(isset($_GET['idCat']))
{
    $idCat=$_GET['idCat'];
   
}
else
{
   $idCat=1;

}
$query="SELECT * FROM PRODUIT WHERE ID_CATEGORIE=$idCat";  
   
    $resultat=mysqli_query($connect,$query);
    if (!$resultat) {
        printf("Error: %s\n", mysqli_error($connect));
        exit();
    }
?>
Liste des produits : <br>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">DESIGNATION</th>
      <th scope="col">PRIX</th>
      <th scope="col">QUANTITE</th>
      <th scope="col">PROMO</th>
    </tr>
  </thead>
  <tbody>
   <?php 
   while($row=mysqli_fetch_array($resultat)){
       echo "<tr><td>".$row["ID_PRODUIT"]."</td><td>".$row["DESIGNATION"]."</td><td>".$row["PRIX"]."</td><td>".$row["QUANTITE"]."</td><td>".$row["PROMO"]."</td><tr>";
   }
   ?>
    
  </tbody>
</table>
