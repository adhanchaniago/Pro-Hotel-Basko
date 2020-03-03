<div class="container">

    <div class="row">

        <div class="col-md-12 mb-5 mt-5">
            <h2>Data Pasien</h2>
            <hr>
            <div class="table-responsive">
                <a href="?page=module/Pasien/tambah" class="btn btn-primary ">Tambah Data</a>
                <br><br>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="10px">No</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Nama Pasien</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th width="131px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($db->getAllPasien() as $no => $dPasien) {
                            // var_dump($dPasien);  
                        ?>
                            <tr>
                                <td><?= ++$no ?></td>
                                <td><?= $dPasien->pasien_user ?></td>
                                <td><?= $dPasien->pasien_pass ?></td>
                                <td><?= $dPasien->pasien_nama ?></td>
                                <td><?= $dPasien->pasien_jk ?></td>
                                <td><?= TglIndo($dPasien->pasien_tgl_lahir) ?></td>
                                <td><?= $dPasien->pasien_alamat ?></td>
                                <td>
                                    <a href="index.php?page=module/Pasien/edit&id=<?= $dPasien->pasien_id ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="index.php?page=module/Pasien/hapus&id=<?= $dPasien->pasien_id ?>" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        <?php }  ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>