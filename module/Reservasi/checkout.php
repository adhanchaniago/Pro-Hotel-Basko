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

        <div class="col-md-8 mb-5 mt-5">
            <h2>Informasi</h2>
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
                                <input required value="<?php echo tgl_indo($dataReservasi->reservasi_keluar) ?>" type="text" class="form-control" readonly>
                                <input required value="<?php echo $dataReservasi->reservasi_keluar ?>" name="checkout" type="hidden">
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
                                if ($hasil == 0) {
                                    $hasil = 1;
                                }
                                $totalBayar = $hasil * $dataReservasi->kamar_harga;
                                ?>
                                <input required value="<?php echo rupiah($totalBayar)  ?>" id="tBayar" name="" type="text" class="form-control" readonly>
                                <input required value="<?php echo $totalBayar ?>" name="total_bayar" type="hidden">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Uang Bayar</label>
                                <input required onkeyup="cariKembali()" value="" id="uBayar" name="uang_bayar" type="number" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Uang Kembali</label>
                                <input required value="" id="uKembali" name="uang_kembali" type="number" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <script>
                        function cariKembali() {
                            var tBayar = <?php echo json_decode($totalBayar) ?>;
                            var uBayar = document.getElementById('uBayar').value;
                            var uKembali = document.getElementById('uKembali').value;
                            hasilUkembali = uBayar - tBayar;
                            document.getElementById('uKembali').value = hasilUkembali;
                        }
                        cariKembali();
                    </script>
                </div>
                <button name="prosesCheckout" class="btn btn-success">Proses Checkout</button>
            </form>
        </div>

    </div>
</div>