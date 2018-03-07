<?php
print_r($_POST);

$nouveau_jeu = $_POST['nom_jeu'].';'.$_POST['editeur'].';'.$_POST['annee'].';'.$_POST['descriptif'].';'.$_POST['categorie'].';'.$_POST['duree'].';'.$_POST['nb_joueur'].';'.$_POST['commentaire'];
$file = fopen('jeux.txt','a');
$br = fputs($file,"\n");
$ecrire = fputs($file,$nouveau_jeu);
echo $ecrire;
fclose($file);
echo 'votre nouveau jeu a été ajouté';

 ?>
