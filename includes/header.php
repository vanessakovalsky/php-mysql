<?php include_once('variables.php');

/* On teste les différents navigateurs */

if(strpos($_SERVER['HTTP_USER_AGENT'],'Trident') || strpos($_SERVER['HTTP_USER_AGENT'],'Edge')){
  $navigateur_utilise = 'Internet Explorer';
}
elseif(strpos($_SERVER['HTTP_USER_AGENT'],'Firefox')){
  $navigateur_utilise = 'Mozilla Firefox';
}
elseif(strpos($_SERVER['HTTP_USER_AGENT'],'Chrome')){
  $navigateur_utilise = 'Google Chrome';
}
else {
  $navigateur_utilise = 'Inconnu';
}

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $titre_application; ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="css/kingoludo.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><?php echo $titre_application; ?></a>
        <?php
        if (isset($_COOKIE['pseudo']) && !empty($_COOKIE['pseudo'])) {
         ?>
        <span class="navbar-brand">Bienvenue <?php echo htmlentities($_COOKIE['pseudo']);?>.</span>
        <?php } ?>
        <span class="navbar-brand">Votre navigateur est <?php echo $navigateur_utilise;?>.</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php"><?php echo $nom_home; ?>
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="liste-jeux.php"><?php echo $nom_liste;?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="creer_jeu.php"><?php echo $nom_creer;?></a>
            </li
            <li class="nav-item">
              <a class="nav-link" href="creer_user.php"><?php echo $user_creer;?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="connexion.php"><?php echo $nom_connexion;?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php"><?php echo $nom_contact;?></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
