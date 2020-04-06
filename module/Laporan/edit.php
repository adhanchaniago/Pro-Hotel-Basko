<?php
if (isset($_POST["edit"])) {
    if ($db->uPengguna($_POST) > 0) {
        echo "
        <script>
        document.location.href = 'index.php?page=module/Pengguna/index';
        </script>";
    } else {
        echo "<script>
        document.location.href = 'index.php?page=module/Pengguna/index';
        </script>";
    }
}

$id = $_GET['id'];
$dataPengguna = $db->getOnePengguna($id);
// var_dump($dataPengguna);
?>

<div class="container">

    <div class="row">

        <div class="col-md-6 mb-5 mt-5">
            <h2>Edit Pengguna</h2>
            <hr>
            <form method="POST">
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Username</label>
                        <input value="<?= $dataPengguna->pengguna_id ?>" name="id" type="hidden">
                        <input value="<?= $dataPengguna->pengguna_username ?>" name="username" type="text" class="form-control" autofocus="autofocus">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Password</label>
                        <input value="<?= $dataPengguna->pengguna_password ?>" name="password" type="password" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Nama</label>
                        <input value="<?= $dataPengguna->pengguna_nama ?>" name="nama" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Level</label>
                        <select name="level" id="level" class="form-control">
                            <option value="1">Admin</option>
                            <option value="2">Frontline</option>
                            <option value="3">Pimpinan</option>
                        </select>
                    </div>
                </div>
                <script>
                    document.getElementById('level').value = <?php echo $dataPengguna->pengguna_level ?>
                </script>
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Telp.</label>
                        <input value="<?= $dataPengguna->pengguna_telp ?>" name="telp" type="number" class="form-control">
                    </div>
                </div>
                <button name="edit" class="btn btn-success">Edit</button>
            </form>
        </div>

    </div>
</div>