<?php

if (isset($_POST['boutton'])) {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $unm = $_POST["username"];
        $pass = $_POST["password"];

        // Connexion à la base de données
        $servername = "localhost";
        $username_db = "root";
        $password_db = "";
        $dbname = "contact";
        $ereure = "";

        $conn = new mysqli($servername, $username_db, $password_db, $dbname);

        // Vérifiez la connexion
        if ($conn->connect_error) {
            die("Échec de la connexion : " . $conn->connect_error);
        }

        // Échappez les variables pour éviter les injections SQL
        $unm = $conn->real_escape_string($unm);
        $pass = $conn->real_escape_string($pass);

        // Requête SQL corrigée
        $req = mysqli_query($conn, "SELECT * FROM users WHERE username = '$unm' AND password = '$pass'");

        // Vérifiez si la requête a réussi
        if ($req) {
            $num_ligne = mysqli_num_rows($req);
            if ($num_ligne > 0) {
                header("location:login.php");
            } else {
                $ereure = "Nom d'utilisateur ou mot de passe incorrect !";
            }
        } else {
            $ereure = "Erreur dans la requête SQL.";
        }

        // Fermez la connexion
        $conn->close();
    }
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Connexion chez Power Fleet</title>
  <link rel="stylesheet" href="./fichiercss/espaceclient.css" />
</head>
<body>
  <div class="login_form">
    <!-- Login form container -->
    <form action="" method="POST">
    <img  class="image33"src="./statics/logo.png" alt="">
      <h3>Bienvenue chez Power Fleet</h3>
     
      <div class="login_option"></div>
      <!-- Login option separator -->
      <p class="separator"></p>

      <!-- Nom d'utilisateur input box -->
      <div class="input_box">
        <label for="username">Nom de utilisateur</label>
        <input type="text" id="username" name="username" placeholder="Entrez votre nom de utilisateur" required />
      </div>

      <!-- Mot de passe input box -->
      <div class="input_box">
        <div class="password_title">
          <label for="password">Mot de passe</label>

        </div>
        <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required />
      </div>

      <!-- Affichage du message d'erreur s'il y en a un -->
      <?php if (isset($ereure))
      echo $ereure;
      ?>

      <!-- Login button -->
      <button type="submit"  name ="boutton">Se connecter </button>
    </form>
  </div>
</body>
</html>
