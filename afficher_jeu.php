<?php

include_once('includes/header.php');

//On traite les données du formulaire reçues dans $_POST
$nouveau_jeu = $_POST['nom_jeu'].';'.$_POST['editeur'].';'.$_POST['annee'].';'.$_POST['descriptif'].';'.$_POST['categorie'].';'.$_POST['duree'].';'.$_POST['nb_joueur'].';'.$_POST['commentaire'];
/* On ouvre le fichier en écriture uniquement (a), pour aller directement à la
*  fin du fichier
*/
$file = fopen('jeux.txt','a');
$ecrire = fputs($file,$nouveau_jeu."\n");
fclose($file);
echo 'votre nouveau jeu a été ajouté';

 ?>

     <!-- Page Content -->
     <div class="container">

       <!-- Jumbotron Header -->
       <header class="jumbotron my-4">
         <h1 class="display-3"><?php echo $_POST['nom_jeu'];?></h1>
         <p class="lead"><?php echo $_POST['descriptif'];?></p>
         <a href="#" class="btn btn-primary btn-lg"><?php echo $inscription; ?></a>
       </header>

       <!-- Page Features -->


     </div>
     <!-- /.container -->

 <?php include_once('includes/footer.php'); ?>
