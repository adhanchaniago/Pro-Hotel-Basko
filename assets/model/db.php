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
}
