<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POWER FLEET</title>
    <link rel="stylesheet" href="fichiercss/gestiondecarburant.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Bona+Nova+SC:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Ajouter jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
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
    window.onscroll = function() { fixHeader(); };

    function fixHeader() {
        var header = document.getElementById("header");
        var sticky = 200; // Le nombre de pixels après lequel le header devient fixe
        if (window.pageYOffset > sticky) {
            header.classList.add("fixed");
        } else {
            header.classList.remove("fixed");
        }
    }
    </script>
   
<img  class="image" src="./statics/carburant.jpg" alt="">
<p class="para1">Avec la flambée des prix du carburant, la gestion de cette ressource précieuse doit être optimisée. Réduire les coûts du carburant est le problème majeur de toute entreprise disposant d’une flotte de véhicules. Nous avons étudié ces besoins et vous propose une solution performante POWERFLEET qui va vous aidez a géré la consommation du carburant. Grâce à la technologie de la géolocalisation GPS, cette solution assure le contrôle et le suivi de la consommation du carburant, en temps réel ou en différé.</p>

<div class="container">
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







        
    </body></html>