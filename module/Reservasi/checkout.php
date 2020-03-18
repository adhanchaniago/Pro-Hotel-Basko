<?php
if (isset($_POST["edit"])) {
    if ($db->uReservasi($_POST) > 0) {
        echo "
        <script>
        alert('Data Berhasil Di Edit');
        document.location.href = 'index.php?page=module/Reservasi/index';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Di Edit');
        document.location.href = 'index.php?page=module/Reservasi/index';
        </script>";
    }
}

$id = $_GET['id'];
$dataReservasi = $db->getOneReservasi($id);
// $dataTipes = $db->getAllTipeReservasi();
var_dump($dataReservasi);
?>

<div class="container">

    <div class="row">

        <div class="col-md-8 mb-5 mt-5">
            <h2>Informasi</h2>
            <hr>
            <form method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Nama Tamu</label>
                                <input value="<?php echo $dataReservasi->reservasi_nama ?>" name="nama" type="text" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>No. Telp.</label>
                                <input value="<?php echo $dataReservasi->reservasi_tlp ?>" name="telp" type="text" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Alamat</label>
                                <textarea name="alamat" cols="30" rows="3" class="form-control" readonly><?php echo $dataReservasi->reservasi_alamat ?></textarea>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Tanggal Checkin</label>
                                <input value="<?php echo tgl_indo($dataReservasi->reservasi_masuk) ?>" name="ceckin" type="text" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Kamar</label>
                                <input value="<?php echo $dataReservasi->kamar_no . " - " . $dataReservasi->tipe_kamar_nama ?>" name="ceckin" type="text" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Tanggal Ceckout</label>
                                <input value="<?php echo tgl_indo($dataReservasi->reservasi_keluar) ?>" name="checkout" type="text" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Harga Kamar/Hari</label>
                                <input value="<?php echo rupiah($dataReservasi->kamar_harga)  ?>" name="ceckin" type="text" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <h2>Pembayaran</h2>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Total Bayar</label>
                                <!-- Mencari selisih tanggal PHP -->
                                <?php
                                $in = new DateTime($dataReservasi->reservasi_masuk);
                                $out   = new DateTime($dataReservasi->reservasi_keluar);
                                $diff    = $out->diff($in);
                                $hasil = $diff->d;
                                $totalBayar = $hasil * $dataReservasi->kamar_harga;
                                ?>
                                <input value="<?php echo $totalBayar  ?>" name="ceckin" type="text" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Harga Kamar/Hari</label>
                                <input value="<?php echo rupiah($dataReservasi->kamar_harga)  ?>" name="ceckin" type="text" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <button name="edit" class="btn btn-success">Edit</button>
            </form>
        </div>

    </div>
</div>