<?php include_once('includes/header.php');

if(isset($_POST['exampleFormControlInput1'])){
  $header = "From: \"Vanessa\"<v.david@kovalibre.com>";
  $header .= "Reply-to: \"Vanessa\"<v.david@kovalibre.com>";
  $header .= "MIME-Version: 1.0";
  $header .= "Content-Type: text/html; charset=\"ISO-8859-1\"";

  $message = $_POST['exampleFormControlSelect1'];

  $sujet = $_POST['exampleFormControlTextarea1'];

  $to = $_POST['exampleFormControlInput1'];

  mail($to,$sujet,$message,$header);
  echo "Votre mail a bien été envoyé";
}
?>
    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3"><?php echo $nom_contact;?></h1>
        <p class="lead"><?php echo $texte_contact;?></p>
        <a href="#" class="btn btn-primary btn-lg"><?php echo $inscription;?></a>
      </header>

      <!-- Page Features -->
      <div class="row text-center">
        <form class="contact" action="" method="post">
          <div class="form-group">
            <label for="exampleFormControlInput1"><?php echo $adresse_email;?></label>
            <input type="email" class="form-control" name="exampleFormControlInput1" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1"><?php echo $exemple_select;?></label>
            <select class="form-control" name="exampleFormControlSelect1" id="exampleFormControlSelect1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect2"><?php echo $exemple_multiple_select;?></label>
            <select multiple class="form-control" name="exampleFormControlSelect2" id="exampleFormControlSelect2">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><?php echo $exemple_textarea;?></label>
            <textarea class="form-control" name="exampleFormControlTextarea1" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary mb-2"><?php echo $submit_button; ?></button>

        </form>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

<?php include_once('includes/footer.php'); ?>
