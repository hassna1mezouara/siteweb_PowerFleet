<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POWER FLEET</title>
    <link rel="stylesheet" href="fichiercss/geolocalisation.css">

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

    <h1 class="onwan1">FONCTIONNALITÉS POWER FLEET</h1>

    <div class="slider">
        <div class="arrows">
            <a class="previous" href="#">&#xf053;</a>
            <a class="next" href="#">&#xf054;</a>
        </div>
        <div class="slides">
            <div class="slide active blue" >
                <h2 class="on">1. TEMPS RÉEL</h2>
                <p>Visualiser les déplacements de vos véhicules en temps réel (ordinateur, smartphone, …)</p>
            </div>
            <div class="slide white" >
                <h2 class="on">2. HISTORIQUES 6 MOIS</h2>
                <p>Visualiser l’historique des dernières positions (6 mois à 1 an sur demande) de chaque véhicule</p>
            </div>
            <div class="slide red" >
                <h2 class="on">3. ALERTES AUTOMATIQUES</h2>
                <p>Déclencher une alerte automatique : Excès de vitesse, géozonning, service, débranchement, …</p>
            </div>
            <div class="slide blue" >
                <h2 class="on">4. DÉLAI MISSION</h2>
                <p>Connaitre le temps passé de chaque véhicule sur chacune de vos zones géographiques</p>
            </div>
            <div class="slide white" >
                <h2 class="on">5. RAPPORTS AUTOMATIQUES</h2>
                <p>Recevoir par email des rapports des déplacements de vos véhicules</p>
            </div>
            <div class="slide red" >
                <h2 class="on">6. EXPORT EXTERNE</h2>
                <p>Exporter les informations et les rapports vers des applications tierces : Excel (.xls), PDF, HTML, …</p>
            </div>
            <div class="slide blue" >
                <h2 class="on">7. IMPORT OBJETS</h2>
                <p>Créer/importer des points d’intérêt, zones, et routes sur la carte</p>
            </div>
            <div class="slide white" >
                <h2 class="on">8. COÛT THÉORIQUE DE CONSOMMATION</h2>
                <p>L’application calcule désormais le coût du carburant consommé théoriquement</p>
            </div>
            <div class="slide red" >
                <h2 class="on">9. SUIVI TEMPÉRATURE</h2>
                <p>Capteur de température à relier à la balise GPS, idéal pour le transport frigorifique</p>
            </div>
            <div class="slide blue" >
                <h2 class="on">10. CONSOMMATION DE CARBURANT</h2>
                <p>Consommation réelle du carburant en se basant sur le CANBUS ou les Jauges électroniques et numériques</p>
            </div>
            <div class="slide white" >
                <h2 class="on">11. GESTION COMMERCIALE</h2>
                <p>Suivre les tâches réalisées par les commerciaux en temps réel</p>
            </div>
            <div class="slide red" >
                <h2 class="on">12. MISSIONS ET PLANNING DES TÂCHES</h2>
                <p>Suivi des missions et des tâches, affectation des tâches aux chauffeurs, assurer le suivi des missions</p>
            </div>
            <div class="slide white" >
                <h2 class="on">13. GESTION DES DÉPENSES</h2>
                <p>Acquisition des véhicules et suivi des crédits, maintenances, consommations de carburant, visites techniques, assurances, vignettes, autorisations de circulation, vidange, accidents</p>
            </div>
            <div class="slide red" >
                <h2 class="on">14. POWERFLEET API</h2>
                <p>Utilisation des données de la plateforme POWERFLEET avec vos systèmes d’information internes grâce aux web services</p>
            </div>
        </div>
        <div class="bullets"></div>
    </div>

    <script>
    var $slider = $(".slider"), $bullets = $(".bullets");

    function calculateHeight() {
        var height = $(".slide.active").outerHeight();
        $slider.height(height);
    }

    $(window).resize(function() {
        calculateHeight();
        clearTimeout($.data(this, 'resizeTimer'));
    });

    function resetSlides() {
        $(".slide.inactive").removeClass("inactiveRight").removeClass("inactiveLeft");
    }
    
    function gotoSlide($activeSlide, $slide, className) {
        $activeSlide.removeClass("active").addClass("inactive " + className);
        $slide.removeClass("inactive").addClass("active");
        calculateHeight();
        resetBullets();
        setTimeout(resetSlides, 300);
    }
    $(".next").on("click", function() {
        var $activeSlide = $(".slide.active"),
            $nextSlide = $activeSlide.next(".slide").length != 0 ? $activeSlide.next(".slide") : $(".slide:first-child");
        console.log($nextSlide);
        gotoSlide($activeSlide, $nextSlide, "inactiveLeft");
    });

    $(".previous").on("click", function() {
        var $activeSlide = $(".slide.active"),
            $prevSlide = $activeSlide.prev(".slide").length != 0 ? $activeSlide.prev(".slide") : $(".slide:last-child");
        gotoSlide($activeSlide, $prevSlide, "inactiveRight");
    });

    $(document).on("click", ".bullet", function() {
        if ($(this).hasClass("active")) {
            return;
        }
        var $activeSlide = $(".slide.active");
        var currentIndex = $activeSlide.index();
        var targetIndex = $(this).index();
        console.log(currentIndex, targetIndex);
        var $theSlide = $(".slide:nth-child(" + (targetIndex + 1) + ")");
        gotoSlide($activeSlide, $theSlide, currentIndex > targetIndex ? "inactiveRight" : "inactiveLeft");
    });

    function addBullets() {
        var total = $(".slide").length,
            index = $(".slide.active").index();
        for (var i = 0; i < total; i++) {
            var $bullet = $("<div>").addClass("bullet");
            if (i == index) {
                $bullet.addClass("active");
            }
            $bullets.append($bullet);
        }
    }
    function resetBullets() {
        $(".bullet.active").removeClass("active");
        var index = $(".slide.active").index() + 1;
        console.log(index);
        $(".bullet:nth-child(" + index + ")").addClass("active");
    }
    addBullets();
    calculateHeight();
    </script>

   

