<?php
include 'connect.php';
$id         = $_GET['id_pembeli'];
$pembeli  = mysqli_query($conn, "select * from pembeli where kd_pembeli='$id'");
$row        = mysqli_fetch_array($pembeli);

?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method="post" action="update-pembeli.php">
            <input type="hidden" value="<?php echo $row['kd_pembeli'];?>" name="kd_pembeli">
            <table>
                <tr><td>Kode Barang</td><td><input type="text" value="<?php echo $row['kd_pembeli'];?>" name="kd_pembeli"></td></tr>
				<tr><td>Nama Barang</td><td><input type="text" value="<?php echo $row['nm_pembeli'];?>" name="nm_pembeli"></td></tr>
				<tr><td>Merk</td><td><input type="text" value="<?php echo $row['jenis_kelamin'];?>" name="jenis_kelamin"></td></tr>
				<tr><td>Tipe</td><td><input type="text" value="<?php echo $row['alamat'];?>" name="alamat"></td></tr>
				<tr><td>Harga</td><td><input type="text" value="<?php echo $row['kota'];?>" name="kota"></td></tr>
				
                
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                        <a href="customer.php">Kembali</a></td></tr>
            </table>
        </form>
    </body>
</html>

