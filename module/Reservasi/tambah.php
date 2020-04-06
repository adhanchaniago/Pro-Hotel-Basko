<?php
if (isset($_POST["simpan"])) {
    if ($db->addReservasi($_POST) > 0) {
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
$dataTipes = $db->getAllTipeKamar();
?>


<div class="container">

    <div class="row">

        <div class="col-md-6 mb-5 mt-5">
            <h2>Tambah Reservasi</h2>
            <hr>
            <form method="POST">
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Kamar</label>
                        <select style="widows: 50%" name="kamar" class="form-control">
                            <?php foreach ($db->getAllKamarTersedia() as $dataKamar) : var_dump($dataKamar); ?>
                                <option value="<?php echo $dataKamar->kamar_id ?>"><?php echo $dataKamar->kamar_no ?> - <?php echo $dataKamar->tipe_kamar_nama ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Tanggal Checkin</label>
                        <input required onchange="tampil()" class="form-control" type="date" id="start" name="checkin" value="<?php echo date('Y-m-d') ?>" min="<?php echo date('Y-m-d') ?>" max="">
                    </div>
                </div>
                <?php // echo date('Y-m-d', strtotime('+1 days', strtotime(date('Y-m-d')))) 
                ?>
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Tanggal Checkout</label>
                        <input required value="<?php echo date('Y-m-d', strtotime('+1 days', strtotime(date('Y-m-d')))) ?>" class="form-control" type="date" id="finish" name="checkout" name="out" value="" min="">
                        <script>
                            function tampil() {
                                var masuk = document.getElementById('start').value;
                                document.getElementById('finish').min = masuk;
                            }
                            tampil()
                        </script>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Nama Tamu</label>
                        <input required name="nama" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Nomor Telp.</label>
                        <input required name="telp" type="number" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Alamat</label>
                        <textarea name="alamat" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                </div>
                <button name="simpan" class="btn btn-success">Simpan</button>
            </form>
        </div>

    </div>
</div>