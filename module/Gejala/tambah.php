<?php
if (isset($_POST["simpan"])) {
    if ($db->addGejala($_POST) > 0) {
        echo "
        <script>
        alert('Data Berhasil Ditambah');
        document.location.href = 'index.php?page=module/Gejala/index';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Ditambah');
        document.location.href = 'index.php?page=module/Gejala/index';
        </script>";
    }
}
?>

<div class="container">

    <div class="row">

        <div class="col-md-6 mb-5 mt-5">
            <h2>Tambah Gejala</h2>
            <hr>
            <form method="POST">
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Kode Gejala</label>
                        <input name="id" type="text" class="form-control" autofocus="autofocus">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Nama Gejala</label>
                        <input name="nama" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Nilai CF</label>
                        <input name="cf" type="number" min="0.1" max="1" step="0.01" class="form-control">
                    </div>
                </div>
                <button name="simpan" class="btn btn-success">Simpan</button>
            </form>
        </div>

    </div>
</div>