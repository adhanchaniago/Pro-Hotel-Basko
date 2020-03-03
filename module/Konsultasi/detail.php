<?php
$id = $_GET['id'];
$dKonsultasi = $db->getAllKonsultasi($id);
?>

<div class="container">

    <div class="row">

        <div class="col-md-12 mb-5 mt-5">
            <h2>Data Detail Konsultasi</h2>
            <hr>
            <div class="table-responsive">
                <a href="?page=module/Konsultasi/index" class="btn btn-primary ">Kembali</a>
                <br><br>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="10px">No</th>
                            <th>Nama Pasien</th>
                            <th>Tanggal Konsultasi</th>
                            <th>Penyakit</th>
                            <th>Tingkat Kepastian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($dKonsultasi as $no => $dKonsultasi) {
                            // var_dump($dKonsultasi);
                        ?>
                            <tr>
                                <td><?= ++$no ?></td>
                                <td><?= $dKonsultasi->pasien_nama ?></td>
                                <td><?= TglIndo($dKonsultasi->konsultasi_tgl) ?></td>
                                <td><?= $dKonsultasi->penyakit_nama ?></td>
                                <td><?= $dKonsultasi->konsultasi_hasil ?> %</td>
                            </tr>
                        <?php }  ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>