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

        <div class="col-md-6 mb-5 mt-5">
            <h2>Tambah Pengguna</h2>
            <hr>
            <form method="POST">
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Username</label>
                        <input name="username" type="text" class="form-control" autofocus="autofocus">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Password</label>
                        <input name="password" type="password" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Nama</label>
                        <input name="nama" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Level</label>
                        <select name="level" id="level" class="form-control">
                            <option value="Admin">Admin</option>
                            <option value="Frontline">Frontline</option>
                            <option value="Pimpinan">Pimpinan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Telp.</label>
                        <input name="telp" type="number" class="form-control">
                    </div>
                </div>
                <button name="simpan" class="btn btn-success">Simpan</button>
            </form>
        </div>

    </div>
</div>