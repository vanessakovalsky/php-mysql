<?php

include_once('includes/header.php');

/* On vérifie si le fichier a bien été envoyé et s'il ne contient
* pas d'erreur
*/
if(isset($_FILES['avatar']) && $_FILES['avatar']['error'] == 0){
  //On test la taille du fichier
  if($_FILES['avatar']['size'] <= 1000000){
    // On vérifie l'extension pour être sur que c'est une image
    $info_image = pathinfo($_FILES['avatar']['name']);
    $extension_image = $info_image['extension'];
    $extensions_autorisees = ['jpg','png','jpeg'];
    if(in_array($extension_image, $extensions_autorisees)){
      //On déplace le fichier dans le dossier img
      move_uploaded_file($_FILES['avatar']['tmp_name'],'img/'.$_FILES['avatar']['name']);
      $image_url = 'img/avatar/'.$_FILES['avatar']['name'];
    }
  }
}

//On traite les données du formulaire reçues dans $_POST
/*
$nouveau_jeu = htmlentities($_POST['nom_jeu']).';'.htmlentities($_POST['editeur']).';'.htmlentities($_POST['annee']).';'.htmlentities($image_url).';'.htmlentities($_POST['descriptif']).';'.htmlentities($_POST['categorie']).';'.htmlentities($_POST['duree']).';'.htmlentities($_POST['nb_joueur']).';'.htmlentities($_POST['commentaire']);
/* On ouvre le fichier en écriture uniquement (a), pour aller directement à la
*  fin du fichier et on ajoute la nouvelle ligne
*/
/*$file = fopen('jeux.txt','a');
$ecrire = fputs($file,$nouveau_jeu."\n");
fclose($file);*/
//On se connecte à la BDD
require_once('includes/connect.php');
$dsn = 'mysql:dbname='.$db.';host='.$hote;
try{
  $connexion = new PDO($dsn, $user_db, $password_db,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(PDOExecption $e){
  printf("Echec de la connexion : %s\n", $e->getMesage());
  exit();
}

$requete_preparee = $connexion->prepare("INSERT INTO user(login, nom,
   prenom, role, presentation, avatar, email, password)
  VALUES (:login, :nom, :prenom ,:role, :presentation, :avatar,
     :email, :password)");
$requete_preparee->bindParam(':login',$_POST['login']);
$requete_preparee->bindParam(':nom',$_POST['nom']);
$requete_preparee->bindParam(':prenom',$_POST['prenom']);
$requete_preparee->bindParam(':avatar',$image_url);
$requete_preparee->bindParam(':role',$_POST['role']);
$requete_preparee->bindParam(':presentation',$_POST['presentation']);
$requete_preparee->bindParam(':email',$_POST['email']);
$requete_preparee->bindParam(':password',$_POST['password']);
$requete_preparee->execute();
echo 'votre nouveau utilisateur a été ajouté';
 ?>

     <!-- Page Content -->
     <div class="container">

       <!-- Jumbotron Header -->
       <header class="jumbotron my-4">
         <h1 class="display-3"><?php echo htmlentities($_POST['nom']);?></h1>
         <p class="lead"><?php echo htmlentities($_POST['prenom']);?></p>
         <a href="#" class="btn btn-primary btn-lg"><?php echo $inscription; ?></a>
       </header>

       <!-- Page Features -->

       <img src="<?php echo $image_url; ?>" />
     </div>
     <!-- /.container -->

 <?php include_once('includes/footer.php'); ?>
