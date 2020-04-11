<?php
include 'assets/model/db.php';
include 'assets/libs/helper/helper.php';
$db = new Db();
if (isset($_POST['login'])) {
    $db->Login($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Basko Hotel</title>
    <?php include 'components/head.php' ?>

</head>

<body class="bg-dark">

    <div class="container">

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mb-5 mt-5">
                <div class="card">
                    <div class="card-header">Silahkan Login</div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label>Username</label>
                                    <input name="username" type="text" class="form-control" autofocus="autofocus">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label>Password</label>
                                    <input name="password" type="password" class="form-control">
                                </div>
                            </div>
                            <button name="login" class="btn btn-success">Login</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <?php include 'components/scripts.php' ?>
</body>

</html>