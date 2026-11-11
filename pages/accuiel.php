<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POWER FLEET</title>
    <link rel="stylesheet" href="fichiercss/acuiell.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Bona+Nova+SC:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body>
    <header  id="header" class="fixed-header ">
        <div class="aa">
        <img class="image-logo" src="./statics/logo.png" alt="..">
           <a class="nsaybohadchi" href="#accueil.php" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'accueil.php') echo 'active'; ?>">
                ACCUEIL
            <a  class="nsaybohadchi"href="./powerfleet.php" class="<?php if(!isset($_GET['page']) || $_GET['page'] == './powerfleet.php') echo 'active'; ?>">
                 POWER FLEET
            </a>
            <a class="nsaybohadchi" href="./nosservices.php" class="<?php if(isset($_GET['page']) && $_GET['page'] == './services.php') echo 'active'; ?>">
                 NOS SERVICES
            </a>
            <a class="nsaybohadchi" href="./blogs.php" class="<?php if(isset($_GET['page']) && $_GET['page'] == './blogs.php') echo 'active'; ?>">
               BLOGS
            </a>
          
         
            <a  class="nsaybohadchi" href="./faq.php" class="<?php if(isset($_GET['page']) && $_GET['page'] == './faq.php') echo 'active'; ?>">
                FAQ
            </a>
            <a class="nsaybohadchi"  href="./contact.php" class="<?php if(isset($_GET['page']) && $_GET['page'] == './contact.php') echo 'active'; ?>">
                 CONTACT
            </a>
            <a  class ="espaceclient" href="./espaceclient.php"> espace clients</a>
            <a  class ="espaceclient" href="./aide.php">aide</a>
        </div>
        </header>
<script>window.onscroll = function() { fixHeader(); };
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

<div class="fond1">
<h2 class="hh2"> Optimisez Votre Gestion de Flotte avec Power Fleet</h2>
<h3 class="hh3">Des solutions avancées de géolocalisation et de développement de logiciels 
pour une efficacité et une sécurité maximales.</h3>
<img class="imagecamion" src="./statics/camion mieux.jpeg" alt="camion" >
     <a href="./powerfleet.php" class="custom-button">Plus de détails sur Power Fleet</a>  
</div>

<h1 class="nosservices">nos services</h1>
    <div class="card-list">
        <a href="./geolocalisation.php" class="card-item">
            <img src="./statics/geolocalisation.png" alt="Card Image">
            <h3>Géolocalisation </h3>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
        <a href="./creationSiteWeb.php" class="card-item">
            <img src="./statics/creation des site web.png" alt="Card Image">
            <h3>Création des sites web</h3>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
        <a href="./logicielsSurMesur.php" class="card-item">
            <img src="./statics/logiciel sur mesur.png" alt="Card Image">
            <h3>Logiciel sur mesure</h3>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>

        <a href="./ventrmaterielle.php" class="card-item">
            <img src="./statics/materiel informatique.jpg" alt="Card Image">
            <h3>Matériels informatiques</h3>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
        <a href="./infographeiDesign.php" class="card-item">
            <img src="./statics/infographei et design.png" alt="Card Image"> 
            <h3>Infographie et design</h3>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
        <a href="./formationProf.php" class="card-item">
         <img src="./statics/formation proffessionnelle.jpg" alt="Card Image">
            <h3>Formation professionnelle</h3>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
    </div>







    
<div class="wrapperr"> 
  <div class="containerr">
    <span class="num" data-val=2500>0000</span>
    <span class="text">Véhicules installés</span>
  </div>
  <div class="containerr">
  
    <span class="num" data-val=520>000</span>
    <span class="text">Clients Satisfaits</span>
  </div>
  <div class="containerr">
    
    <span class="num" data-val=120>000</span>
    <span class="text">Projets Réalisés</span>
  </div>
</div>
<script>
let valueDisplays = document.querySelectorAll(".num");//sélectionne tous les éléments ayant la classe .num
let interval = 4000;  //Durée totale de l'animation 

