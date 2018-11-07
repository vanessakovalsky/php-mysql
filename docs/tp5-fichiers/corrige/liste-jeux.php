<?php include_once('includes/header.php');

?>

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
            <?php
            $file = fopen('jeux.txt','r+');
            while ($line = fgets($file)){
              $table[] = explode(';',$line);
            }

            $compteur_jeu = 1;
            foreach($table as $jeu){
                  echo '<tr>';
                  echo '<td>'.$compteur_jeu.'</td>';
                  echo '<td>'.htmlentities(ucfirst($jeu[0])). ' ' . strlen($jeu[0]).'</td>';
                  echo '<td>'.htmlentities(strtoupper($jeu[1])).'</td>';
                  echo '<td>'.htmlentities($jeu[5]).'</td>';
                  echo '</tr>';
                  $compteur_jeu++;
            } ?>
          </tbody>
        </table>

    </div>
    <!-- /.container -->

<?php include_once('includes/footer.php'); ?>
