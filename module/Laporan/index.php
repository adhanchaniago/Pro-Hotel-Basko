<?php
if (isset($_POST["simpan"])) {
    if ($db->addPengguna($_POST) > 0) {
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
?>


<div class="container">

    <div class="row">

        <div class="col-md-12 mb-5 mt-5">
            <h2>Laporan</h2>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <form method="POST">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Laporan Perhari</label>
                                <input name="username" type="text" class="form-control" autofocus="autofocus">
                            </div>
                        </div>
                        <button name="simpan" class="btn btn-success">Simpan</button>
                    </form>
                </div>
                <div class="col-md-4">
                    <form method="POST">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Laporan Perbulan</label>
                                <input name="username" type="text" class="form-control" autofocus="autofocus">
                            </div>
                        </div>
                        <button name="simpan" class="btn btn-success">Simpan</button>
                    </form>
                </div>
                <div class="col-md-4">
                    <form method="POST">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Laporan Pertahun</label>
                                <input name="username" type="text" class="form-control" autofocus="autofocus">
                            </div>
                        </div>
                        <button name="simpan" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>