<?php
if (isset($_POST["perpanjang"])) {
    if ($db->prosesPerpanjang($_POST) > 0) {
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

        <div class="col-md-8 mb-5 mt-3">
            <a href="index.php?page=module/Reservasi/index" class="btn btn-success mb-3">Kembali</a>
            <h2>Perpanjang</h2>
            <hr>
            <form method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Nama Tamu</label>
                                <input required value="<?php echo $dataReservasi->reservasi_id ?>" name="id" type="hidden">
                                <input required value="<?php echo $dataReservasi->reservasi_nama ?>" name="nama" type="text" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>No. Telp.</label>
                                <input required value="<?php echo $dataReservasi->reservasi_tlp ?>" name="telp" type="text" class="form-control" readonly>
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
                                <input required value="<?php echo tgl_indo($dataReservasi->reservasi_masuk) ?>" name="ceckin" type="text" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Tipe Kamar</label>
                                <input required value="<?php echo $dataReservasi->tipe_kamar_nama ?>" name="ceckin" type="text" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Tanggal Ceckout</label>
                                <input required value="<?php echo $dataReservasi->reservasi_keluar ?>" name="checkout" type="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Nomor Kamar</label>
                                <input required value="<?php echo $dataReservasi->kamar_no ?>" name="ceckin" type="text" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <button name="perpanjang" class="btn btn-primary">Proses Perpanjang</button>
            </form>
        </div>

    </div>
</div>