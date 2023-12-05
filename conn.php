<?php
class Database
{

    var $host = "localhost";
    var $username = "root";
    var $password = "";
    // var $database = "dbbarangrumah";
    var $database = "penjualan";
    var $connect;

    function __construct()
    {
        $connect = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (!$this->connect) {
            //echo "Koneksi database MySQL dan PHP Berhasil ";
            $this->connect = $connect;
        } else {
            echo "Koneksi database MySQL dan PHP Gagal " . mysqli_connect_error();
        }
    }
}

$koneksi = new Database();

?>