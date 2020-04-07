<div class="container">

    <div class="row">

        <div class="col-md-12 mb-5 mt-5">
            <h2>Data Reservasi</h2>
            <hr>
            <div class="table-responsive">
                <a href="?page=module/Reservasi/tambah" class="btn btn-primary ">Tambah Data</a>
                <br><br>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="10px">No</th>
                            <th>Nama Tamu</th>
                            <th>Tanggal Checkin</th>
                            <th>Tanggal Checkout</th>
                            <th>Status</th>
                            <th>No Kamar</th>
                            <th>Tipe Kamar</th>
                            <th width="280px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($db->getAllReservasi() as $no => $dataReservasi) {
                            // var_dump($dataReservasi);
                        ?>
                            <tr>
                                <td><?= ++$no ?></td>
                                <td>
                                    <b>
                                        <a href="index.php?page=module/Reservasi/detail&id=<?= $dataReservasi->reservasi_id ?>"><?= $dataReservasi->reservasi_nama ?></a>
                                    </b>
                                </td>
                                <td><b class="text-success"><?= TglIndo($dataReservasi->reservasi_masuk) ?></b></td>
                                <td><b class="text-danger"><?= TglIndo($dataReservasi->reservasi_keluar) ?></b></td>
                                <td><b class="text-info"><?= $dataReservasi->reservasi_status ?></b></td>
                                <td><a href="index.php?page=module/Kamar/index"><?= $dataReservasi->kamar_no ?></a></td>
                                <td><a href="index.php?page=module/Kamar/index"><?= $dataReservasi->tipe_kamar_nama ?></a></td>
                                <td>
                                    <a href="index.php?page=module/Reservasi/detail&id=<?= $dataReservasi->reservasi_id ?>" class="btn btn-primary btn-sm">Detail</a>

                                    <a onclick="return confirm('Anda yakin hapus ?')" href="index.php?page=module/Reservasi/hapus&id=<?= $dataReservasi->reservasi_id ?>" class="btn btn-danger btn-sm">Hapus</a>

                                    <?php
                                    if ($dataReservasi->reservasi_status == "Booking") :   ?>

                                        <a href="index.php?page=module/Reservasi/checkin&id=<?= $dataReservasi->reservasi_id ?>" class="btn btn-success btn-sm">Checkin</a>

                                    <?php elseif ($dataReservasi->reservasi_status == "Checkin") : ?>

                                        <a href="index.php?page=module/Reservasi/checkout&id=<?= $dataReservasi->reservasi_id ?>" class="btn btn-success btn-sm">Checkout</a>

                                        <a href="index.php?page=module/Reservasi/perpanjang&id=<?= $dataReservasi->reservasi_id ?>" class="btn btn-info btn-sm">Perpanjang</a>

                                    <?php endif ?>
                                </td>
                            </tr>
                        <?php }  ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>