<div class="container">

    <div class="row">

        <div class="col-md-12 mb-5 mt-5">
            <h2>Data Kamar</h2>
            <hr>
            <div class="table-responsive">
                <a href="?page=module/Kamar/tambah" class="btn btn-primary ">Tambah Data</a>
                <br><br>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="10px">No</th>
                            <th>Tipe Kamar</th>
                            <th>Nomor Kamar</th>
                            <th>Harga Kamar</th>
                            <th>Status</th>
                            <th>Fasilitas Kamar</th>
                            <th width="131px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($db->getAllKamar() as $no => $dataKamar) {
                            // var_dump($dataKamar);
                        ?>
                            <tr>
                                <td><?= ++$no ?></td>
                                <td><?= $dataKamar->tipe_kamar_nama ?></td>
                                <td><?= $dataKamar->kamar_no ?></td>
                                <td>Rp. <?= number_format($dataKamar->kamar_harga) ?></td>
                                <td><?= $dataKamar->kamar_status ?></td>
                                <td><?= $dataKamar->kamar_fasilitas ?></td>
                                <td>
                                    <a href="index.php?page=module/Kamar/edit&id=<?= $dataKamar->kamar_id ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="index.php?page=module/Kamar/hapus&id=<?= $dataKamar->kamar_id ?>" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        <?php }  ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>