valueDisplays.forEach((valueDisplay) => {
  let startValue = 0;
  let endValue = parseInt(valueDisplay.getAttribute("data-val"));
  let duration = Math.floor(interval / endValue);
  let counter = setInterval(function () {
    startValue += 1;
    valueDisplay.textContent = startValue;
    if (startValue == endValue) {
      clearInterval(counter);
    }
  }, duration);
});
</script>






<div class="nosatouts">
    <h1 class="atous"> nos atouts</h1>
    <h2 class="exa"> Plus de 10 Ans d'Expérience</h2>
    <ul class="couleur">Une présence sur le marché marocain depuis 2009.</ul>
    <h2 class="exa">Experts dans le Domaine</h2>
    <ul  class="couleur">Une maîtrise de la solution allant de la partie logicielle à la partie matérielle.</ul>
    <h2 class="exa"> Garantie & SAV de Qualité</h2>
    <ul  class="couleur">Une garantie d’une meilleure qualité et un meilleur SAV au Maroc.</ul>
    <h2 class="exa"> Flexibilitéé & Flexibilité</h2>
    <ul  class="couleur">Une possibilité de s’adapter à vos besoins les plus spécifiques.</ul>
</div>

<div class="slider owl-carousel">
         <div class="card">
            <div class="img">
               <img src="./statics/sans vsage 2.png" alt="">
            </div>
            <div class="content">
               <div class="title">
               TAREQ BENDIA
               </div>
               <div class="sub-title">
               Ambulancier
               </div>
               <p>
                
               《Avec  Power Fleet ,nous savons exactement où se trouvent chacun de nos véhicules et sommes capable d 'intervenir  de façon encore plus rapide et efficace en cas d'Urgence .》
               </p>
            </div>
         </div>
         <div class="card">
            <div class="img">
               <img src= "./statics/sans vsage 2.png" alt="">
            </div>
            <div class="content">
               <div class="title">
               Patrick
               </div>
               <div class="sub-title">
               Société de livraison
               </div>
               <p>
               « Nous avons aussi pu diminuer les heures que nous passions sur la route en optimisant tous nos trajets, réduisant nos factures de carburants, les réparations sur nos véhicules et les risques d’accidents. »
               </p>
            </div>
         </div>
         <div class="card">
            <div class="img">
               <img src="./statics/sans vsage 2.png" alt="">
            </div>
            <div class="content">
               <div class="title">
               Wafi Mohammed
               </div>
               <div class="sub-title">
               Transporteur
               </div>
               <p>
               « Nous avons estimé qu’en allouant quinze minutes de perte de temps par véhicule par jour et qu’en configurant le limiteur de vitesse à 120 km/h et le coupe-moteur à 10 minutes de marche au ralenti, nous économiserions 300 000 dhs sur une période de 2 ans. 
               </p>
            </div>
         </div>
         <div class="card">
            <div class="img">
               <img src="./statics/sans vsage 2.png" alt="">
            </div>
            <div class="content">
               <div class="title">
               Abderrahmane
               </div>
               <div class="sub-title">
               Expert comptable
               </div>
               <p>
               Power Fleet, grâce à une capacité d’intervention rapide , assure parfaitement la maintenance curative et préventive de nos postes de travail et de notre réseau internet qui permet aujourd’hui à nos équipes comptables d’émettre plus de 10000 factures clients par an. «
               </p>
              
            </div>
         </div>
      </div>
      <script>
         $(".slider").owlCarousel({
           loop: true,
           autoplay: true,
           autoplayTimeout: 2000, //2000ms = 2s;
           autoplayHoverPause: true,
         });
      </script>















<div class="parel">
<h2 class="parlezavec">Parlez de nous si vous êtes satisfait </h2>
<h3 class="parlezavecn" > et parlez avec nous si vous êtes insatisfait</h3>
<a href="./contact.php" class="botton">parlez avec nous!</a> 
</div>





<div class="video-container">
    <div class="vidio">
        <video class="vid" id="myVideo" width="640" height="360" controls>
            <source src="./statics/vidio.mp4" type="video/mp4">
        </video>
        </div>
    </div>

