<?php
if (isset($_POST["edit"])) {
    if ($db->uTipeKamar($_POST) > 0) {
        echo "
        <script>
        document.location.href = 'index.php?page=module/Tipe/index';
        </script>";
    } else {
        echo "<script>
        document.location.href = 'index.php?page=module/Tipe/index';
        </script>";
    }
}

$id = $_GET['id'];
$dataTipeKamar = $db->getOneTipeKamar($id);
// var_dump($dataTipeKamar);
?>

<div class="container">

    <div class="row">

        <div class="col-md-6 mb-5 mt-5">
            <h2>Edit Tipe Kamar</h2>
            <hr>
            <form method="POST">
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Tipe Kamar</label>
                        <input value="<?= $dataTipeKamar->tipe_kamar_id ?>" name="id" type="hidden">
                        <input value="<?= $dataTipeKamar->tipe_kamar_nama ?>" name="tipe" type="text" class="form-control" autofocus="autofocus">
                    </div>
                </div>
                <button name="edit" class="btn btn-success">Edit</button>
            </form>
        </div>

    </div>
</div>