<?php
if (isset($_POST["edit"])) {
    if ($db->uPasien($_POST) > 0) {
        echo "
        <script>
        alert('Data Berhasil Di Edit');
        document.location.href = 'index.php?page=module/Pasien/index';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Di Edit');
        document.location.href = 'index.php?page=module/Pasien/index';
        </script>";
    }
}

$id = $_GET['id'];
$dPasien = $db->getOnePasien($id);
// var_dump($dPasien);
?>

<div class="container">

    <div class="row">

        <div class="col-md-6 mb-5 mt-5">
            <h2>Edit Data Pasien</h2>
            <hr>
            <form method="POST">
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Username</label>
                        <input value="<?= $dPasien->pasien_id ?>" name="id" type="hidden">
                        <input value="<?= $dPasien->pasien_user ?>" name="user" type="text" class="form-control" autofocus="autofocus">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Password</label>
                        <input value="<?= $dPasien->pasien_pass ?>" name="pass" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Nama</label>
                        <input value="<?= $dPasien->pasien_nama ?>" name="nama" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <div class="form-label-group">
                        <select name="jenis" class="form-control">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <script>
                            document.getElementsByName('jenis')[0].value = "<?= $dPasien->pasien_jk ?>"
                        </script>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Tanggal Lahir</label>
                        <input value="<?= $dPasien->pasien_tgl_lahir ?>" name="tgl" type="date" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Alamat</label>
                        <input value="<?= $dPasien->pasien_alamat ?>" name="alamat" type="text" class="form-control">
                    </div>
                </div>
                <button name="edit" class="btn btn-success">Edit</button>
            </form>
        </div>

    </div>
</div>