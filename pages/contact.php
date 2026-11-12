<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./fichiercss/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">

    
</head>


<body>
    <header id="header" class="fixed-header">
        <div class="aa">
            <img class="image-logo" src="./statics/logo.png" alt="..">
            <a class="nsaybohadchi" href="./accuiel.php" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'accueil.php') echo 'active'; ?>">ACCUEIL</a>
            <a class="nsaybohadchi" href="./powerfleet.php" class="<?php if(!isset($_GET['page']) || $_GET['page'] == './powerfleet.php') echo 'active'; ?>">POWER FLEET</a>
            <a class="nsaybohadchi" href="./nosservices.php" class="<?php if(isset($_GET['page']) && $_GET['page'] == './services.php') echo 'active'; ?>">NOS SERVICES</a>
            <a class="nsaybohadchi" href="./blogs.php" class="<?php if(isset($_GET['page']) && $_GET['page'] == './blogs.php') echo 'active'; ?>">BLOGS</a>
           
            <a class="nsaybohadchi" href="./faq.php" class="<?php if(isset($_GET['page']) && $_GET['page'] == './faq.php') echo 'active'; ?>">FAQ</a>
            <a class="nsaybohadchi" href="./contact.php" class="<?php if(isset($_GET['page']) && $_GET['page'] == './contact.php') echo 'active'; ?>">CONTACT</a>
            <a class="espaceclient" href="./espaceclient.php">espace clients</a>
            <a class="espaceclient" href="./aide.php">aide</a>
        </div>
    </header>

    <script>
    window.onscroll = function() { fixHeader(); };//Déclenché lorsque l'utilisateur fait défiler la page vers le bas ou vers le haut
    function fixHeader() {
        var header = document.getElementById("header");//Sélectionne l'en-tête grâce à son id
        var sticky = 200; // Le nombre de pixels après lequel le header devient fixe
        if (window.pageYOffset > sticky) {
            header.classList.add("fixed");//Indique la distance verticale (en pixels) entre le haut de la page et la position actuelle du scroll.
        } else {
            header.classList.remove("fixed");
        }
    }
    </script>
 





 <div class="div1">
    <h2 class="onwan1">Restez en contact</h2>
    <h3 class="onwan2">N’hésitez pas à nous écrire en cas de besoin d’informations, de demande de devis, ou de propositions et remarques.</h3>
    <form action="" method="POST">
        <div class="form-group fullname">
            <label for="nom">Nom</label>
            <input type="text" id="nom" placeholder="Entrez votre nom" name="nom">
        </div>
        <div class="form-group email">
            <label for="email">E-mail</label>
            <input type="email" id="email" placeholder="Entrez votre email" name="email">
        </div>
        <div class="form-group password">
            <label for="telephone">Téléphone</label>
            <input type="number" id="telephone" placeholder="Entrez votre numéro de téléphone" name="telephone">
        </div>
        <div class="form-group date">
            <label for="entreprise">Entreprise</label>
            <input type="text" id="entreprise" placeholder="Entrez votre entreprise" name="entreprise">
        </div>
        <div class="form-group date">
            <label for="message">Message</label>
            <input type="text" id="message" placeholder="Laissez votre message" name="message">
        </div>
        <div class="form-group submit-btn">
            <input type="submit" value="Envoyer" name="Envoyer">
        </div>
    </form>
    <script src="script.js"></script>

    <script src="script.js"></script>
     
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialiser un tableau d'erreurs
    $errors = [];

    // Vérifier si les champs requis sont vides
    if (empty($_POST["nom"])) {
        $errors[] = "Le champ nom est requis.";
    }
    if (empty($_POST["email"])) {
        $errors[] = "Le champ email est requis.";
    }
    if (empty($_POST["message"])) {
        $errors[] = "Le champ message est requis.";
    }

    // Si des erreurs sont présentes, les afficher
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p>" . htmlspecialchars($error) . "</p>";
        }
    } else {
        // Récupération des valeurs du formulaire
        $nom = htmlspecialchars($_POST['nom']);
        $email = htmlspecialchars($_POST['email']);
        $telephone = htmlspecialchars($_POST['telephone']);
        $entreprise = htmlspecialchars($_POST['entreprise']);
        $message = htmlspecialchars($_POST['message']);

        // Connexion à la base de données
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "contact";

        // Création de la connexion
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Vérification de la connexion
        if ($conn->connect_error) {
            die("Échec de la connexion : " . $conn->connect_error);
        }

        // Préparation de la requête
        $stmt = $conn->prepare("INSERT INTO contactez_nous (nom, email, telephone, entreprise, message) VALUES (?, ?, ?, ?, ?)");
        if ($stmt === false) {
            die('Échec de la préparation de la requête : ' . $conn->error);
        }

        // Liaison des paramètres
        $stmt->bind_param("sssss", $nom, $email, $telephone, $entreprise, $message);

        // Exécution de la requête
        if ($stmt->execute()) {
            echo "Enregistrement réussi.";
        } else {
            echo "Échec de l'enregistrement : " . $stmt->error;
        }

        // Fermeture de la déclaration et de la connexion
        $stmt->close();
        $conn->close();
    }
}?>


