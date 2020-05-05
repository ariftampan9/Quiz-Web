<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Barang</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	    <script type="text/javascript" src="js/jquery.js"></script>
	    <script type="text/javascript" src="js/bootstrap.js"></script>
        
    </head>
    <body>
    <h2 align="center">Tambah Barang</h2>
        <form method="post" action="simpan-barang.php">
            <table class="table table-hover">
                <tr><td>Kode Barang</td><td><input type="number" name="kd_brg"></td></tr>
                <tr><td>Nama Barang</td><td><input type="text" name="nm_brg"></td></tr>
                <tr><td>Merk</td><td><input type="text" name="merk"></td></tr>
				<tr><td>Tipe</td><td><input type="text" name="type"></td></tr>
				<tr><td>Harga</td><td><input type="text" name="harga"></td></tr>
				<tr><td>Stock</td><td><input type="text" name="stok"></td></tr>
				
				
                <tr><td colspan="2" align="right">
                    <button class="btn btn-primary" type="submit" value="simpan">SIMPAN</button></td></tr>
            </table>
        </form>
    </body>
</html>
