<?php
include 'assets/model/db.php';
include 'assets/libs/helper/helper.php';
$db = new Db();
// session_start();
// if (empty($_SESSION['akun'])) {
//   echo "
//   <script>alert('Anda harus login terlebih dahulu');location=''</script>
//   ";
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>Sistem Pakar Centainty Factor</title>
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