<div class="containerr">
        <div class="section">
            <h2>VOS DÉFIS</h2>
            <p>Gérer des véhicules et des équipes sur le terrain implique une quantité de temps et de ressources considérable. Car vous devez veiller à ce que toutes les tâches sur le terrains soient effectuées et garantir un service optimal aux clients. À cela s'ajoute le stress dû au manque d'information quand vous ignorez où se trouvent vos véhicules.</p>
        </div>
        <div class="section">
            <h2>NOS SOLUTIONS</h2>
            <p>La géolocalisation avec PowerFleet vous permet d'éliminer le stress dû au manque d'information et vous redonne le contrôle sur votre flotte. Enfin, vous pouvez suivre vos véhicules sur Internet depuis votre poste de travail et vous assurez que le service est assuré auprès de vos contractants sur le terrain. Au-dessus de tout: Une tranquillité d'Esprit qui vous dégage du temps pour des activités plus rémunératrices!</p>
        </div>
        <div class="section">
            <h2>VOS DEMANDES</h2>
            <p>C’est normal: vous voulez de faciliter le travail de votre équipe dispatching et de répartir efficacement vos équipes mobiles sur les chantiers et les interventions qui viennent s’ajouter au fur et à mesure de la journée. Surtout, vous souhaitez savoir ce qu’il se passe en votre absence. C’est le challenge de beaucoup de gestionnaires. Fort heureusement, nous vous comprenons.</p>
        </div>
        <div class="section">
            <h2>NOS PROMESSES</h2>
            <p>Sécurité et productivité! Voilà notre engagement en matière géolocalisation. Nous vous aidons à reprendre votre flotte en main et à garder un oeil sur vos activités sur la route. De cette façon vous pouvez focaliser toute votre attention sur le coeur de votre activité à 100%.</p>
        </div>
    </div>


    <h2 class="onn">NOS BOITIERS GPS</h2>



    <section>
    <div class="container">
        <div class="carousel">
            <input type="radio" name="slides" checked="checked" id="slide-1">
            <input type="radio" name="slides" id="slide-2">
            <input type="radio" name="slides" id="slide-3">
            <input type="radio" name="slides" id="slide-4">
            <input type="radio" name="slides" id="slide-5">
            <input type="radio" name="slides" id="slide-6">
            <ul class="carousel__slides">
                <li class="carousel__slide">
                    <figure>
                        <div>
                            <img  class="image"src="./statics/reptela2.png" alt="">
                        </div>
                        <figcaption>
                        Ruptela - Lituanie -
                            <span class="credit">Photo: BOITIERS GPS</span>
                        </figcaption>
                    </figure>
                </li>
                <li class="carousel__slide">
                    <figure>
                        <div>
                            <img  class="image" src="./statics/ruto2.png" alt="">
                        </div>
                        <figcaption>
                        Teltonika - Lituanie -
                            <span class="credit">Photo: BOITIERS GPS</span>                            
                        </figcaption>
                    </figure>
                </li>
                <li class="carousel__slide">
                    <figure>
                        <div>
                            <img  class="image" src="./statics/navtelesom-signal-s-2551.png" alt="">
                        </div>
                        <figcaption>
                        Navtelecom -Russie-
                            <span class="credit">Photo:  BOITIERS GPS</span>                            
                        </figcaption>
                    </figure>
                </li>
                <li class="carousel__slide">
                    <figure>
                        <div>
                            <img  class="image" src="./statics/gpstrackers.png" alt="">
                        </div>
                        <figcaption>
                        Xirgo Global -Lituanie-
                            <span class="credit">Photo: BOITIERS GPS</span>                            
                        </figcaption>
                    </figure>
                </li>
                <li class="carousel__slide">
                    <figure>
                        <div>
                            <img  class="image" src="./statics/xexun.png" alt="">
                        </div>
                        <figcaption>
                        Xexun et Coban - Chine -
                            <span class="credit">Photo: BOITIERS GPS</span>                            
                        </figcaption>
                    </figure>
                </li>
                <li class="carousel__slide">
                    <figure>
                        <div>
                            <img  class="image" src="./statics/6037aa32284af.png" alt="">
                        </div>
                        <figcaption>
                        Concox -Chine-
                            <span class="credit">Photo:  BOITIERS GPS</span>                            
                        </figcaption>
                    </figure>
                </li>
            </ul>    
            <ul class="carousel__thumbnails">
                <li>
                    <label for="slide-1"><img src="./statics/reptela2.png" alt=""></label>
                </li>
                <li>
                    <label for="slide-2"><img src="./statics/ruto2.png" alt=""></label>
                </li>
                <li>
                    <label for="slide-3"><img src="./statics/navtelesom-signal-s-2551.png" alt=""></label>
                </li>
                <li>
                    <label for="slide-4"><img src="./statics/gpstrackers.png" alt=""></label>
                </li>
                <li>
                    <label for="slide-5"><img src="./statics/xexun.png" alt=""></label>
                </li>
                <li>
                    <label for="slide-6"><img src="./statics/6037aa32284af.png" alt=""></label>
                </li>
            </ul>
        </div>
    </div>
