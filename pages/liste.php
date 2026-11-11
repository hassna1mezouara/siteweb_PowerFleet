<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./fichiercss/liste.css">
</head>
<body>

<header>
<div class="div1">
<img class="image-logo" src="./statics/logo.png" alt="..">
<h1 class="onwan1">Gestion des tickets POWERFLEET</h1>
</div>

</header>
<h4 class="onwan8">Merci d'entrer le code de suivi du ticket</h4>
<div class="formm">
<form action="tousliste.php" method="POST">
        <label for="trackingId">Un de vos ID de suivi:</label>
        <input class="one" type="text" id="trackingId" name="trackingId"><br><br>
        <label for="email">Email :</label>
        <input   class="onee" type="email" id="email" name="email"><br><br>

        <button class="botton1" type="submit">VOIR LA LISTE DE MES TICKETS</button> 
        <button class="botton2" type="reset">ANNULER</button>
       
    </form>
</div>


<?php
$servername = "localhost"; // Remplacez par votre serveur MySQL
$username = "root"; // Remplacez par votre nom d'utilisateur MySQL
$password = ""; // Remplacez par votre mot de passe MySQL
$dbname = "contact"; // Remplacez par le nom de votre base de données


// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Vérifier si les données POST sont définies
if (isset($_POST['email'])) {
    $email = $_POST['email'];

    // Requête SQL pour récupérer les tickets
    $sql = "SELECT id, email, request_type, ticket_group, severity,subject, message, username FROM tickeet WHERE email='$email'";
    $result = $conn->query($sql);

    // Vérifier si la requête a réussi
    if ($result) {
        if ($result->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr><th>ID</th><th>Email</th><th>Type de Demande</th><th>Groupe du Ticket</th><th>Sévérité</th><th>Sujet</th><th>Message</th><th>Nom d'Utilisateur</th></tr>";
            // Afficher les données de chaque ligne
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["email"]."</td><td>".$row["request_type"]."</td> <td>".$row["ticket_group"]."</td><td>".$row["severity"]."</td> <td>".$row["subject"]."</td><td>".$row["message"]."</td>  <td>".$row["username"]."</td></td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 résultats";
        }
    } else {
        echo "Erreur dans la requête SQL : " . $conn->error;
    }
} else {
    echo "Veuillez entrer un email.";
}

$conn->close();
?>



















    
</body>
</html>