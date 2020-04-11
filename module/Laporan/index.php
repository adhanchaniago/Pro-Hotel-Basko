<div class="container">

    <div class="row">

        <div class="col-md-12 mb-5 mt-5">
            <h2>Laporan</h2>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <form target="_blank" target="_blank" action="module/Laporan/perhari.php" method="POST">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Laporan Perhari</label>
                                <input name="hari" value="<?php echo date('Y-m-d') ?>" type="date" class="form-control">
                            </div>
                        </div>
                        <button name="cetakHari" class="btn btn-success">Cetak</button>
                    </form>
                </div>
                <div class="col-md-4">
                    <form target="_blank" action="module/Laporan/perbulan.php" method="POST">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Laporan Perbulan</label>
                                <input name="bulan" value="<?php echo date('Y-m') ?>" type="month" class="form-control">
                            </div>
                        </div>
                        <button name="cetakBulan" class="btn btn-success">Cetak</button>
                    </form>
                </div>
                <div class="col-md-4">
                    <form target="_blank" action="module/Laporan/pertahun.php" method="POST">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Laporan Pertahun</label>
                                <select name="tahun" class="form-control">
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020" selected>2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                </select>
                            </div>
                        </div>
                        <button name="cetakTahun" class="btn btn-success">Cetak</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>