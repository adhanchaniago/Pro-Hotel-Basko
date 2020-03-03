<div class="container">

    <div class="row">

        <div class="col-md-12 mb-5 mt-5">
            <h2>Data Solusi</h2>
            <hr>
            <div class="table-responsive">
                <a href="?page=module/Solusi/tambah" class="btn btn-primary ">Tambah Data</a>
                <br><br>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="10px">No</th>
                            <th>Nama Penyakit</th>
                            <th>Solusi</th>
                            <th width="131px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($db->getAllSolusi() as $no => $dSolusi) {
                            // var_dump($dSolusi);
                        ?>
                            <tr>
                                <td><?= ++$no ?></td>
                                <td><?= $dSolusi->penyakit_id ?></td>
                                <td><?= $dSolusi->solusi_ket ?></td>

                                <td>
                                    <a href="index.php?page=module/Solusi/edit&id=<?= $dSolusi->solusi_id ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="index.php?page=module/Solusi/hapus&id=<?= $dSolusi->solusi_id ?>" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        <?php }  ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>