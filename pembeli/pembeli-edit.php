<?php
include 'connect.php';
$id         = $_GET['id_pembeli'];
$pembeli  = mysqli_query($conn, "select * from pembeli where kd_pembeli='$id'");
$row        = mysqli_fetch_array($pembeli);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Pembeli</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	    <script type="text/javascript" src="js/jquery.js"></script>
	    <script type="text/javascript" src="js/bootstrap.js"></script>
    </head>
    <body>
        <h2 align="center">Edit Pembeli</h2>
        <form method="post" action="update-pembeli.php">
            <input type="hidden" value="<?php echo $row['kd_pembeli'];?>" name="kd_pembeli">
            <table class="table">
                <tr><td>Kode Barang</td><td><input type="text" value="<?php echo $row['kd_pembeli'];?>" name="kd_pembeli"></td></tr>
				<tr><td>Nama Barang</td><td><input type="text" value="<?php echo $row['nm_pembeli'];?>" name="nm_pembeli"></td></tr>
				<tr><td>Merk</td><td><input type="text" value="<?php echo $row['jenis_kelamin'];?>" name="jenis_kelamin"></td></tr>
				<tr><td>Tipe</td><td><input type="text" value="<?php echo $row['alamat'];?>" name="alamat"></td></tr>
				<tr><td>Harga</td><td><input type="text" value="<?php echo $row['kota'];?>" name="kota"></td></tr>
				
                
                <tr><td colspan="2" align="right">
                    <button class="btn btn-primary" type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                    <a class="btn btn-warning" href="customer.php">Kembali</a></td></tr>
            </table>
        </form>
    </body>
</html>

