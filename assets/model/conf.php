<?php
// error_reporting(0);
$conn = mysqli_connect('localhost', 'root', '', 'db_basko_hotel');
// Check connection
if ($conn->connect_errno) {
    echo "Failed to connect to Database : " . $conn->connect_error;
    exit();
}

class Conf
{
    public function get($query)
    {
        global $conn;

        $ambil = $conn->query($query);
        $hasil = [];
        while ($pecah = $ambil->fetch_object()) {
            $hasil[] = $pecah;
        }
        return $hasil;
    }
}
