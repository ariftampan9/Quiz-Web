<?php
include "connect.php";

?>

<html>
<head>
       <title>Transaksi</title>
       <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	    <script type="text/javascript" src="js/jquery.js"></script>
	    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
<h2 align="center">Transaksi</h2>
    <table class="table" border="1" width="600px" align="center">
       <thead class="thead-dark">
       <tr>
           <th>Kode Transaksi</th>
           <th>Tanggal Pembelian</th>
           <th>Detail Pembeli</th>
		   <th>Detail Barang</th>
		   
		   <th>Harga Barang</th>
       </tr>
       </thead>

       <tbody>   
	   
<?php

$data = mysqli_query($conn,"select * from transaksi 
INNER join barang
on barang.kd_brg=transaksi.kd_brg
INNER join pembeli
on pembeli.kd_pembeli=transaksi.kd_pembeli");  


while($a = mysqli_fetch_array($data)){
    ?>
       <tr>
           
		   <td><?php echo $a['kd_trx'];?></td>
		   <td><?php echo $a['tgl_beli'];?></td>
		   <td><?php echo $a['nm_pembeli']. "-" .$a['kota'];?></td>
		   <td><?php echo $a['type']. "-" .$a['merk'];?></td>
		   <td><?php echo $a['harga'];?></td>  
           
       </tr>
<?php
}
?>
</tbody>

</table>
<a class="btn btn-primary" href='<?php echo "tambah-transaksi.php"?>'>Tambah Transaksi</a>
</body>
</html>