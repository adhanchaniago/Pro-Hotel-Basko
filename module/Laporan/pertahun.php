<?php
include '../../assets/model/db.php';
include '../../assets/libs/helper/helper.php';
$db = new Db();
$tahun = $_POST['tahun'];
$data = $db->laporanPerbulan($tahun);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Basko Hotel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap core CSS -->
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../assets/css/business-frontpage.css" rel="stylesheet">

    <link href="../../assets/dataTables/dataTables.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="../../assets/gambar/logo.png" alt="">
            </div>
            <div class="col-md-9">
                <h2>Basko Premier Hotel</h2>
                <p>
                    Telp. (0751) 4488888 | Website : <a href="http://www.baskohotel.com/"><i>baskohotel.com</i></a><br>
                    Jl. Prof. Dr. Hamka No.2a, Air Tawar Timur, Kec. Padang Utara, Kota Padang, Sumatera Barat 25132
                </p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-12 mb-5 mt-5">
                <h2>Data Laporan Partahun <?php echo $tahun ?></h2>
                <hr>
                <div class="table-responsive">
                    <table class="table table-bordered display" id="" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="10px">No</th>
                                <th>Nama</th>
                                <th>Tanggal Checkin</th>
                                <th>Tanggal Checkout</th>
                                <th>Nomor Kamar</th>
                                <th>Tipe Kamar</th>
                                <th>Total Tarif</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data as $no => $row) :
                                $total += $row->pembayaran_nominal;
                            ?>
                                <tr>
                                    <td><?php echo ++$no ?></td>
                                    <td><?php echo $row->reservasi_nama ?></td>
                                    <td><?php echo tgl_indo($row->reservasi_masuk) ?></td>
                                    <td><?php echo tgl_indo($row->reservasi_keluar) ?></td>
                                    <td><?php echo $row->kamar_no ?></td>
                                    <td><?php echo $row->tipe_kamar_nama ?></td>
                                    <td><?php echo rupiah($row->pembayaran_nominal) ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6">Total</td>
                                <td><?php echo rupiah($total) ?></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-9"></div>
            <div class="col-md-3">
                <h6 class="mb-5">Padang, <?php echo tgl_indo(date('Y-m-d')) ?>
                    <br>
                    <br>
                    Pimpinan
                    <br>
                    <br>
                    <br>
                    <br>
                    ...................
                </h6>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="../../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/dataTables/JquerydataTables.js"></script>
    <script src="../../assets/dataTables/dataTablesBos.js"></script>
    <script>
        // Call the dataTables jQuery plugin
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
    <script>
        window.print()
    </script>
</body>

</html>