<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';//inclut et évalue le fichier spécifié.

function sendMail($nom, $email, $telephone, $entreprise, $message) {
    $mail = new PHPMailer(true);

    try {
        // Configuration SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Serveur SMTP
        $mail->SMTPAuth = TRUE;//Active l'authentification SMTP.
        $mail->Username = 'tsite1496@gmail.com'; // Votre adresse e-mail
        $mail->Password = 'VOTRE_MOT_DE_PASSE_APPLICATION'; // Mot de passe d'application GmailC'est un mot de passe d'application généré via les paramètres de sécurité de Google.
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Expéditeur (votre propre adresse e-mail)
        $mail->setFrom('tsite1496@gmail.com', 'power fleet');

        // Répondre à l'adresse e-mail de l'utilisateur
        $mail->addReplyTo($email, $nom);

        // Destinataire (vous-même)
        $mail->addAddress($email);

        // Contenu du mail
        $mail->isHTML(true);
        $mail->Subject = 'power fleet ';
        $mail->Body = "
            <h3>power fleet :</h3>
            <p>Nous vous remercions d'avoir pris le temps de nous contacter, Notre équipe reviendra vers vous dans les plus brefs délais pour vous fournir une réponse </p>
           
        ";

        // Envoi du mail
        //
        $mail->send();
        echo 'Le message a été envoyé avec succès.';
    } catch (Exception $e) {
        echo "Le message n'a pas pu être envoyé. Erreur : {$mail->ErrorInfo}";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification des champs requis
    $errors = [];
    if (empty($_POST["nom"])) {
        $errors[] = "Le champ nom est requis.";
    }
    if (empty($_POST["email"])) {
        $errors[] = "Le champ email est requis.";
    }
    if (empty($_POST["message"])) {
        $errors[] = "Le champ message est requis.";
    }

    // Si aucune erreur, envoi du mail
    if (empty($errors)) {
        $nom = htmlspecialchars($_POST['nom']);//Ce code assigne à la variable $nom la valeur de l'entrée nom du formulaire, après avoir échappé les caractères spéciaux pour la sécuriser.
        $email = htmlspecialchars($_POST['email']);
        $telephone = htmlspecialchars($_POST['telephone']);
        $entreprise = htmlspecialchars($_POST['entreprise']);
        $message = htmlspecialchars($_POST['message']);

        sendMail($nom, $email, $telephone, $entreprise, $message);
    } else {
        foreach ($errors as $error) {
            echo "<p>" . htmlspecialchars($error) . "</p>";
        }
    }
}
?>



    <div class="container">
        <h2>COORDONNÉES</h2>
        <div class="contact-info">
            <div class="contact-item">
                <i class="bi bi-geo-alt-fill"></i>
                <span>5, Imm 179, Quartier Saada, Ain Mezouar, Marrakech</span>
            </div>
            <div class="contact-item">
                <i class="bi bi-telephone-fill"></i>
                <span>(+212) 0 524 435 586<br>(+212) 0 700 500 330</span>
            </div>
            <div class="contact-item">
            <i class="bi bi-envelope-at-fill"></i>
                <span><a href="mailto:contact@powerfleet.ma">contact@powerfleet.ma</a></span>
            </div>
            <div class="contact-item">
            <i class="bi bi-instagram"></i>
                <span><a href="https://instagram.com/powerfleet.maroc">powerfleet.maroc</a></span>
            </div>
            <div class="contact-item">
            <i class="bi bi-twitter"></i>
                <span><a href="https://twitter.com/powerfleetmaroc">powerfleetmaroc</a></span>
            </div>
            <div class="contact-item">
            <i class="bi bi-facebook"></i>
                <span><a href="https://facebook.com/powerfleetmaroc">powerfleetmaroc</a></span>
            </div>
        </div>
    </div>


    <div class="containerrr">
        <div class="left-section">
            <img src="./statics/logo.png" alt="PowerFleet Logo">
            <p>Une politique commerciale orientée vers l’amélioration continue, et une prise en charge personnalisée de la clientèle, placent nos partenaires au centre de nos préoccupations.</p>
            <a href="#" class="contact-button">contactez nous</a>
        </div>
        <div class="right-section">
            <h3>COORDONNÉES:</h3>
            <p>Adresse :</p>
            <ul>
                <li>Marrakech : 5, Imm 179, Quartier Saada, Ain Mezouar, Marrakech</li>
                <li>Casablanca : 96, Rue Pierre Parent,</li>
                <li>4ème étage, N°34 (à coté de Acima Med V)</li>
            </ul>
            <p>Horaires du travail :</p>
            <p>Lun - Sam: 09h00 - 18h00</p>
            <p>Téléphone :</p>
            <p>(+212) 700 500 330</p>
        </div>
    </div>



    </body>
   </html>