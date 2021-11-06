<?php
session_start();
if(empty($_SESSION['loginname'])) 
{
    header('Location: login.php');
  exit();
}
session_start();
$_SESSION = array();  
session_destroy();
header('Location: login.php');
exit();
?>