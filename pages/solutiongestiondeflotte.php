<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POWER FLEET</title>
    <link rel="stylesheet" href="fichiercss/solutiongestindeflotte.css">

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
   <img  class="image"src="./statics/comment.jpg" alt="">
   <p class="para">De nos jours, une solution de gestion de flotte constitue un Must Have pour réussir le management du parc automobile. Quelque soit la taille de ce parc, la solution de gestion de flotte est un outil enrichissant. De ce fait, il convient d’accorder un grand intérêt à la sélection de votre fournisseur de logiciel de gestion de flotte. Réduire les coûts, se conformer à la législation en vigueur ou améliorer votre relation client…. Quelque soit votre objectif, une solution de gestion de flotte constitue un outil économique et pratique. Pour réussir le choix de votre fournisseur de logiciel de gestion de parc, il convient de s’intéresser à plusieurs indicateurs. Identifier ses besoins Avant de commencer à chercher et à comparer les fournisseurs des systèmes de gestion de flotte, vous devez dans un premier temps définir vos besoins d’une manière claire et précise. Ceci se fait en répondant à la question suivante: « Qu’attendez-vous de cette solution? » Ainsi, vous pouvez établir une liste des fonctionnalités qui pourront faciliter la gestion de votre parc. Intéressez-vous aux fonctionnalités principales. Les fonctions complémentaires constituent une perte d’argent. La réputation du fournisseur Pour bien choisir son fournisseur de système de gestion de flotte, la réputation et l’expérience sur le marché constituent un bon indicateur et un critère objectif de choix. Avec la variété croissante des fournisseurs et des entreprises spécialisées dans le développement des solutions de gestion de flotte, le choix n’est plus une tâche aisée. De ce fait, privilégiez les marques fiables et connues e qui s’adaptent à touts les types d’activités. L’expérience utilisateur La solution de gestion de flotte choisie doit être facile à adopter par les utilisateurs au sein de l’entreprise. Plus le système est intuitif, simple et avantageux, plus l’expérience utilisateur est agréable. L’utilisation d’un logiciel de gestion de flotte devient, ainsi, un avantage concurrentiel pour l’entreprise.
   </p>
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