<?php include_once('includes/header.php');
?>

    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3"><?php echo $nom_creer;?></h1>
        <p class="lead"><?php echo $description_creer;?></p>
        <a href="#" class="btn btn-primary btn-lg"><?php echo $inscription; ?></a>
      </header>

      <!-- Page Features -->
      <form action="afficher_jeu.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="nom_jeu">Nom du jeu</label>
          <input type="text" name="nom_jeu" class="form-control">
        </div>
        <div class="form-group">
          <label for="editeur">Editeur</label>
          <input type="text" name="editeur" class="form-control">
        </div>
        <div class="form-group">
          <label for="annee">Année de sortie</label>
          <input type="text" name="annee" class="form-control">
        </div>
        <div class="form-group">
          <label for="image">Image</label>
          <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
          <label for="descriptif">Description</label>
          <textarea class="form-control" name="descriptif" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="categorie">Catégorie</label>
          <select class="form-control" name="categorie">
            <option>Familiale</option>
            <option>Gestion</option>
            <option>Figurine</option>
            <option>Exper</option>
            <option>Apéro</option>
          </select>
        </div>
        <div class="form-group">
          <label for="duree">Durée</label>
          <input type="text" name="duree" class="form-control">
        </div>
        <div class="form-group">
          <label for="nb_joueur">Nombre de joueurs</label>
          <input type="text" name="nb_joueur" class="form-control">
        </div>
        <div class="form-group">
          <label for="commentaire">Commentaire</label>
          <textarea class="form-control" name="commentaire" rows="3"></textarea>
        </div>
        <input type="submit" name="envoyer" class="btn btn-primary mb-2">
        </input>
      </form>
    </div>
    <!-- /.container -->

<?php include_once('includes/footer.php'); ?>
