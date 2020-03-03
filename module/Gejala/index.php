<div class="container">

    <div class="row">

        <div class="col-md-12 mb-5 mt-5">
            <h2>Data Gejala</h2>
            <hr>
            <div class="table-responsive">
                <a href="?page=module/Gejala/tambah" class="btn btn-primary ">Tambah Data</a>
                <br><br>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="10px">No</th>
                            <th width="50px">Kode Gejala</th>
                            <th>Nama Gejala</th>
                            <th>Nilai CF</th>
                            <th width="131px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($db->getAllGejala() as $no => $dGejala) {
                            // var_dump($dGejala);
                        ?>
                            <tr>
                                <td><?= ++$no ?></td>
                                <td><?= $dGejala->gejala_id ?></td>
                                <td><?= $dGejala->gejala_nama ?></td>
                                <td><?= $dGejala->gejala_cf ?></td>
                                <td>
                                    <a href="index.php?page=module/Gejala/edit&id=<?= $dGejala->gejala_id ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="index.php?page=module/Gejala/hapus&id=<?= $dGejala->gejala_id ?>" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        <?php }  ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>