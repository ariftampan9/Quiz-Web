<?php
include "connect.php";

$kd_trx		= $_POST['kd_trx'];
$kd_brg		= $_POST['kd_brg'];
$kd_pembeli	= $_POST['kd_pembeli'];
$tgl_beli	= $_POST['tgl_beli'];



$query="INSERT INTO transaksi (kd_trx, kd_brg, kd_pembeli, tgl_beli) VALUES ('$kd_trx', '$kd_brg', '$kd_pembeli', '$tgl_beli')";
if (mysqli_query($conn, $query)) {
      header("location:transaksi.php");
} else {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>