<?php
$host = "sql204.infinityfree.com";
$user = "if0_42021765";
$pass = "OjoV3ixdX8u"; 
$db   = "if0_42021765_perpustakaan";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>