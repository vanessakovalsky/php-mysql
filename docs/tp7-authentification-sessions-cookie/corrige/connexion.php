<?php
session_start();
// Si le formulaire est envoyé on traite la connexion
if(isset($_POST['inputEmail'])){
  // On construit un tableau à partir du fichier texte
  $file = fopen('user.txt','r');
  while ($line = fgets($file)){
    $table_user[] = explode(';',$line);
  }
  $identifiant = htmlentities($_POST['inputEmail']);
  $password = htmlentities($_POST['inputPassword']);

  // On parcourt le tableau pour comparer aux valeurs saisies
  foreach($table_user as $user){
    if($identifiant == $user[0] && $password == $user[1]){
      // L'utilisateur existe et les infos correspondent
      //On créer la session
      $_SESSION['is_connected'] = TRUE;
      // On ajoute l'identifiant en cookie
      setcookie('pseudo',$identifiant, time() + 3600);
      //On arrete la boucle dès qu'une correspondance est trouvée
      break;
    }
    else {
      $_SESSION['is_connected'] = FALSE;
      setcookie('pseudo','', time() + 3600);
    }
  }
}


include_once('includes/header.php');

if($_SESSION['is_connected'] == FALSE){
?>
    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3"><?php echo $nom_connexion;?></h1>
        <p class="lead"><?php echo $texte_connexion;?></p>
        <a href="#" class="btn btn-primary btn-lg"><?php echo $inscription;?></a>
      </header>

      <!-- Page Features -->
      <div class="row text-center">

        <form class="form-signin" method="post" action="">
          <h1 class="h3 mb-3 font-weight-normal"><?php echo $merci_connecter;?></h1>
          <label for="inputEmail" class="sr-only"><?php echo $login;?></label>
          <input type="text" name="inputEmail" class="form-control" placeholder="<?php echo $login;?>" required autofocus>
          <label for="inputPassword" class="sr-only"><?php echo $password;?></label>
          <input type="password" name="inputPassword" class="form-control" placeholder="<?php echo $password;?>" required>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"><?php echo $remember;?>
            </label>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo $nom_connexion;?></button>
        </form>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
<?php
}
else { ?>
  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3">Bienvenue sur votre profil</h1>
      <p class="lead"><?php echo $texte_connexion;?></p>
      <a href="#" class="btn btn-primary btn-lg"><?php echo $inscription;?></a>
    </header>

    <!-- Page Features -->
    <div class="row text-center">
      <p>Bienvenue <?php echo htmlentities($_COOKIE['pseudo']);?></p>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
<?php
}
include_once('includes/footer.php'); ?>
