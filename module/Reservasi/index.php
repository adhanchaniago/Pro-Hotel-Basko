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
                            <th>Telp.</th>
                            <th>Alamat</th>
                            <th>Tanggal Checkin</th>
                            <th>Tanggal Checkout</th>
                            <!-- <th>Status</th> -->
                            <th>No Kamar</th>
                            <!-- <th>Tipe Kamar</th> -->
                            <th width="">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($db->getAllReservasi() as $no => $dataReservasi) {
                            // var_dump($dataReservasi);
                        ?>
                            <tr>
                                <td><?= ++$no ?></td>
                                <td><?= $dataReservasi->reservasi_nama ?></td>
                                <td><?= $dataReservasi->reservasi_tlp ?></td>
                                <td><?= $dataReservasi->reservasi_alamat ?></td>
                                <td><?= TglIndo($dataReservasi->reservasi_masuk) ?></td>
                                <td><?= TglIndo($dataReservasi->reservasi_keluar) ?></td>
                                <!-- <td><?= $dataReservasi->reservasi_status ?></td> -->
                                <td><?= $dataReservasi->kamar_no ?></td>
                                <!-- <td><?= $dataReservasi->tipe_kamar_nama ?></td> -->
                                <td>
                                    <a href="index.php?page=module/Reservasi/checkout&id=<?= $dataReservasi->reservasi_id ?>" class="btn btn-success btn-sm">Checkout</a>
                                    <a href="index.php?page=module/Reservasi/perpanjang&id=<?= $dataReservasi->reservasi_id ?>" class="btn btn-info btn-sm">Perpanjang</a>
                                    <a href="index.php?page=module/Reservasi/hapus&id=<?= $dataReservasi->reservasi_id ?>" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        <?php }  ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>