<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./fichiercss/nosservices.css">
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
        <a href="./geolocalisation.php" class="card-item">
            <img src="./statics/geolocalisation-vehicules.jpg" alt="Card Image">
            <h3>Géolocalisation des véhicules</h3>
            <p>Suivre à distance et à tout moment les déplacements de vos véhicules, ainsi que leurs maintenances.</p>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
        <a href="./creationSiteWeb.php" class="card-item">
            <img src="./statics/creation des site web.png" alt="Card Image">
            <h3>Création des sites web</h3>
            <p>Simple vitrine ou extranet avec des fonctions de travail collaboratif, nous proposons des solutions adaptées.</p>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
        <a href="./logicielsSurMesur.php" class="card-item">
            <img src="./statics/logiciel sur mesur.png" alt="Card Image">
            <h3>Logiciels sur mesure</h3>
            <p>Avoir un logiciel sur mesure répondant à vos besoins et avec les normes et conventions.</p>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>



            <a href="./ventrmaterielle.php" class="card-item">
            <img src="./statics/materiel informatique.jpg" alt="Card Image">
            <h3>Vente de matériels informatiques</h3>
            <p>Une vaste gamme de matériels et accessoires des plus grands éditeurs et constructeurs informatiques.</p>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
        <a href="./infographeiDesign.php" class="card-item">
            <img src="./statics/infographei et design.png" alt="Card Image">
            <h3>Infographie et design
            </h3>
            <p>Pour la création d’une infographie design, faites appel aux meilleurs graphistes, experts en la matière.</p>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
        <a href="./formationProf.php" class="card-item">
            <img src="./statics/formation proffessionnelle.jpg" alt="Card Image">
            <h3>Formation professionnelle</h3>
            <p>Plusieurs offres complètes de formations répondant aux besoins du marché IT.</p>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
    </div>


<div class="anawin">  
    <h2 class="onwan1">DÉPÊCHEZ-VOUS! CONTACTEZ-NOUS AUJOURD'HUI ET OBTENEZ
    </h2 >
    <h1 class="onwan2">Une réduction de 10% sur votre première commande</h1>
    <a  class="button" href="./contact.php"> CONTACTEZ NOUS!</a>
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