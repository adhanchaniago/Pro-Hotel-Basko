<div class="container">

    <div class="row">

        <div class="col-md-12 mb-5 mt-5">
            <h2>Data Konsultasi</h2>
            <hr>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="10px">No</th>
                            <th>Nama Pasien</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th width="145px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($db->getAllPasien() as $no => $dPasien) {
                            // var_dump($dPasien);  
                        ?>
                            <tr>
                                <td><?= ++$no ?></td>
                                <td><?= $dPasien->pasien_nama ?></td>
                                <td><?= $dPasien->pasien_jk ?></td>
                                <td><?= $dPasien->pasien_alamat ?></td>
                                <td>
                                    <a href="index.php?page=module/Konsultasi/detail&id=<?= $dPasien->pasien_id ?>" class="btn btn-success btn-sm">Data Konsultasi</a>
                                </td>
                            </tr>
                        <?php }  ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>