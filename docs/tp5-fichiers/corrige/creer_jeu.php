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
      <?php

      $nouveau_jeu = 'imaginarium;2018;bombyx;img/imaginarium.jpg;Réparer et construire des machines;familiale;90min;2-5;super mécanique de jeu';
      $file = fopen('jeux.txt','a');
      $ecrire = fputs($file,$nouveau_jeu);
      fclose($file);
      echo 'votre nouveau jeu a été ajouté';
      include_once('jeux.txt');
       ?>
    </div>
    <!-- /.container -->

<?php include_once('includes/footer.php'); ?>
