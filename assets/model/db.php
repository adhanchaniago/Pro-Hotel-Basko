<?php
session_start();
include 'conf.php';

class Db extends Conf
{
    public function Login($data)
    {
        global $conn;
        $user  = $data['username'];
        $pass  = $data['password'];

        $query = "SELECT * FROM tb_Pengguna WHERE pengguna_username = '$user' AND pengguna_password = '$pass' ";
        $ambil = $conn->query($query);
        $cek = $ambil->num_rows;

        if ($cek == 1) {
            $_SESSION['akun'] = $ambil->fetch_object();
            echo "
                <script>alert('Berhasil Login');
                window.location='index.php'</script>
                ";
        } else {
            echo "
                <script>
                alert('Gagal Login');
                window.location='login.php'
                </script>
                ";
        }
    }

    // Pengguna CRUD
    public function getAllPengguna()
    {
        $query = $this->get("SELECT * FROM tb_Pengguna");
        return $query;
    }

    public function addPengguna($data)
    {
        global $conn;

        $username = $data['username'];
        $password = $data['password'];
        $nama     = $data['nama'];
        $telp     = $data['telp'];
        $level    = $data['level'];

        $query = "INSERT INTO tb_Pengguna ( pengguna_username,
                                            pengguna_password,
                                            pengguna_nama,
                                            pengguna_telp,
                                            pengguna_level) 
                                            VALUES (
                                                '$username', 
                                                '$password', 
                                                '$nama', 
                                                '$telp', 
                                                '$level')";
        $conn->query($query);
        // echo $query;
        // exit;
        return $conn->affected_rows;
    }

    public function dPengguna($id)
    {
        global $conn;
        $query = "DELETE FROM tb_Pengguna WHERE Pengguna_id = '$id'";
        $conn->query($query);

        return $conn->affected_rows;
    }

    public function getOnePengguna($id)
    {
        $query = $this->get("SELECT * FROM tb_Pengguna WHERE Pengguna_id = '$id'")[0];
        return $query;
    }

    public function uPengguna($data)
    {
        global $conn;

        $id       = $data['id'];
        $username = $data['username'];
        $password = $data['password'];
        $nama     = $data['nama'];
        $telp     = $data['telp'];
        $level    = $data['level'];

        $query = "UPDATE `tb_Pengguna` SET  `pengguna_username` = '$username',
                                            `pengguna_password` = '$password',
                                            `pengguna_nama`     = '$nama',
                                            `pengguna_telp`     = '$telp',
                                            `pengguna_level`    = '$level'
                                            WHERE 
                                            `pengguna_id`         = '$id'";
        // echo $query;
        // exit;
        $conn->query($query);

        return $conn->affected_rows;
    }

    // Tipe Kamar CRUD
    public function getAllTipeKamar()
    {
        $query = $this->get("SELECT * FROM tb_Tipe_kamar");
        return $query;
    }

    public function addTipeKamar($data)
    {
        global $conn;
        $tipe = $data['tipe'];

        $query = "INSERT INTO tb_Tipe_kamar VALUES ('','$tipe')";
        $conn->query($query);
        // echo $query;
        // exit;
        return $conn->affected_rows;
    }

    public function dTipeKamar($id)
    {
        global $conn;
        $query = "DELETE FROM tb_Tipe_kamar WHERE Tipe_Kamar_id = '$id'";
        $conn->query($query);

        return $conn->affected_rows;
    }

    public function getOneTipeKamar($id)
    {
        $query = $this->get("SELECT * FROM tb_Tipe_kamar WHERE Tipe_kamar_id = '$id'")[0];
        return $query;
    }

    public function uTipeKamar($data)
    {
        global $conn;

        $id   = $data['id'];
        $tipe = $data['tipe'];


        $query = "UPDATE `tb_Tipe_kamar` SET    `tipe_kamar_nama`   = '$tipe'
                                                WHERE
                                                `tipe_kamar_id`         = '$id'";
        // echo $query;
        // exit;
        $conn->query($query);

        return $conn->affected_rows;
    }

    // Kamar CRUD
    public function getAllKamar()
    {
        $query = $this->get("SELECT * FROM tb_Kamar LEFT JOIN tb_Tipe_kamar ON tb_Kamar.tipe_kamar_id = tb_Tipe_kamar.tipe_kamar_id ");
        return $query;
    }
    public function getAllKamarTersedia()
    {
        $query = $this->get("   SELECT * FROM tb_Kamar 
                                LEFT JOIN tb_Tipe_kamar 
                                ON tb_Kamar.tipe_kamar_id = tb_Tipe_kamar.tipe_kamar_id
                                WHERE tb_Kamar.kamar_status = 'Tersedia' ORDER BY tb_Tipe_kamar.tipe_kamar_nama ASC ");
        return $query;
    }

    public function addKamar($data)
    {
        global $conn;
        $tipe      = $data['tipe'];
        $nomor     = $data['nomor'];
        $harga     = $data['harga'];
        $fasilitas = $data['fasilitas'];
        $status    = "Tersedia";

        $query = "INSERT INTO `tb_Kamar`(   `tipe_kamar_id`, 
                                            `kamar_no`, 
                                            `kamar_harga`, 
                                            `kamar_fasilitas`, 
                                            `kamar_status`) VALUES (
                                                '$tipe',
                                                '$nomor',
                                                '$harga',
                                                '$fasilitas',
                                                '$status'
                                                )";
        $conn->query($query);
        // echo $query;
        // exit;
        return $conn->affected_rows;
    }

    public function dKamar($id)
    {
        global $conn;
        $query = "DELETE FROM tb_Kamar WHERE kamar_id = '$id'";
        $conn->query($query);

        return $conn->affected_rows;
    }

    public function getOneKamar($id)
    {
        $query = $this->get("SELECT * FROM tb_Kamar WHERE kamar_id = '$id'")[0];
        return $query;
    }

    public function uKamar($data)
    {
        global $conn;

        $id        = $data['id'];
        $tipe      = $data['tipe'];
        $nomor     = $data['nomor'];
        $harga     = $data['harga'];
        $fasilitas = $data['fasilitas'];
        $status    = $data['status'];


        $query = "UPDATE `tb_Kamar` SET `tipe_kamar_id`='$tipe',
                                        `kamar_no`='$nomor',
                                        `kamar_harga`='$harga',
                                        `kamar_fasilitas`='$fasilitas',
                                        `kamar_status`='$status' 
                                        WHERE 
                                        `kamar_id`='$id'";
        // echo $query;
        // exit;
        $conn->query($query);

        return $conn->affected_rows;
    }

    // Reservasi CRUD
    public function getAllReservasi()
    {
        $query = $this->get("   SELECT * FROM tb_Reservasi 
                                LEFT JOIN tb_Kamar 
                                ON tb_Reservasi.kamar_id=tb_Kamar.kamar_id
                                LEFT JOIN tb_Tipe_kamar 
                                ON tb_Tipe_kamar.tipe_kamar_id=tb_Kamar.tipe_kamar_id");
        return $query;
    }

    public function addReservasi($data)
    {
        global $conn;
        $kamar    = $data['kamar'];
        $checkin  = $data['checkin'];
        $checkout = $data['checkout'];
        $nama     = $data['nama'];
        $telp     = $data['telp'];
        $alamat   = $data['alamat'];
        $status   = "Booking";

        $queryReservasi = "INSERT INTO `tb_Reservasi`(   `kamar_id`, 
                                                `reservasi_nama`, 
                                                `reservasi_tlp`, 
                                                `reservasi_alamat`, 
                                                `reservasi_masuk`, 
                                                `reservasi_keluar`, 
                                                `reservasi_status`) 
                                                VALUES (
                                                '$kamar',
                                                '$nama',
                                                '$telp',
                                                '$alamat',
                                                '$checkin',
                                                '$checkout',
                                                '$status'
                                                )";

        $queryKamar = "UPDATE `tb_Kamar` SET `kamar_status`= 'Berisi' WHERE `kamar_id`='$kamar'";
        $conn->query($queryKamar);
        $conn->query($queryReservasi);
        // echo $queryKamar . "<br>";
        // echo $queryReservasi . "<br>";
        // exit;
        return $conn->affected_rows;
    }

    public function dReservasi($id)
    {
        global $conn;
        $query = "DELETE FROM tb_Reservasi WHERE reservasi_id = '$id'";
        $ambil_kamar = $this->getOneReservasi($id);
        $pilih_kamar = $ambil_kamar->kamar_id;

        $query_update_status_kamar = "  UPDATE `tb_Kamar`
                                        SET kamar_status = 'Tersedia'
                                        WHERE kamar_id = '$pilih_kamar'
                                    ";
        $conn->query($query);
        $conn->query($query_update_status_kamar);

        return $conn->affected_rows;
    }

    public function getOneReservasi($id)
    {
        $query = $this->get("   SELECT * FROM tb_Reservasi 
                                    LEFT JOIN tb_Kamar ON tb_Reservasi.kamar_id=tb_Kamar.kamar_id 
                                    LEFT JOIN tb_Tipe_kamar ON tb_Kamar.tipe_kamar_id=tb_Tipe_kamar.tipe_kamar_id 
                                    WHERE reservasi_id = '$id'")[0];
        return $query;
    }

    public function prosesCheckout($data)
    {
        global $conn;

        $id           = $data['id'];
        $checkout     = $data['checkout'];
        $total_bayar  = $data['total_bayar'];
        $uang_bayar   = $data['uang_bayar'];
        $uang_kembali = $data['uang_kembali'];

        $ambil_kamar = $this->getOneReservasi($id);
        $pilih_kamar = $ambil_kamar->kamar_id;

        $query_update_status_kamar = "  UPDATE `tb_Kamar`
                                            SET kamar_status = 'Tersedia'
                                            WHERE kamar_id = '$pilih_kamar'
                                        ";

        $query_tambah_pembayaran = "INSERT INTO `tb_Pembayaran` ( `reservasi_id`,
                                                    `pembayaran_tgl`,
                                                    `pembayaran_nominal`,
                                                    `pembayaran_uang_bayar`,
                                                    `pembayaran_kembalian`
                                                    ) VALUES
                                                    ('$id',
                                                    '$checkout',
                                                    '$total_bayar',
                                                    '$uang_bayar',
                                                    '$uang_kembali')";

        $query_update_status_reservasi = "  UPDATE `tb_Reservasi`
                                                SET reservasi_status = 'Selesai'
                                                WHERE reservasi_id = '$id'
                                                ";

        $conn->query($query_update_status_kamar);
        $conn->query($query_update_status_reservasi);
        $conn->query($query_tambah_pembayaran);

        return $conn->affected_rows;
    }

    public function prosesPerpanjang($data)
    {
        global $conn;

        $id           = $data['id'];
        $checkout     = $data['checkout'];

        $query_update_checkout_reservasi = "    UPDATE `tb_Reservasi`
                                                    SET reservasi_keluar = '$checkout'
                                                    WHERE reservasi_id = '$id'
                                                    ";

        $conn->query($query_update_checkout_reservasi);

        return $conn->affected_rows;
    }

    public function prosesCheckin($data)
    {
        global $conn;

        $id           = $data['id'];

        $query_update_status_reservasi = "  UPDATE `tb_Reservasi`
                                                SET reservasi_status = 'Checkin'
                                                WHERE reservasi_id = '$id'
                                                ";
        // echo $query_update_status_reservasi;
        // exit;
        $conn->query($query_update_status_reservasi);

        return $conn->affected_rows;
    }

    public function laporanPerhari($hari)
    {
        $query = $this->get("   SELECT * FROM tb_Pembayaran 
                                JOIN tb_Reservasi
                                ON tb_Pembayaran.reservasi_id =tb_Reservasi.reservasi_id 
                                JOIN tb_Kamar
                                ON tb_Reservasi.kamar_id =tb_Kamar.kamar_id 
                                JOIN tb_Tipe_kamar
                                ON tb_Kamar.tipe_kamar_id =tb_Tipe_kamar.tipe_kamar_id 
                                WHERE tb_Pembayaran.pembayaran_tgl = '$hari'");
        return $query;
    }

    public function laporanPerbulan($bulan)
    {
        $bulan;
        $query = $this->get("   SELECT * FROM tb_Pembayaran 
                                JOIN tb_Reservasi
                                ON tb_Pembayaran.reservasi_id =tb_Reservasi.reservasi_id 
                                JOIN tb_Kamar
                                ON tb_Reservasi.kamar_id =tb_Kamar.kamar_id 
                                JOIN tb_Tipe_kamar
                                ON tb_Kamar.tipe_kamar_id =tb_Tipe_kamar.tipe_kamar_id 
                                WHERE tb_Pembayaran.pembayaran_tgl LIKE '%$bulan%'");
        return $query;
    }

    public function laporanTahun($tahun)
    {
        $tahun;
        $query = $this->get("   SELECT * FROM tb_Pembayaran 
                                JOIN tb_Reservasi
                                ON tb_Pembayaran.reservasi_id =tb_Reservasi.reservasi_id 
                                JOIN tb_Kamar
                                ON tb_Reservasi.kamar_id =tb_Kamar.kamar_id 
                                JOIN tb_Tipe_kamar
                                ON tb_Kamar.tipe_kamar_id =tb_Tipe_kamar.tipe_kamar_id 
                                WHERE tb_Pembayaran.pembayaran_tgl LIKE '%$tahun%'");
        return $query;
    }
}
