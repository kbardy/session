<?php
// On prolonge la session
session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['loginname'])) 
{
  // Si inexistante ou nulle, on redirige vers le formulaire de login
  header('Location: login.php');
  exit();
}
?>
<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        TODO : Display shopping cart items from $_SESSION here.
    </div>
</section>
<?php require 'inc/foot.php'; ?>
