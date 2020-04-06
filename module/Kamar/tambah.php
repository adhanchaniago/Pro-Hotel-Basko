<?php
if (isset($_POST["simpan"])) {
    if ($db->addKamar($_POST) > 0) {
        echo "
        <script>
        document.location.href = 'index.php?page=module/Kamar/index';
        </script>";
    } else {
        echo "<script>
        document.location.href = 'index.php?page=module/Kamar/index';
        </script>";
    }
}
$dataTipes = $db->getAllTipeKamar();
?>


<div class="container">

    <div class="row">

        <div class="col-md-6 mb-5 mt-5">
            <h2>Tambah Kamar</h2>
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
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Nomor Kamar</label>
                        <input name="nomor" type="number" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Harga Kamar</label>
                        <input name="harga" type="number" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Fasilitas Kamar</label>
                        <textarea name="fasilitas" cols="10" rows="3" class="form-control"></textarea>
                    </div>
                </div>
                <button name="simpan" class="btn btn-success">Simpan</button>
            </form>
        </div>

    </div>
</div>