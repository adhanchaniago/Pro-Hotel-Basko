<?php
if (isset($_POST["edit"])) {
    if ($db->uPengguna($_POST) > 0) {
        echo "
        <script>
        alert('Data Berhasil Di Edit');
        document.location.href = 'index.php?page=module/Pengguna/index';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Di Edit');
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
                        <label>Telp.</label>
                        <input value="<?= $dataPengguna->pengguna_telp ?>" name="telp" type="number" class="form-control">
                    </div>
                </div>
                <button name="edit" class="btn btn-success">Edit</button>
            </form>
        </div>

    </div>
</div>