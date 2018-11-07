<?php
session_start();
session_destroy();
setcookie('pseudo','',time() -3600);
setcookie('ticket','',time() -3600);
header('Location: index.php');
 ?>
