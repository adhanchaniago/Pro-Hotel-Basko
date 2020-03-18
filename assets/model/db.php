<?php
// session_start();
include 'conf.php';

class Db extends Conf
{
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

        $query = "INSERT INTO tb_Pengguna VALUES ('','$username', '$password', '$nama', '$telp')";
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

        $query = "UPDATE `tb_Pengguna` SET  `Pengguna_username`   = '$username',
                                            `Pengguna_password`   = '$password',
                                            `Pengguna_nama`       = '$nama',
                                            `Pengguna_telp`       = '$telp'
                                            WHERE 
                                            `Pengguna_id`         = '$id'";
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
        $query = $this->get("SELECT * FROM tb_Kamar LEFT JOIN tb_Tipe_kamar ON tb_Kamar.tipe_kamar_id = tb_Tipe_kamar.tipe_kamar_id");
        return $query;
    }
    public function getAllBooking()
    {
        $query = $this->get("   SELECT * FROM tb_Kamar 
                                LEFT JOIN tb_Tipe_kamar 
                                ON tb_Kamar.tipe_kamar_id = tb_Tipe_kamar.tipe_kamar_id
                                WHERE tb_Kamar.kamar_status = 'Tersedia' ");
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
        $conn->query($query);

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

    // public function uKamar($data)
    // {
    //     global $conn;

    //     $id        = $data['id'];
    //     $tipe      = $data['tipe'];
    //     $nomor     = $data['nomor'];
    //     $harga     = $data['harga'];
    //     $fasilitas = $data['fasilitas'];
    //     $status    = $data['status'];


    //     $query = "UPDATE `tb_Kamar` SET `tipe_kamar_id`='$tipe',
    //                                     `kamar_no`='$nomor',
    //                                     `kamar_harga`='$harga',
    //                                     `kamar_fasilitas`='$fasilitas',
    //                                     `kamar_status`='$status' 
    //                                     WHERE 
    //                                     `kamar_id`='$id'";
    //     // echo $query;
    //     // exit;
    //     $conn->query($query);

    //     return $conn->affected_rows;
    // }
}
