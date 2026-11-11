<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./fichiercss/ventrmaterielle.css">
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

<img class="image" src="./statics/materiel informatique.jpg" alt="">
<p class="para1">Notre vaste gamme de produits informatiques comprend : des serveurs à la fine pointe de la technologie, le stockage et la sauvegarde des données (sur disque ou sur bande), des composantes réseau, des ordinateurs de bureau, des postes de travail, des tablettes et des périphériques d’impression. Quel que soit l’environnement informatique dans lequel vous travaillez, nous avons des solutions flexibles en matière de matériel. Nous déterminerons vos besoins pour ensuite vous offrir des produits à prix abordable conçus pour répondre aux exigences de votre entreprise.</p>
 <h1 class="onwan1">Nous offrons des produits HP Enterprise, HP inc, Lenovo et Dell, incluant :</h1>
<li class="one">Serveurs</li>
<li class="one">Stockage</li>
<li class="one">Postes de travail</li>
<li class="one">Ordinateurs de bureau, Ordinateurs portables, Tablettes</li>
<p class="para11">Power Fleet est aussi un partenaire de plusieurs sociétés de grandes tailles, offrant un service digne de confiance pour votre matériel informatique. Nous offrons les serveurs Lenovo de dernière génération et des solutions de stockage de données.</p>



<div class="slider">
	<div class="slide-track">
		<div class="slide">
			<img src="./statics/DELL.jpg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="./statics/HP.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="./statics/S LINK.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="./statics/KING STON.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="./statics/LENVO.JPG" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="./statics/SUMSUNG.jpg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="./statics/TOCHIBA.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
		</div>
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