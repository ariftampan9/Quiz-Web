<?php
include "connect.php";

?>

<html>
<head>
       <title></title>
       <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	    <script type="text/javascript" src="js/jquery.js"></script>
	    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>

<form action="pembeli.php" method="get">
 
 <h2 align="center">Pembeli</h2>
 
 <label>Field : </label>
		<select class="custom-select" name="field">
			<?php $options = array('kd_pembeli', 'nm_pembeli', 'jenis_kelamin', 'alamat', 'kota');
			foreach ($options as $field) {
				$selected = @$_POST['field'] == $field ? ' selected="selected"' : '';
				echo '<option value="' . $field . '"' . $selected . '>' . $field . '</option>';
			}?>
              </select>
              <br>
              <br>	
<div align="right">
       <label>Cari :</label>
       <input type="text" name="cari">
       <input class="btn btn-primary btn-sm" type="submit" value="Cari">
</div>
 
</form>


<?php 
if(isset($_GET['cari'])){
 $cari = $_GET['cari'];
 echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>

    <table class="table table-hover" border="1" width="600px" align="center">
       <thead class="thead-dark">
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
		   
		   
		   
		   <td>
                     <a class="btn btn-warning btn-sm" href='<?php echo "pembeli-edit.php?id_pembeli=$a[kd_pembeli]"?>'>Edit</a>
                     <a class="btn btn-danger btn-sm" href='<?php echo "delete-pembeli.php?id_pembeli=$a[kd_pembeli]"?>'>Delete</a></td>  
           
       </tr>
<?php
}
?>
</tbody>

</table>
<a class="btn btn-primary" href='<?php echo "tambah-pembeli.php"?>'>Tambah Pembeli</a>
</body>
</html>