</section>

<h1 class="onnn">SOLUTIONS PAR SECTEUR</h1>


  
<div class="centre">
    <!-- Flickity HTML init -->
    <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
    <div class="gallery-cell"><img src="./statics/transport.jpg" alt="Transport"><h2 class="onn">Transport</h2></div>
    <div class="gallery-cell"><img src="./statics/gouvernement.jpg" alt="Gouvernement"><h2 class="onn">Gouvernement</h2></div>
    <div class="gallery-cell"><img src="./statics/collecte.jpg" alt="collecte"><h2 class="onn">Collecte</h2></div>
    <div class="gallery-cell"><img src="./statics/ambulance.jpg" alt="ambulance"><h2 class="onn">Ambulances</h2></div>
    <div class="gallery-cell"><img src="./statics/interventions.jpg" alt="interventions"><h2 class="onn">Interventions</h2></div>
    <div class="gallery-cell"><img src="./statics/travauxpup.jpg" alt="Travaux Publics"><h2 class="onn">Travaux Publics</h2></div>
    <div class="gallery-cell"><img src="./statics/locationvoiture.png" alt="Location Voiture"><h2 class="onn">Location Voiture</h2></div>
    <div class="gallery-cell"><img src="./statics/transports.jpg" alt="Transport Scolaire"><h2 class="onn">Transport Scolaire</h2></div>
    <div class="gallery-cell"><img src="./statics/annimausx.jpg" alt="Animaux"><h2 class="onn">Animaux</h2 ></div>
    <div class="gallery-cell"><img src="./statics/personnes.jpg" alt="Personnes"><h2 class="onn">Personnes</h2></div>
    <div class="gallery-cell"><img src="./statics/taxis.png" alt="Taxis"><h2 class="onn">Taxis</h2></div>
  </div>
  </div>
  
  <!-- Flickity JS -->
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>


<h1 class="onnn">NOTRE PACKAGE</h1>
<div class="package"><p class="para1">Le système de géolocalisation POWERFLEET a été spécialement configuré pour les réseaux marocains et internationales. Désormais, vous aussi vous pouvez profiter d’un système de géolocalisation complet, efficace et totalement innovant!</p></div>


<section class="services">
        <div class="service">
           
            <h2>Balise GPS</h2>
            <p>GPS Tracker, traceur GPS, boîtier GPS, boîte noire, nous avons la balise GPS qui correspond à vos besoins selon l’activité de vos équipes mobiles sur la route.</p>
        </div>
        <div class="service">
           
            <h2>Installation</h2>
            <p>Après avoir choisi votre type de balise GPS, nous nous occupons de l’installation. Toutefois, certains boîtiers (Plug & Play et Aimantés) ne nécessitent pas l’intervention d’un technicien sur votre véhicule.</p>
        </div>
        <div class="service">
            
            <h2>Connexion Réseau</h2>
            <p>Nos boîtiers de géolocalisation communiquent en permanence sur le réseau 3G/4G. Les données satellites sont envoyées par la balise GPS via un accès sécurisé vers nos serveurs.</p>
        </div>
        <div class="service">
            
            <h2>Plateforme et Application</h2>
            <p>Notre plateforme web et nos applications mobiles vous permettent de gérer vos véhicules à distance en toute convivialité. Grâce au cloud, profitez d’un accès sécurisé depuis n’importe quel appareil.</p>
        </div>
        <div class="service">
            
            <h2>Garantie Exclusive</h2>
            <p>Dans le cas où le Traceur GPS que nous vous avons installé est volé, nous vous en fournissons un nouveau! Une garantie de tranquillité ultime que seul Power Fleet peut vous offrir.</p>
        </div>
        <div class="service">
            rts">
            <h2>Conseils d'Experts</h2>
            <p>Nous vous assurons des conseils clairs afin de vous guider vers la meilleure solution en fonction de votre activité pour le suivi GPS de vos voitures, camionnettes et camions.</p>
        </div>
    </section>


    
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
