<div class="container">

    <div class="row">

        <div class="col-md-12 mb-5 mt-5">
            <h2>Data Kamar</h2>
            <hr>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="10px">No</th>
                            <th>Tipe Kamar</th>
                            <th>Nomor Kamar</th>
                            <th>Harga Kamar</th>
                            <th>Status</th>
                            <th width="90px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($db->getAllKamarTersedia() as $no => $dataKamar) {
                            // var_dump($dataKamar);
                        ?>
                            <tr>
                                <td><?= ++$no ?></td>
                                <td><?= $dataKamar->tipe_kamar_nama ?></td>
                                <td><?= $dataKamar->kamar_no ?></td>
                                <td>Rp. <?= number_format($dataKamar->kamar_harga) ?></td>
                                <td><?= $dataKamar->kamar_status ?></td>
                                <td>
                                    <a href="index.php?page=module/Kamar/edit&id=<?= $dataKamar->kamar_id ?>" class="btn btn-primary btn-sm">Booking</a>
                                </td>
                            </tr>
                        <?php }  ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>