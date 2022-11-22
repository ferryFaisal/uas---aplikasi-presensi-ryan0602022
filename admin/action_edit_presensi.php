<?php
require('connect_db.php');

$nim           = $_POST['nim'];
$nama          = $_POST['nama'];
$presensi       = $_POST['presensi'];

$query  = "UPDATE presensi SET nim = '$nim', nama = '$nama', presensi = '$presensi'";
$query .= "WHERE nim = '$nim'";
$result = mysqli_query($conn, $query);
if (!$result) {
  die("Query gagal dijalankan: " . mysqli_errno($conn) .
    " - " . mysqli_error($conn));
} else {
  echo "<script>alert('Data berhasil diubah.');window.location='tables_presensi.php';</script>";
}

