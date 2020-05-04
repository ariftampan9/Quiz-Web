<?php
include "connect.php";

?>

<html>
<head>
       <title></title>
</head>
<body>

<form action="pembeli.php" method="get">
 
 
 
 <label>Field : </label>
		<select name="field">
			<?php $options = array('kd_pembeli', 'nm_pembeli', 'jenis_kelamin', 'alamat', 'kota');
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
           <th>Nama Pembeli</th>
           <th>Jenis Kelamin</th>
           <th>Alamat</th>
		   <th>Kota</th>
		   
		   <th>Action</th>
       </tr>
       </thead>

       <tbody>
	   
	   
	   
	   
<?php

if(isset($_GET['field'], $_GET['cari'])){
  $cari = $_GET['cari'];
  $field = $_GET['field'];
  $data = mysqli_query($conn,"select * from pembeli where ".$field." like '%".$cari."%'");    
 }
 else{
  $data = mysqli_query($conn,"select * from pembeli");  
 }

while($a = mysqli_fetch_array($data)){
    ?>
       <tr>
           
		   <td><?php echo $a['nm_pembeli'];?></td>
		   <td><?php echo $a['jenis_kelamin'];?></td>
		   <td><?php echo $a['alamat'];?></td>
		   <td><?php echo $a['kota'];?></td>
		   
		   
		   
		   <td><a href='<?php echo "pembeli-edit.php?id_pembeli=$a[kd_pembeli]"?>'>Edit</a>
               <a href='<?php echo "delete-pembeli.php?id_pembeli=$a[kd_pembeli]"?>'>Delete</a></td>  
           
       </tr>
<?php
}
?>
</tbody>

</table>
<a href='<?php echo "tambah-pembeli.php"?>'>Tambah Pembeli</a>
</body>
</html>