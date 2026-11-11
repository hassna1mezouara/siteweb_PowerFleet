<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>power fleet</title>

    <link rel="stylesheet" href="fichiercss/nosimages.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Bona+Nova+SC:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

</head>
<body>
<header class="fixed-header">
    
    <div class="aa">
    <img class="image-logo" src="./statics/logo.png" alt="..">
       
        <a class="nsaybohadchi" href="./accuiel.php" class="<?php if(isset($_GET['page']) && $_GET['page'] == 'accueil.php') echo 'active'; ?>">
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
      
        <a  class="nsaybohadchi" href="e=./faq.php" class="<?php if(isset($_GET['page']) && $_GET['page'] == './faq.php') echo 'active'; ?>">
            FAQ
        </a>
        <a class="nsaybohadchi"  href="?page=./contact.php" class="<?php if(isset($_GET['page']) && $_GET['page'] == './contact.php') echo 'active'; ?>">
             CONTACT
        </a>
        <a  class ="espaceclient" href="page" class="hassna"> espace clients</a>
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

    
</body>
</html>