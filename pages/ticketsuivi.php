<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Style pour le tableau */
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
        }
        table th, table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        table th {
            background-color: cadetblue;
            color: white;
        }
        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        table tr:hover {
            background-color: #ddd;
        }
        table tr {
            transition: background-color 0.3s ease;
        }
        /* Style pour le formulaire de mise à jour */
        .update-form {
            width: 90%;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
        }
        .update-form label {
            display: block;
            margin-bottom: 10px;
        }
        .update-form input, .update-form textarea, .update-form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
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
if (isset($_POST['email']) && isset($_POST['trackingId'])) {
    $email = $_POST['email'];
    $id = $_POST['trackingId'];

    // Requête SQL pour récupérer les tickets
    $sql = "SELECT id, email, request_type, severity, subject, message, username, solution FROM tickeet WHERE id='$id'";
    $result = $conn->query($sql);

    // Vérifier si la requête a réussi
    if ($result) {
        if ($result->num_rows > 0) {
            // Afficher les détails du ticket
            echo "<table border='1'>";
            echo "<tr><th>ID</th><th>Email</th><th>Type de Demande</th><th>Sévérité</th><th>Sujet</th><th>Message</th><th>Nom d'Utilisateur</th><th>Solution</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["email"]."</td><td>".$row["request_type"]."</td><td>".$row["severity"]."</td><td>".$row["subject"]."</td><td>".$row["message"]."</td><td>".$row["username"]."</td><td>".$row["solution"]."</td></tr>";
            }
            echo "</table>";

            // Formulaire pour mettre à jour la solution et le statut
           
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

    












