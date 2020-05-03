
<?php
include "connect.php";

$kd_brg   	         = $_POST['kd_brg'];
$nm_brg  	         = $_POST['nm_brg'];
$merk    	  	     = $_POST['merk'];
$type			     = $_POST['type'];
$harga         		 = $_POST['harga'];
$stok         		 = $_POST['stok'];

$query="UPDATE barang SET kd_brg='$kd_brg',nm_brg='$nm_brg',merk='$merk',type='$type',harga='$harga', stok='$stok' where kd_brg='$kd_brg'";
if (mysqli_query($conn, $query)) {
      header("location:barang.php");
} else {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>


