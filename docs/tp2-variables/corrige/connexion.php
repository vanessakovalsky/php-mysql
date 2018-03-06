<?php include_once('includes/header.php'); ?>

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

        <form class="form-signin">
          <h1 class="h3 mb-3 font-weight-normal"><?php echo $merci_connecter;?></h1>
          <label for="inputEmail" class="sr-only"><?php echo $login;?></label>
          <input type="email" id="inputEmail" class="form-control" placeholder="<?php echo $login;?>" required autofocus>
          <label for="inputPassword" class="sr-only"><?php echo $password;?></label>
          <input type="password" id="inputPassword" class="form-control" placeholder="<?php echo $password;?>" required>
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

<?php include_once('includes/footer.php'); ?>
