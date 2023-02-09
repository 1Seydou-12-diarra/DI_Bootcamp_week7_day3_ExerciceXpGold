<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'Vous avez nettoyé la session';
   header('Refresh: 2; URL = index.php');
?>