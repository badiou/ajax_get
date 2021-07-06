$(document).ready(function(){ //au chargement du document
    chargerCategories2(); //Faire Appel à la fonction chargercategories
   // chargerCategories2(); //Faire Appel à la fonction chargercategories
});

//premiere façon d'ecrire la requete
/*function chargerCategories1(){
    //Envoyer une requete ajax avecla methode GET au script catagories.php
    $.ajax({
        url:'categories.php',
        type:'GET',
        dataType:'html',
        success:function(response,status){ //En cas de succès
            $("#divCat").html(response);
            //lorsqu'on charge la liste des categories, il faut charger aussi en meme temps la liste des produits
            $("#cats").change(function(){
                chargerProduits($(this).val())  //ici on recupere la valeur de la catégorie qu'on passe en paramatere dans la fonction chargerProduits
            });

        }
    })

}*/

//Seconde façon d'écrire la requete
function chargerCategories2(){
    $.get("categories.php",function(resp){
        $("#divCat").html(resp);
        //lorsqu'on charge la liste des categories, il faut charger aussi en meme temps la liste des produits
        $("#cats").change(function(){
            chargerProduits($(this).val())  //ici on recupere la valeur de la catégorie qu'on passe en paramatere dans la fonction chargerProduits
        });
    });
}


function chargerProduits(idCat){
    $.get("produits.php?idCat="+idCat,function(resp){
        $("#divProduits").html(resp);
    });
}


