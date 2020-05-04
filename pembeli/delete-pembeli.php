<?php
include 'connect.php';

$id   = $_GET['id_pembeli'];

$query="DELETE from pembeli where kd_pembeli='$id'";
mysqli_query($conn, $query);

header("location:pembeli.php");
?>