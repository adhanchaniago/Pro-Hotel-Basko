<?php
include 'assets/model/db.php';
include 'assets/libs/helper/helper.php';
$db = new Db();

if (empty($_SESSION['akun'])) {
  echo "
  <script>alert('Silahkan Login Terlebih Dahulu');
  location='login.php';</script>;
  ";
}
?>
<!DOCTYPE html>
<html>

<head>

  <title>Basko Hotel</title>
  <?php include 'components/head.php' ?>
</head>

<body>

  <!-- Navigation -->
  <?php include 'components/menu.php' ?>


  <?php include 'content.php' ?>

  <?php // include 'components/footer.php' 
  ?>

  <?php include 'components/scripts.php' ?>

</body>

</html>