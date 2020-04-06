<?php
if (isset($_POST["simpan"])) {
    if ($db->addTipeKamar($_POST) > 0) {
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
?>


<div class="container">

    <div class="row">

        <div class="col-md-6 mb-5 mt-5">
            <h2>Tambah Tipe Kamar</h2>
            <hr>
            <form method="POST">
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Tipe Kamar</label>
                        <input name="tipe" type="text" class="form-control" autofocus="autofocus">
                    </div>
                </div>
                <button name="simpan" class="btn btn-success">Simpan</button>
            </form>
        </div>

    </div>
</div>