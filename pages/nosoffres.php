<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>power fleet</title>

    <link rel="stylesheet" href="fichiercss/nosoffres.css">

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

<div class="offre1"> <h1  class="onwan1">Découvrez Nos Offres  </h1>
<h2 class="onwan2">PROMOTION FIN D'ANNÉE</h2>
<h3 class="onwan3">Réduction de 60%</h3>
<p class="para1">Votre véhicule peut vous fournir le maximum d’informations dont vous pouvez imaginez et bien plus encore. Avec l’aide d’un traceur GPS, vous pouvez communiquer promptement avec votre véhicule, gérer les détails techniques et améliorer ainsi votre sécurité et votre confort: – Localisation en temps réel – Zone de circulation pré-définit – Arrêt à distance – Limitation de vitesse – Batterie de secours – Serveur d’alerte SMS – Eco-conduite, etc.
Et encore d’autres fonctionnalités que vous pouvez partager avec votre véhicule.
</p>
<li class="arid1">Boitier GPS Original européen </li>
<li  class="arid1">Installation</li> 
<li  class="arid1">Abonnement POWERFLEET 1 an</li> 
<li  class="arid1"> Abonnement Carte SIM 1 an</li> 
<img class="image_pro" src="./statics/promotion power fleet.jpeg" alt="jjj">
   <a  class="button" href="./contact.php">Contactez maintenant</a>
   </div>

   
<div class="div2">
<h2 class="onwan12">JUIN 2019 - AOUT 2019</h2>
<h1 class="onwan13">50% Sur les application de Gestion commerciale</h1>
<p class="parag2">Obtenir votre logiciel de gestion commerciale en Cloud ou sur vos serveurs.
Fonctionnalités de bases :
Gestion CRM
Gestion de stock
Prospects / Client / Fournisseur
Commandes Clients / fournisseurs
Devis / Factures
Comptabilité / Caisse / Banque
Statistiques
</p>
<img  class="image2"src="./statics/pc.jpg" alt="pp">
<a  class="button" href="./contact.php">Contactez maintenant</a>
</div>

<div class="div3">
    <h1 class="onwan4">APPORTEZ UN AMI ET OBTENEZ UNE REMISE</h1>
     <h2 class="onwan5">Remise sur toute votre flotte</h2>
   <p class="parag4">Apportez un ami et après signature de contrat obtenez une 
                               remise sur vos abonnements

</p>
<img class="image3" src="./statics/pc2.jpg" alt="">
<a  class="button" href="./contact.php">Contactez maintenant</a>
</div>


<div class="div4"> 
    <h1 class="onwan7">DÉPÊCHEZ-VOUS! CONTACTEZ-NOUS AUJOURD'HUI ET OBTENEZ</h1>
    <h1 class="onwan8">Une réduction de 10% sur votre première
                                 commande
</h1>
<a  class="buttonn" href="./contact.php">Contactez nous</a>
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