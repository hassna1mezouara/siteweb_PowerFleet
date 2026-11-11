
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./fichiercss/faq.css">
</head>
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
  
   <div class="div1">
   <h2 class="onwan3"> Vous trouverez ici les réponses aux questions les plus fréquemment posées sur nos produits et services. </h2>
   <h3 class="onwan4">Si vous ne trouvez pas la réponse à votre question, n'hésitez pas à nous contacter."</h3>
   <img class="image" src="./statics/fqa-Photoroom.png" alt="">
   <a href="./contact.php" class="botton">contactez nous!</a> 
   </div>
   <h1 class="onwan8">Catégories de Questions et Réponses</h1>
   <div>
   <h3 class="onwan1">1. Général</h3>
   <h4 class="onwan2">Qu'est-ce que Power Fleet ?</h4>
   <p class="para">Power Fleet est une entreprise spécialisée dans les solutions de gestion de flotte, offrant des services de suivi en temps réel, des analyses de performance et des outils de gestion pour optimiser l'utilisation des véhicules et réduire les coûts.</p>
<h4 class="onwan2">Quels sont les services offerts par Power Fleet ?</h4>
<p class="para">Nous offrons des solutions de suivi GPS en temps réel, des rapports détaillés sur la performance des véhicules, des alertes personnalisées, et des outils pour l'optimisation des itinéraires et la gestion des carburants.</p>
<h4 class="onwan2">Comment puis-je contacter le support client de Power Fleet ?</h4>
<p class="para">Vous pouvez nous contacter par email à support@powerfleet.com ou par téléphone au +212 5 22 34 56 78. Notre équipe est disponible du lundi au vendredi de 9h à 18h.</p>
<h3  class="onwan1">2. Produits et Services</h3>
<h4 class="onwan2">Quels types de véhicules peuvent être gérés avec Power Fleet ?</h4>
<p class="para">Power Fleet peut gérer tous types de véhicules, y compris les voitures, camions, bus, et motos.</p>
<h4 class="onwan2">Quelles sont les fonctionnalités principales de votre logiciel de gestion de flotte ?</h4>
<p class="para">Nos fonctionnalités incluent le suivi en temps réel, les rapports de performance, les alertes de maintenance, la gestion des itinéraires, et l'analyse des comportements de conduite.</p>
<h4 class="onwan2">Power Fleet propose-t-il des solutions personnalisées ?</h4>
<p class="para">Oui, nous proposons des solutions personnalisées pour répondre aux besoins spécifiques de chaque client. Contactez notre équipe pour discuter de vos exigences particulières.</p>
<h3  class="onwan1">3. Sécurité et Confidentialité</h3>
<h4 class="onwan2">Comment Power Fleet protège-t-il mes données ?</h4>
<p class="para">Nous utilisons des protocoles de sécurité avancés pour protéger vos données, y compris le chiffrement SSL pour les communications et des serveurs sécurisés pour le stockage des données.</p>
<h4 class="onwan2">Quelles sont les mesures de sécurité mises en place ?</h4>
<p class="para">Nos mesures de sécurité incluent le chiffrement des données, des pare-feux robustes, et des contrôles d'accès stricts pour garantir que seules les personnes autorisées peuvent accéder à vos informations.</p>
<h4 class="onwan2">Puis-je contrôler l'accès aux données de mon compte ?</h4>
<p class="para">Oui, vous pouvez définir différents niveaux d'accès pour les utilisateurs de votre compte, assurant que chaque employé n'a accès qu'aux informations dont il a besoin pour son travail.</p>
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



 