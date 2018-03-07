<?php

include_once('includes/header.php');

/* On vérifie si le fichier a bien été envoyé et s'il ne contient
* pas d'erreur
*/
if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){
  //On test la taille du fichier
  if($_FILES['image']['size'] <= 1000000){
    // On vérifie l'extension pour être sur que c'est une image
    $info_image = pathinfo($_FILES['image']['name']);
    $extension_image = $info_image['extension'];
    $extensions_autorisees = ['jpg','png','jpeg'];
    if(in_array($extension_image, $extensions_autorisees)){
      //On déplace le fichier dans le dossier img
      move_uploaded_file($_FILES['image']['tmp_name'],'img/'.$_FILES['image']['name']);
      $image_url = 'img/'.$_FILES['image']['name'];
    }
  }
}

//On traite les données du formulaire reçues dans $_POST
$nouveau_jeu = htmlentities($_POST['nom_jeu']).';'.htmlentities($_POST['editeur']).';'.htmlentities($_POST['annee']).';'.htmlentities($image_url).';'.htmlentities($_POST['descriptif']).';'.htmlentities($_POST['categorie']).';'.htmlentities($_POST['duree']).';'.htmlentities($_POST['nb_joueur']).';'.htmlentities($_POST['commentaire']);
/* On ouvre le fichier en écriture uniquement (a), pour aller directement à la
*  fin du fichier et on ajoute la nouvelle ligne
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

       <img src="<?php echo $image_url; ?>" />
     </div>
     <!-- /.container -->

 <?php include_once('includes/footer.php'); ?>
