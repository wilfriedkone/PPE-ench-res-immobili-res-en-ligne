<?php

include "cnx.php";

if(isset($_GET["nom"]) && isset($_GET["prenom"]) && isset($_GET["email"]) && isset($_GET["mdp"]) )
{
   $nom=$_GET["nom"];
   $prenom=$_GET["prenom"];
   $email=$_GET["email"];
   $mdp=$_GET["mdp"];
   $url="connexion.html";
   $texte_du_lien="inscrition effectuée veuillez clicker ici pour vous connecter";

   if(!empty($nom) && !empty($prenom) && !empty($email) && !empty($mdp)){
     $req= mysqli_query($link,"insert into user (nom,prenom,email,mdp) values('$nom','$prenom','$email','$mdp')");
     if($req)
     {
         echo '<a href="'. $url .'">'. $texte_du_lien . '</a>';
     }else
     {
         echo "erreur d'insertion";

     }
   } else {
     echo "Tous les champs sont obligatoires";
   }
}





?>