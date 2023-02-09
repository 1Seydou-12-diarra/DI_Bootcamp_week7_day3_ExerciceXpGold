<?php
session_start();

echo ' bienvenue ' . $_SESSION["username"];

?>
<br><br>

<a href="index.php?">connecté vous</a>