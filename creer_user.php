<?php
session_start();
include_once('includes/header.php');
?>

    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3"><?php echo $user_creer;?></h1>
        <p class="lead"><?php echo $description_creer;?></p>
        <a href="#" class="btn btn-primary btn-lg"><?php echo $inscription; ?></a>
      </header>

      <?php
      if($_SESSION['is_connected'] == TRUE) {
       ?>

      <!-- Page Features -->
      <form action="afficher_user.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="login">Identifiant</label>
          <input type="text" name="login" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">Mot de passe</label>
          <input type="text" name="password" class="form-control">
        </div>
        <div class="form-group">
          <label for="nom">Nom</label>
          <input type="text" name="nom" class="form-control">
        </div>
        <div class="form-group">
          <label for="prenom">Prenom</label>
          <input type="text" class="form-control" name="prenom">
        </div>
        <div class="form-group">
          <label for="avatar">Avatar</label>
          <input type="file" name="avatar" class="form-control">
        </div>
        <div class="form-group">
          <label for="presentation">Présentation</label>
          <textarea class="form-control" name="presentation" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="role">Role</label>
          <select class="form-control" name="role">
            <option>Membre</option>
            <option>Administrateur</option>
          </select>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control">
        </div>
        <input type="submit" name="envoyer" class="btn btn-primary mb-2">
        </input>
      </form>
      <?php
      }
      else {
        header("Location: connexion.php");
      }
       ?>
    </div>
    <!-- /.container -->

<?php include_once('includes/footer.php'); ?>
