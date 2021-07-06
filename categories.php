<?php 
include("conn.php");
?>
<?php 
$query="SELECT * FROM CATEGORIE";
$resultat=mysqli_query($connect,$query);
?>
 <select id="cats">
    <?php
        while($row=mysqli_fetch_array($resultat)) {
            echo "<option value=".$row["ID_CATEGORIE"].">".$row["LIBELLE_CATEGORIE"]."</option>";
        }
    ?>
</select>
