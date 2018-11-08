<?php

$id_jeu = $_GET['id'];

require_once('includes/connect.php');
$dsn = 'mysql:dbname='.$db.';host='.$hote;
try{
  $connexion = new PDO($dsn, $user_db, $password_db);
}
catch(PDOExecption $e){
  printf("Echec de la connexion : %s\n", $e->getMesage());
  exit();
}
$requete_preparee = $connexion->prepare("DELETE FROM jeux
  WHERE id= :id_jeu;");
$requete_preparee->bindParam(':id_jeu',$id_jeu);
if(!$requete_preparee->execute()){
  echo 'Problème sur la requête de la liste de jeux';
}
else {
  $requete_preparee->execute();
  header('Location: liste-jeux.php');
}

 ?>
