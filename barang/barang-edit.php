<?php
include 'connect.php';
$id         = $_GET['id_barang'];
$barang  = mysqli_query($conn, "select * from barang where kd_brg='$id'");
$row        = mysqli_fetch_array($barang);

?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method="post" action="update-barang.php">
            <input type="hidden" value="<?php echo $row['kd_brg'];?>" name="kd_brg">
            <table>
                <tr><td>Kode Barang</td><td><input type="text" value="<?php echo $row['kd_brg'];?>" name="kd_brg"></td></tr>
				<tr><td>Nama Barang</td><td><input type="text" value="<?php echo $row['nm_brg'];?>" name="nm_brg"></td></tr>
				<tr><td>Merk</td><td><input type="text" value="<?php echo $row['merk'];?>" name="merk"></td></tr>
				<tr><td>Tipe</td><td><input type="text" value="<?php echo $row['type'];?>" name="type"></td></tr>
				<tr><td>Harga</td><td><input type="text" value="<?php echo $row['harga'];?>" name="harga"></td></tr>
				<tr><td>Stock</td><td><input type="text" value="<?php echo $row['stok'];?>" name="stok"></td></tr>
                
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                        <a href="index.php">Kembali</a></td></tr>
            </table>
        </form>
    </body>
</html>

