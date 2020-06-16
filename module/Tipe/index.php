<div class="container">

    <div class="row">

        <div class="col-md-12 mb-5 mt-5">
            <h2>Data Tipe Kamar</h2>
            <hr>
            <div class="table-responsive">
                <!-- <a href="?page=module/Tipe/tambah" class="btn btn-primary ">Tambah Data</a> -->
                <br><br>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="10px">No</th>
                            <th>Tipe Kamar</th>
                            <th width="131px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($db->getAllTipeKamar() as $no => $dataTipe) {
                            // var_dump($dataTipe);
                        ?>
                            <tr>
                                <td><?= ++$no ?></td>
                                <td><?= $dataTipe->tipe_kamar_nama ?></td>
                                <td>
                                    <a href="index.php?page=module/Tipe/edit&id=<?= $dataTipe->tipe_kamar_id ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="index.php?page=module/Tipe/hapus&id=<?= $dataTipe->tipe_kamar_id ?>" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        <?php }  ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>