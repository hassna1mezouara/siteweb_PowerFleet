<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./fichiercss/logicielsSurMesur.css">
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
    <h1 class="onwan1">CONCEPTION DE LOGICIELS ET D’APPLICATIONS SUR MESURE</h1>

    <div> <p class="para1">« Nous sommes leaders dans le domaine de la conception et du développement d’applications collaboratives. Qu’il s’agisse de logiciels de gestion, de production ou d’organisation, nous concevons sur mesure votre programme. »
    Notre savoir-faire nous permet d’intervenir de façon agile dans tous les domaines d’activité, aussi bien pour les entreprises de toutes tailles que pour les collectivités et associations. Nous vous accompagnons dans l’étude et la réflexion autour de votre projet et procédons, après audit de votre besoin, à un devis complet et gratuit. Nos méthodes vous garantissent un logiciel de qualité à un coût maîtrisé, et respectant 100% de vos attentes.</p>
    <img class="image1" src="./statics/logiciel sur mesur.png" alt="">
<h1 class="onwan2">LES AVANTAGES D’UN LOGICIEL SPECIFIQUE </h1>
<p class="para1">Communément appelé « programme informatique », « application », « progiciel », « web app » ou encore « logiciel spécifique », il s’agit avant tout d’un outil dédié à votre métier. Plus particulièrement, nous développons pour votre compte un logiciel qui se fond dans votre organisation ainsi que dans votre système d’information. Contrairement à un logiciel standard, chacune de ses fonctionnalités est développée pour répondre à votre besoin. Adapté à votre organisation, innovant et évolutif, il sera créé avec vous pour rester ergonomique, efficace et sécurisé. Qu’il s’agisse d’assurer votre gestion commerciale (devis, commandes, factures…), votre gestion de stock, de parcs, de garantir la traçabilité de vos produits ou d’améliorer votre planification des biens ou des personnes. ERP ou CRM, nous développons votre logiciel personnalisé en respectant des règles essentielles au confort des utilisateurs : 1- Une interface ergonomique, épurée et claire. 2- Le respect des contraintes liées à votre activité et à votre budget. 3- L’absence de fonctions superflues. </p>
<h1 class="onwan3">QUEL EST LE COÛT D’UN PROGRAMME PERSONNALISÉ ? </h1>
<p class="para2">Si la création d’un logiciel sur mesure n’est pas gratuite, cette solution est sans conteste accessible et très souvent moins onéreuse qu’un logiciel standard. Avec un programme personnalisé, vous vous libérez des contraintes inhérentes à la rigidité d’une solution du marché. Sans compter que le développement sur mesure vous évite d’être pollué par de nombreuses fonctionnalités dont vous n’aurez pas besoin ou qui ne seront pas adaptées spécifiquement à vos méthodes de travail. Chez Power Fleet, nous rationalisons les coûts de développement informatique grâce à des méthodes performantes et éprouvées.Les coûts sont non seulement maîtrisés, mais surtout, garantis. Il s’agit d’un investissement grâce auquel vos collaborateurs gagnent avant tout en productivité et qui assure la qualité et l’automatisation de vos process internes. </p>
<h1 class="onwan4">NOS 5 ÉTAPES DE DÉVELOPPEMENT </h1>

<h3 class="onwan8">1 – ÉTUDE GRATUITE DU PROJET</h3>
<p class="para8">Nous définissons avec vous les contours de votre projet par l’accompagnement à la rédaction de votre cahier des charges. Nos devis sont gratuits, complets et détaillés.
</p>
<h3 class="onwan8">
 2 – ANALYSE FONCTIONNELLE ET TECHNIQUE</h3>
<p class="para8">À ce stade, il s’agit de définir avec précision toutes les règles de gestion, le design ainsi que tous les écrans de votre future application.</p>
<h3 class="onwan8" >3 – DÉVELOPPEMENT</h3>
<p class="para8"> Nos analystes programmeurs développent votre logiciel dans les règles de l’art et dans le respect des conventions.</p>
<h3 class="onwan8">4 – TESTS</h3>
<p class="para8">Nous procédons aux tests unitaires et de charge lorsqu’il s’agit de récupérer vos propres données.</p>
<h3 class="onwan8">5 – LIVRAISON ET INSTALLATION</h3>
<p class="para8">Nous installons votre logiciel et vous accompagnons dans sa prise en main.</p>
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