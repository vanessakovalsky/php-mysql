<?php include_once('includes/header.php');?>

    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3"><?php echo $nom_liste;?></h1>
        <p class="lead"><?php echo $description_liste;?></p>
        <a href="#" class="btn btn-primary btn-lg"><?php echo $inscription; ?></a>
      </header>

      <!-- Page Features -->
        <table id="liste-jeux" class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col"><?php echo $colonne_jeu;?></th>
              <th scope="col"><?php echo $colonne_editeur;?></th>
              <th scope="col"><?php echo $colonne_categorie;?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td><?php echo $tableau_jeux[0]['jeu'];?></td>
              <td><?php echo $tableau_jeux[0]['editeur'];?></td>
              <td><?php echo $tableau_jeux[0]['categorie'];?></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td><?php echo $tableau_jeux[1]['jeu'];?></td>
              <td><?php echo $tableau_jeux[1]['editeur'];?></td>
              <td><?php echo $tableau_jeux[1]['categorie'];?></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td><?php echo $tableau_jeux[2]['jeu'];?></td>
              <td><?php echo $tableau_jeux[2]['editeur'];?></td>
              <td><?php echo $tableau_jeux[2]['categorie'];?></td>
            </tr>
          </tbody>
        </table>

    </div>
    <!-- /.container -->

<?php include_once('includes/footer.php'); ?>