<script>
        document.getElementById('myVideo').addEventListener('click', function() {
            if (this.requestFullscreen) {
                this.requestFullscreen();
            } else if (this.mozRequestFullScreen) { // Firefox
                this.mozRequestFullScreen();
            } else if (this.webkitRequestFullscreen) { // Chrome, Safari and Opera
                this.webkitRequestFullscreen();
            } else if (this.msRequestFullscreen) { // IE/Edge
                this.msRequestFullscreen();
            }
        });
    </script>





<div class="h1">
<h1 class="nosact">NOS ACTUALITÉS ET BLOGS</h1>
</div>

<div class="act"> 
<div calss="espace" > <img class ="imageactualite"  class=" one"src="./statics/immigration.jpeg" alt="ii"> 
 <img class ="imageactualite"src="./statics/siteweb.png" alt="i">
<img class ="imageactualite" src="./statics/comment.jpg" alt="i">  
<img class ="imageactualite" src="./statics/carburant.jpg" alt="i"> 
</div>
<div  class="horizontal-paragraphs" >
<h3 class="parag">LUTTER CONTRE 
    L’IMMIGRATION 
    CLANDESTINE</h3>
<h3 class="parag">COMMENT RÉALISER UN 
    SITE WEBRÉUSSI 
    EN 10 ÉTAPES ?</h3>
<h3 class="parag">COMMENT CHOISIRUNE
     SOLUTION DE GESTION DE LA FLOTTE ?</h3>
<h3 class="parag">LA GESTION DE CARBURANT</h3>
</div>
<a href="./blogs.php" class="botton">voir plus</a> 
</div>


<section id="slideshow">
<h1 class="onwan">NOS CLIENTS</h1>
      <div class="entire-content">
        <div class="content-carrousel">
          <figure class="shadow"><img src="./statics/c3.png"/></figure>
          <figure class="shadow"><img src= "./statics/c7.png " /></figure>
          <figure class="shadow"><img src="./statics/logo ghoza.png" /></figure>
          <figure class="shadow"><img src="./statics/logo asz.png"/></figure>
          <figure class="shadow"><img src="./statics/logo asti.jpeg" /></figure>
          <figure class="shadow"><img src="./statics/logo de jhl.png" /></figure>
          <figure class="shadow"><img src="./statics/logo-4.png" /></figure>
          <figure class="shadow"><img src="./statics/c4.png" /></figure>
          <figure class="shadow"><img src="./statics/c6.png" /></figure>
    </div>
  </div>
  </section>


    














<div class="promo-container">
        <div class="promo-item">
            <img  class="imag"src="./statics/geolocalisation.png" alt="Géolocalisation">
            <div class="promo-text">
                <h2>30% de réduction pour tous les produits et services de géolocalisation</h2>
            </div>
        </div>
        <div class="promo-item">
            <img src="./statics/cloud gestion.jpeg" alt="Cloud de Gestion">
            <div class="promo-text">
                <h2>40% de réduction pour notre plateforme cloud de gestion</h2>
            </div>
        </div>
        <div class="promo-item">
            <img src="./statics/amis.jpg" alt="Apportez un Ami">
            <div class="promo-text">
                <h2>Apportez un ami et obtenez une remise</h2>
            </div>
        </div>
    </div>


<div class="devis">
    <div  class="depechez">DÉPÊCHEZ-VOUS! CONTACTEZ-NOUS AUJOURD'HUI ET OBTENEZ</div>
    <h2 class="rapidement">Votre devis rapidement</h2>
    <a href="./contact.php" class="botton">Devis gratuit</a> 
</div>


<div class="container">
        <div class="left-section">
            <img src="./statics/.png" alt="PowerFleet Logo">
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






















































<script>

let currentSlide = 0;
        const slides = document.querySelectorAll('.testimonial-slide');
        const totalSlides = slides.length;

        document.querySelector('.next').addEventListener('click', () => {
            changeSlide(currentSlide + 1);
        });

        document.querySelector('.prev').addEventListener('click', () => {
            changeSlide(currentSlide - 1);
        });

        function changeSlide(index) {
            slides[currentSlide].style.display = 'none';
            currentSlide = (index + totalSlides) % totalSlides;
            slides[currentSlide].style.display = 'block';
        }

        // Initial display
        changeSlide(0);
</script>


</body>
</html>

