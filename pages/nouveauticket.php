<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Tickets</title>
    <link rel="stylesheet" href="./fichiercss/nouveauticket.css">
</head>
<body>

<header>
    <div class="div1">
        <img class="image-logo" src="./statics/logo.png" alt="Logo">
        <h1 class="onwan1">Gestion des tickets POWERFLEET</h1>
    </div>
</header>

<div class="form-container">
    <form action="#" method="POST">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="requestTypeField">Type de demande</label>
            <select id="requestTypeField" name="requestTypeField" required>
                <option value="commercial">Question commerciale</option>
                <option value="technical">Demande d'aide fonctionnelle</option>
                <option value="other">Question ou bug</option>
                <option value="other">Autre</option>
            </select>
        </div>
       
        <div class="form-group">
            <label for="severity">Sévérité</label>
            <select id="severity" name="severity" required>
                <option value="low">Faible</option>
                <option value="medium">Normal</option>
                <option value="high">Critique/bloquant</option>
            </select>
        </div>
        <div class="form-group">
            <label for="subject">Sujet</label>
            <input type="text" id="subject" name="subject" required>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" required></textarea>
        </div>
        <div class="form-group">
    <label for="usernameField">Nom d'utilisateur</label>
    <input type="text" id="username" name="username" id="usernameField">
    <small>Nom d'utilisateur (requis si votre requête concerne PowerFleet, veuillez indiquer votre identifiant sur notre plateforme).</small>
    <script>
document.addEventListener('DOMContentLoaded', function() {
    var requestTypeField = document.getElementById('requestTypeField'); // ID corrigé
    var usernameField = document.getElementById('username');

    // Fonction pour mettre à jour le champ requis
    function updateUsernameRequirement() {
        if (requestTypeField.value === 'technical') {
            usernameField.required = true; // Rendre le champ requis
        } else {
            usernameField.required = false; // Rendre le champ optionnel
        }
    }

    // Vérifier l'état initial du champ
    updateUsernameRequirement();

    // Ajouter un événement de changement sur le champ de type de demande
    requestTypeField.addEventListener('change', updateUsernameRequirement);
});
</script>




</div>


        <div class="form-buttons">
            <button type="submit">CRÉER TICKET</button>
            <button type="reset">ANNULER</button>
        </div>
    </form>
</div>

<?php
   // Vérification du type de demande et de l'identifiant utilisateur
  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

function sendTicketEmail($clientEmail, $ticketID) {
    $mail = new PHPMailer(true);

    try {
        // Configuration SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Serveur SMTP
        $mail->SMTPAuth = true;
        $mail->Username = 'tsite1496@gmail.com'; // Votre adresse Gmail
        $mail->Password = 'xrth jvqo qtot ddwl'; // Mot de passe d'application Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Expéditeur
        $mail->setFrom('tsite1496@gmail.com', 'Support PowerFleet');
        $mail->addAddress($clientEmail); // Destinataire

        // Contenu de l'email
        $mail->isHTML(true);
        $mail->Subject = "Votre ticket a ete cree  ID : $ticketID";
        $mail->Body = "
            <p>Bonjour,</p>
            <p>Votre ticket a été créé avec succès. Voici les détails :</p>
            <ul>
                <li><strong>ID du ticket :</strong> $ticketID</li>
            </ul>
      
            <p>Cordialement,<br>L'équipe PowerFleet</p>
        ";

        $mail->send();
        echo "Email envoyé au client avec succès.";
    } catch (Exception $e) {
        echo "L'email n'a pas pu être envoyé. Erreur : {$mail->ErrorInfo}";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $email = htmlspecialchars($_POST['email']);

    $requestType = isset($_POST["requestTypeField"]) ? htmlspecialchars($_POST["requestTypeField"]) : ''; // Vérification de l'existence// Get request type from form submission   
    $severity = htmlspecialchars($_POST['severity']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    $username = htmlspecialchars($_POST['username']);

    // Connexion à la base de données
    $servername = "localhost";
    $db_username = "root";
    $password = "";
    $dbname = "contact";

    $conn = new mysqli($servername, $db_username, $password, $dbname);

    if ($conn->connect_error) {
        die("Échec de la connexion : " . $conn->connect_error);
    }

    // Insertion du ticket dans la base de données
    $stmt = $conn->prepare("INSERT INTO tickeet (email, request_type, severity, subject, message, username) VALUES ( ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $email, $requestType, $severity, $subject, $message, $username);

    if ($stmt->execute()) {
        // Récupérer l'ID du ticket
        $ticketID = $stmt->insert_id;

        // Envoyer l'email au client
        sendTicketEmail($email, $ticketID);

        echo "<p>Ticket créé avec succès. voir votre email</p>";
    } else {
        echo "Erreur lors de la création du ticket ";
    }

    $stmt->close();
    $conn->close();
}
?>
 
</body>
</html>
