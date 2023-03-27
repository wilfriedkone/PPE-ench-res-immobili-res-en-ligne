<?php
// Connexion à la base de données
include "cnx.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données soumises
    $email = $_POST["email"];
    $mdp = $_POST["mdp"];

    
    $requete = "SELECT * FROM user WHERE email='$email' AND mdp='$mdp'";
    $resultat = mysqli_query($link, $requete);

    // Vérification si l'utilisateur existe dans la base de données
    if (mysqli_num_rows($resultat) == 1) {
        // L'utilisateur existe, démarrer une session pour le connecter
        session_start();
        $_SESSION["email"] = $email;
        header("location: ventes1.php"); // Rediriger vers la page d'accueil
    } else {
        
        echo "Email ou mot de passe incorrect";
    }
}
?>