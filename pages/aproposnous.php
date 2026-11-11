<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>power fleet</title>

    <link rel="stylesheet" href="fichiercss/aproposnou.css">

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
<figure class="snip1477">
  <img  class="image"src="./statics/technolgyy.jpg" alt="sample38" />
  <div class="title">
    <div>
      <h2>power fleet</h2>
      <p> une société</p>
    </div>
  </div>
  <figcaption>
    <p class="para"> Nous sommes une société créée après une longue expérience dans le domaine de la géolocalisation,

de la gestion de la flotte, et de développement informatique.

Nous sommes concepteur, développeur et fournisseur des solutions de géolocalisation et de

développement au Maroc.

Notre expérience dans la mise en place de solutions de géolocalisation fiables, ainsi que notre souci

d’adapter les besoins de nos clients à leur contexte macroéconomique respectif, nous facilite une présence

sur le marché.

Enfin, une politique commerciale orientée vers l’amélioration continue, 

et une prise en charge personnalisée de la clientèle, placent nos partenaires au centre de nos préoccupations.</p>
  </figcaption>
  <a href="#"></a>
</figure>
<script>/* Demo purposes only */
$(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);</script>
<h1 class="onwan">NOS EXPÉRIENCES</h1>
<img  class="atouts"src="./statics/lwa atouts-Photoroom.png" alt="">
 <p class="paratous">Une maîtrise complète de la solution allant de la partie 
logicielle à la partie matérielle, qui permet :Une optimisation
 des performances;Une optimisation du prix; Une garantie d’une meilleure qualité; Une possibilité de s’adapter à vos besoins les plus spécifiques; Cette double compétence « maitrise technique » et « proximité 
client » nous permet de vous accompagner
 pour adapter nos solutions à vos besoins :
 « L’imagination de nos clients est notre seule limite »</p>
</div>
<center>
<div id="SkillBox">
       
        <img src="https://2.bp.blogspot.com/--aPlnH6X1YA/UEf7yeJ3gGI/AAAAAAAATgw/TgMK9IVzipk/s1600/Skills%2B-%2BPawan%2BMall.png" alt="Skill - Pawan Mall" />
  <div class="SkillBar">
    <div id="Skill-HTML"> 
      <span class="Skill-Area ">Géolocalisation des véhicules</span>
      <span class="PercentText ">11 ans</span>
    </div>
  </div>
  
  <div class="SkillBar">
    <div id="Skill-CSS">
      <span class="Skill-Area ">Création des sites web </span>
      <span class="PercentText ">10 ans</span>
    </div>
  </div>

  <div class="SkillBar">
    <div id="Skill-CSS">
      <span class="Skill-Area ">Logiciels sur mesures</span>
      <span class="PercentText ">10 ans</span>
    </div>
  </div>
 
  
  <div class="SkillBar">
    <div id="Skill-XML">
      <span class="Skill-Area ">Fomations professionnelles  </span>
      <span class="PercentText ">5 ans</span>
    </div>
  </div>
  <div class="SkillBar">
    <div id="Skill-XML">
      <span class="Skill-Area ">Impression et infographie  </span>
      <span class="PercentText ">5 ans </span>
    </div>
  </div>
  
    <div class="SkillBar">
    <div id="Skill-C">
      <span class="Skill-Area ">Matériels informatiques</span>
      <span class="PercentText ">2 ans</span>
    </div>
  </div>
</div>
</center>

<h1 class="onwan">NOS RÉALISATIONS EN PHOTOS</h1>
<h2 class="onwann">Voici des photos qui illustrent 
certains travaux et prestations
 de service que nous avons réalisés.</h2>

  <div id="warp">
  <ul id="gallery-container">
    <li class="gallery-item">
      

      <input checked="checked" type="radio" name="gallery-list" class="gallery-selector" value="1.jpg" id="gallery-item1" />
      <img src="./statics/image 1.png" class="gallery-fullsize" alt="location bateau 135ch" />
      <label for="gallery-item1" class="gallery-label">
        <img src="./statics/image 1.png" class="gallery-preview" alt="location bateau 135ch" />
      </label>
    </li>
    <li class="gallery-item">

      <input type="radio" name="gallery-list" class="gallery-selector" value="2.jpg" id="gallery-item2" />
      <img src="./statics/image2.png " class="gallery-fullsize" alt="location bateau 135ch" />
      <label for="gallery-item2" class="gallery-label">
        <img src="./statics/image2.png " class="gallery-preview" alt="location bateau 135ch" />
      </label>
    </li>
    <li class="gallery-item">

      <input type="radio" name="gallery-list" class="gallery-selector" value="3.jpg" id="gallery-item3" />
      <img src="./statics/pfcompta3.png" class="gallery-fullsize" alt="location bateau 135ch" />
      <label for="gallery-item3" class="gallery-label">
        <img src="./statics/pfcompta3.png" class="gallery-preview" alt="location bateau 135ch" />
      </label>
    </li>
    <li class="gallery-item">

      <input type="radio" name="gallery-list" class="gallery-selector" value="4.jpg" id="gallery-item4" />
      <img src="./statics/pfcompta4.png" class="gallery-fullsize" alt="location bateau 135ch" />
      <label for="gallery-item4" class="gallery-label">
        <img src="./statics/pfcompta4.png" class="gallery-preview" alt="location bateau 135ch" />
      </label>
    </li>
    <li class="gallery-item">

      <input type="radio" name="gallery-list" class="gallery-selector" value="5.jpg" id="gallery-item5" />
      <img src="./statics/pfcompta5.png" class="gallery-fullsize" alt="location bateau 135ch" />
      <label for="gallery-item5" class="gallery-label">
        <img src="./statics/pfcompta5.png" class="gallery-preview" alt="location bateau 135ch" />
      </label>
    </li>
    <li class="gallery-item">

      <input type="radio" name="gallery-list" class="gallery-selector" value="6.jpg" id="gallery-item6" />
      <img src="./statics/1.png" class="gallery-fullsize" alt="location bateau 135ch" />
      <label for="gallery-item6" class="gallery-label">
        <img src="./statics/1.png" class="gallery-preview" alt="location bateau 135ch" />
      </label>
    </li>
    <li class="gallery-item">

      <input type="radio" name="gallery-list" class="gallery-selector" value="7.jpg" id="gallery-item7" />
      <img src="./statics/5.png"  class="gallery-fullsize" alt="location bateau 135ch" />
      <label for="gallery-item7" class="gallery-label">
        <img src="./statics/5.png" class="gallery-preview" alt="location bateau 135ch" />
      </label>
    </li>

    <li class="gallery-item">

<input type="radio" name="gallery-list" class="gallery-selector" value="7.jpg" id="gallery-item7" />
<img src="./statics/6.jpg" class="gallery-fullsize" alt="location bateau 135ch" />
<label for="gallery-item7" class="gallery-label">
  <img src="./statics/6.jpg" class="gallery-preview" alt="location bateau 135ch" />
</label>
</li>


<li class="gallery-item">

<input type="radio" name="gallery-list" class="gallery-selector" value="7.jpg" id="gallery-item7" />
<img src="./statics/7.png" class="gallery-fullsize" alt="location bateau 135ch" />
<label for="gallery-item7" class="gallery-label">
  <img src="./statics/7.png" class="gallery-preview" alt="location bateau 135ch" />
</label>
</li>

  </ul>
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
  
  
        