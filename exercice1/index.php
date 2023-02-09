<?php
ob_start();
session_start();
?>
<html lang="en">

<head>
</head>

<body>

  <h2>Entrer votre Username et votre Password</h2>

  <?php
  $msg = '';
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (
    isset($_POST['login']) && !empty($_POST['username'])
    && !empty($_POST['password'])
  ) {

    if (
      $_POST['username'] == 'Diarrassouba' &&
      $_POST['password'] == '123456'
    ) {
      $_SESSION['valid'] = true;

      $_SESSION['username'] = 'Diarrassouba';

      echo 'vous connecté ' . $_SESSION['username'];
    }else{
      $msg = 'Nom et Mot de pass incorrect';
    }
  }
}
  ?>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <h4 class="form-signin-heading"><?php echo $msg; ?></h4>
    <input type="text" name="username" placeholder="username" required />
    <br><br>
    <input type="password" name="password" placeholder="password" required /><br><br>
    <button type="submit" name="login">Login</button>
  </form>
  <a href="page.php" tite="Logout">Netoyer la session.
</body>
<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'Vous avez nettoyé la session';
  //  header('Refresh: 2; URL = index.php');
?>

</html>