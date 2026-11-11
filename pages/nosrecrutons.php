<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>power fleet</title>

    <link rel="stylesheet" href="fichiercss/nosrecrtons.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Bona+Nova+SC:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

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

<h1 class="onwan1">Nous recrutons</h1>
<div class="koulchi">
    <div class="wast">
    <h2 class="onwan2">DÉVELOPPEUR WEB ET MOBILE MARRAKECH (#PF_DWM)</h2>
    <h3 class="onwan3">Nous recrutons un développeur web et mobile.</h3>
    <h3 class="onwan4">Missions :</h3>
<p>Rattaché à la direction Recherche et Développement, vos principales missions serons :</p>
<li>Analyse des besoins de la société et du client.</li>
<li>Architecture et conception technique.</li>
<li>Participation à la conception d’applications des clients, et surtout la plateforme de géolocalisation
de la société.</li>
<li>Développer les nouvelles fonctionnalités des applications.</li>
<li>Développement des tests unitaires et d’intégration.</li>
<li>Etre en veille sur les technologies, pratiques et services liés au développement web/mobile.</li>
<h3  class="onwan4">Compétences demandés :</h3>
<li>PHP, HTML, CSS, JS, Jquery, WordPress, Cordova/Flutter, API Google Maps</li>
<li>Vous êtes créatif , curieux, passionné par le développement et ambitieux, vous n’avez pas de problème 
à travailler en équi</li>
<li>Une expérience préalable dans le domaine est exigée.</li>
<li>Une bonne maîtrise du français est favorable.</li>
<p>Poste basé à Marrakech.
Envoyer votre CV à emploi@powerfleet.ma en précisant dans l’objet le référence #pf_dwm</p>

<h2 class="onwan2">TECHNICO-COMMERCIAUX AGADIR / TANGER (#PF_TCAT)</h2>
<h3 class="onwan3">Nous recrutons des technico commerciaux terrain pour la commercialisation des produits
de géolocalisationet de développement informatique.</h3>
<h3 class="onwan4">Missions :</h3>
<p>
Rattaché à la direction commerciale, vos principales missions seront:</p>
<li>Identification des nouvelles opportunités business.</li>
<li>Mise en place, suivi et gestion d’un portefeuille client.</li>
<li>Suivi des commandes, livraisons, paiements et facturations en fonction des processus existants.</li>
<li>Présentation des produits de géolocalisation (matériel et logiciel).</li>
<h3 class="onwan4">Profil :</h3>
<li>Titulaire d’un diplôme en commerce</li>
<li>Expérience dans le domaine commercial (la connaissance du secteur de géolocalisation est un plus)</li>
<li>Sociable et organisé, vous avez le sens du relationnel.</li>
<li>Maîtrise des techniques de vente et de négociation.</li>
<li>Autonome, rigoureux, capacité d’adaptation.</li>
<li>Bonne présentation.</li>
<li>Postes basés à Tanger et Agadir.</li>
<p>Envoyer votre CV à emploi@powerfleet.ma en précisant dans l’objet le référence #pf_tcat et la ville
(Agadir ou Tanger).</p>
</div>
</div>

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




</body>
</html>