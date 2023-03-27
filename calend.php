<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "immobilier";
$port="3307";

$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Boucle pour récupérer les 30 redirections
for ($i = 1; $i <= 30; $i++) {
    $sql = "SELECT URLI FROM calendrier WHERE id = $i";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Récupère l'URL de redirection 
        $row = $result->fetch_assoc();
        $url_redirection = $row["URLI"];

        // Redirige l'utilisateur vers l'URL de redirection
        header("Location: $url_redirection");
        exit;
    }
}

// Si aucune redirection n'a été trouvée, affiche un message d'erreur
echo "Erreur : redirection non trouvée.";
?>
