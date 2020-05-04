<?php
include "connect.php";

$kd_pembeli			= $_POST['kd_pembeli'];
$nm_pembeli	        = $_POST['nm_pembeli'];
$jenis_kelamin		= $_POST['jenis_kelamin'];
$alamat				= $_POST['alamat'];
$kota				= $_POST['kota'];


$query="INSERT INTO pembeli (kd_pembeli, nm_pembeli, jenis_kelamin, alamat, kota) VALUES ('$kd_pembeli', '$nm_pembeli', '$jenis_kelamin', '$alamat', '$kota')";
if (mysqli_query($conn, $query)) {
      header("location:pembeli.php");
} else {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>