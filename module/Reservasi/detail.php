<?php
if (isset($_POST["checkout"])) {
    if ($db->prosesCheckout($_POST) > 0) {
        echo "
        <script>
        document.location.href = 'index.php?page=module/Reservasi/index';
        </script>";
    } else {
        echo "<script>
        document.location.href = 'index.php?page=module/Reservasi/index';
        </script>";
    }
}

$id = $_GET['id'];
$dataReservasi = $db->getOneReservasi($id);
// $dataTipes = $db->getAllTipeReservasi();
// var_dump($dataReservasi);
?>

<div class="container">

    <div class="row">

        <div class="col-md-8 mb-5 mt-2">
            <a class="btn btn-success mb-3" href="index.php?page=module/Reservasi/index">Kembali</a>
            <h2>Informasi</h2>
            <hr>
            <form method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Nama Tamu</label>
                                <input value="<?php echo $dataReservasi->reservasi_id ?>" name="id" type="hidden">
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
                                <label>Tipe Kamar</label>
                                <input value="<?php echo $dataReservasi->tipe_kamar_nama ?>" name="ceckin" type="text" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Tanggal Ceckout</label>
                                <input value="<?php echo tgl_indo($dataReservasi->reservasi_keluar) ?>" type="text" class="form-control" readonly>
                                <input value="<?php echo $dataReservasi->reservasi_keluar ?>" name="checkout" type="hidden">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Nomor Kamar</label>
                                <input value="<?php echo $dataReservasi->kamar_no ?>" name="ceckin" type="text" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>