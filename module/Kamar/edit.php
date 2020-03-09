<?php
if (isset($_POST["edit"])) {
    if ($db->uKamar($_POST) > 0) {
        echo "
        <script>
        alert('Data Berhasil Di Edit');
        document.location.href = 'index.php?page=module/Kamar/index';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Di Edit');
        document.location.href = 'index.php?page=module/Kamar/index';
        </script>";
    }
}

$id = $_GET['id'];
$dataKamar = $db->getOneKamar($id);
$dataTipes = $db->getAllTipeKamar();
// var_dump($dataKamar);
?>

<div class="container">

    <div class="row">

        <div class="col-md-6 mb-5 mt-5">
            <h2>Edit Kamar</h2>
            <hr>
            <form method="POST">
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Tipe Kamar</label>
                        <select name="tipe" class="form-control" autofocus="autofocus">
                            <?php
                            foreach ($dataTipes as $dataTipe) : ?>
                                <option value="<?= $dataTipe->tipe_kamar_id ?>"><?= $dataTipe->tipe_kamar_nama ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <script>
                    document.getElementsByName('tipe')[0].value = "<?php echo $dataKamar->tipe_kamar_id ?>";
                    // console.log(tipeKamar);
                </script>
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Nomor Kamar</label>
                        <input value="<?php echo $dataKamar->kamar_no ?>" name="nomor" type="number" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Harga Kamar</label>
                        <input value="<?php echo $dataKamar->kamar_harga ?>" name="harga" type="number" class="form-control">
                        <input value="<?php echo $dataKamar->kamar_status ?>" name="status" type="hidden">
                        <input value="<?php echo $dataKamar->kamar_id ?>" name="id" type="hidden">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Fasilitas Kamar</label>
                        <textarea name="fasilitas" cols="10" rows="3" class="form-control"><?php echo $dataKamar->kamar_fasilitas ?></textarea>
                    </div>
                </div>
                <button name="edit" class="btn btn-success">Edit</button>
            </form>
        </div>

    </div>
</div>