<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "immobilier";
$port="3307";



// Connexion à la base de données

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if (!$conn) {

	die('Erreur de connexion à la base de données : ' . mysqli_connect_error());

}



// Récupération du dernier prix envoyé depuis la page HTML

$price = $_POST['price'];



// Insertion du prix dans la base de données

$query = "INSERT INTO prices VALUES ($price)";

$result = mysqli_query($conn, $query);

if (!$result) {

	die('Erreur d\'enregistrement du prix : ' . mysqli_error($conn));

}



// Fermeture de la connexion à la base de données

mysqli_close($conn);



echo 'Prix enregistré avec succès dans la base de données.';

?>