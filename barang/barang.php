<?php
include "connect.php";

?>

<html>
<head>
       <title></title>
</head>
<body>

<form action="barang.php" method="get">
 
 
 
 <label>Field : </label>
		<select name="field">
			<?php $options = array('kd_brg', 'nm_brg', 'Manajemen Informatika', 'DKV', 'Telekomunikasi');
			foreach ($options as $field) {
				$selected = @$_POST['field'] == $field ? ' selected="selected"' : '';
				echo '<option value="' . $field . '"' . $selected . '>' . $field . '</option>';
			}?>
		</select>
		
 <label>Cari :</label>
 <input type="text" name="cari">
 
 <input type="submit" value="Cari">
</form>


<?php 
if(isset($_GET['cari'])){
 $cari = $_GET['cari'];
 echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>






    <table border="1" width="600px" align="center">
       <thead>
       <tr>
           <th>Kode Barang</th>
           <th>Nama Barang</th>
           <th>Merk</th>
		   <th>Type</th>
		   <th>Harga</th>
		   <th>Stock</th>
		   <th>Action</th>
       </tr>
       </thead>

       <tbody>
	   
	   
	   
	   
<?php

if(isset($_GET['field'], $_GET['cari'])){
  $cari = $_GET['cari'];
  $field = $_GET['field'];
  $data = mysqli_query($conn,"select * from barang where ".$field." like '%".$cari."%'");    
 }
 else{
  $data = mysqli_query($conn,"select * from barang");  
 }

while($a = mysqli_fetch_array($data)){
    ?>
       <tr>
           <td><?php echo $a['kd_brg'];?></td>
		   <td><?php echo $a['nm_brg'];?></td>
		   <td><?php echo $a['merk'];?></td>
		   <td><?php echo $a['type'];?></td>
		   <td><?php echo $a['harga'];?></td>
		   <td><?php echo $a['stok'];?></td>
		   
		   
		   <td><a href='<?php echo "barang-edit.php?id_barang=$a[kd_brg]"?>'>Edit</a>
               <a href='<?php echo "delete-barang.php?id_barang=$a[kd_brg]"?>'>Delete</a></td>  
           
       </tr>
<?php
}
?>
</tbody>

</table>
<a href='<?php echo "tambah-barang.php"?>'>Tambah Barang</a>
</body>
</html>