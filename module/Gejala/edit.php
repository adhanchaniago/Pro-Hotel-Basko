<?php
if (isset($_POST["edit"])) {
    if ($db->uGejala($_POST) > 0) {
        echo "
        <script>
        alert('Data Berhasil Di Edit');
        document.location.href = 'index.php?page=module/Gejala/index';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Di Edit');
        document.location.href = 'index.php?page=module/Gejala/index';
        </script>";
    }
}

$id = $_GET['id'];
$dGejala = $db->getOneGejala($id);
// var_dump($dGejala);
?>

<div class="container">

    <div class="row">

        <div class="col-md-6 mb-5 mt-5">
            <h2>Edit Gejala</h2>
            <hr>
            <form method="POST">
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Kode Gejala</label>
                        <input readonly value="<?= $dGejala->gejala_id ?>" name="id" type="text" class="form-control" autofocus="autofocus">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Nama Gejala</label>
                        <input value="<?= $dGejala->gejala_nama ?>" name="nama" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Nilai CF</label>
                        <input value="<?= $dGejala->gejala_cf ?>" name="cf" type="number" min="0" class="form-control">
                    </div>
                </div>
                <button name="edit" class="btn btn-success">Edit</button>
            </form>
        </div>

    </div>
</div>