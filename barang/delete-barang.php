<?php
include 'connect.php';

$id   = $_GET['id_barang'];

$query="DELETE from barang where kd_brg='$id'";
mysqli_query($conn, $query);

header("location:barang.php");
?>