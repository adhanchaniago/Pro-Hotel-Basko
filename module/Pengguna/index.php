<div class="container">

    <div class="row">

        <div class="col-md-12 mb-5 mt-5">
            <h2>Data Pengguna</h2>
            <hr>
            <div class="table-responsive">
                <a href="?page=module/Pengguna/tambah" class="btn btn-primary ">Tambah Data</a>
                <br><br>
                <table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="10px">No</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Nama</th>
                            <th>Telp.</th>
                            <th>Level</th>
                            <th width="131px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $dataPenggunas = $db->getAllPengguna();
                        foreach ($dataPenggunas as $no => $dataPengguna) {
                        ?>
                            <tr>
                                <td><?= ++$no ?></td>
                                <td><?= $dataPengguna->pengguna_username ?></td>
                                <td><?= $dataPengguna->pengguna_password ?></td>
                                <td><?= $dataPengguna->pengguna_nama ?></td>
                                <td><?= $dataPengguna->pengguna_telp ?></td>
                                <td><?= $dataPengguna->pengguna_level ?></td>
                                <td>
                                    <a href="index.php?page=module/Pengguna/edit&id=<?= $dataPengguna->pengguna_id ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="index.php?page=module/Pengguna/hapus&id=<?= $dataPengguna->pengguna_id ?>" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        <?php }  ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>