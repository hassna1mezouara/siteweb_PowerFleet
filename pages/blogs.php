<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./fichiercss/blogs.css">
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



<div class="card-list">
        <a href="./lutercontre.php" class="card-item">
            <img src="./statics/immigration.jpeg" alt="Card Image">
            <h3>LUTTER CONTRE L’IMMIGRATION CLANDESTINE</h3>
            <p>le phénomène de l’immigration clandestine représente toujours une complexité et une obsession pour les fournisseurs et les clients qui utilisent des camions frigorifiques, surtout avec le renforcement de la surveillance des frontières du Royaume du Maroc.</p>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
        <a href="./realisationdesiteweb.php" class="card-item">
            <img src="./statics/creation des site web.png" alt="Card Image">
            <h3>COMMENT RÉALISER UN SITE WEB RÉUSSI EN 10 ÉTAPES ?</h3>
            <p>À première vue, il suffit d’avoir une bonne idée, quelques contenus et un bon CMS, tel que WordPress / Drupal, pour réaliser un site web. En réalité, la création d’un site web est bien plus complexe de ce qu’on pourrait croire. Cet article vous donnera un aperçu sur les étapes de la création d’un site web réussi.</p>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
        <a href="./solutiongestiondeflotte.php" class="card-item">
            <img src="./statics/comment.jpg" alt="Card Image">
            <h3>COMMENT CHOISIR UNE SOLUTION DE GESTION DE LA FLOTTE ?</h3>
            <p>De nos jours, une solution de gestion de flotte constitue un Must Have pour réussir le management du parc automobile. Quelque soit la taille de ce parc, la solution de gestion de flotte est un outil enrichissant.
            </p>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>



            <a href="./gestiondecarburants.php" class="card-item">
            <img src="./statics/carburant.jpg" alt="Card Image">
            <h3>LA GESTION DE CARBURANT</h3>
            <p>Avec la flambée des prix du carburant, la gestion de cette ressource précieuse doit être optimisée. Réduire les coûts du carburant est le problème majeur de toute entreprise disposant d’une flotte de véhicules.</p>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
        <a href="./consomationdecarburant.php" class="card-item">
            <img src="./statics/akhirhaja.jpg" alt="Card Image">
            <h3>SOLUTIONS CANBUS POUR LE SUIVI DE LA CONSOMMATION DU CARBURANT
            </h3>
            <p>Power Fleet, a enrichi son offre avec la solution CANBus. Il s’agit d’un outil qui permet l’évaluation des chauffeurs et de leur éco-conduite.</p>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
           
        </a>
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