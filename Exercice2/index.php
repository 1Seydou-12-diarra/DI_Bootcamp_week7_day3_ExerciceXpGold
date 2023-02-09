<?php
ob_start();
session_start();
?>
<html lang="en">

<head>
</head>

<body>

  <h2>Entrer votre Username </h2>

  <?php
  $msg = '';
  if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST['login']) && !empty($_POST['username'])) {

      if ($_POST['username'] == 'issa') {
        $_SESSION['valid'] = true;
        $_SESSION['username'] = 'issa';

        header("location:submit.php");
      } else {
        $msg = 'Nom et Mot de pass incorrect';
      }
    }
  }
  ?>

  <form action="" method="post">
    <h4 class="form-signin-heading"><?php echo $msg; ?></h4>
    <input type="text" name="username" placeholder="username" required />
    <button type="submit" name="login">Login</button>
  </form>
</body>

</html>