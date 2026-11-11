<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./fichiercss/infographeiDesign.css">
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
    <h1 class="onwan1">DESIGN GRAPHIQUE ET CRÉATION</h1>
    <img class="image1" src="./statics/infographei et design.png" alt="Infographie et Design">
    <p class="para1">Pour vos besoins en graphisme, en design graphique, en conception et en création. Pour une image forte et des concepts graphiques qui parlent par eux-mêmes et qui se démarquent par leur efficacité, leur originalité et leur clarté. De la conception à la réalisation jusqu’à l’impression.</p>
    <ul class="two">
        <li class="one">Identité visuelle : logo, papeterie, pochette corporative, image de marque (branding)</li>
        <li class="one">Imprimé : rapport annuel, brochure, affiche, dépliant, packaging, encart, vêtement, étiquette, accroche-porte, publipostage</li>
        <li class="one">Design d’édition : livre, magazine, brochure, bulletin</li>
        <li class="one">Événementiel : colloque, congrès, campagne lancement, carte de souhait</li>
        <li class="one">Affichage : porteur d’image (rollup), bannière intérieure et extérieure, panneau d’interprétation, panneau d’exposition</li>
        <li class="one">Photo et illustration : séance photo, retouche d’image</li>
    </ul>




    <div class="containerr">
        <div class="section">
            <h2>CRÉATION DE LOGO / IMAGE DE MARQUE</h2>
            <p>La création de logo doit se faire en gardant en tête la satisfaction de la clientèle, car les clients sont acheteurs d’une marque (brand) avant de devenir consommateurs d’un produit ou d’un service. Si vous adoptez un positionnement haut de gamme, il ne faut pas simplement le dire, mais aussi le démontrer. En affichant en toute assurance qui vous êtes, vous n’en serez que plus crédible et efficace..</p>
        </div>
        <div class="section">
            <h2>PUBLICITÉ ET INFOGRAPHIE</h2>
            <p>Puisque nous évoluons dans un contexte où la publicité à outrance noie trop souvent le produit, nous choisissons de propulser nos clients grâce à des concepts novateurs et marquants. C’est également parce que les médias sur lesquels nous diffusons nos messages évoluent sans cesse qu’il est pertinent de faire appel à des ressources et à des influenceurs émergents</p>
        </div>
        <div class="section">
            <h2>EMBALLAGE / PACKAGING</h2>
            <p> Faire appel au service de notre société pour la conception de vos emballages (packaging), c’est vous adjoindre les talents d’artisans amoureux de l’efficiente sophistication. Nous pensons que pour se démarquer sur le marché de l’emballage, il faut s’approprier son contenu, mettre en valeur ses atouts et magnifier son contenant.
            .</p>
        </div>
        <div class="section">
            <h2></h2>
            <p>Notre expertise nous permet de vous créer des logos singuliers et inspirants, de mettre en valeur vos produits et de les positionner correctement sur le marché. Lors de votre lancement, nous contribuons à optimiser votre exposition. Notre direction design et infographie vous aide également à diffuser votre message et à vous faire connaître.</p>
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