<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "forum_bio";

$koneksi = new mysqli($hostname, $username, $password, $database);

if ($koneksi -> connect_error) {
    die ("Database Tidak Terkoneksi".$koneksi -> connect_error);
}

?>
