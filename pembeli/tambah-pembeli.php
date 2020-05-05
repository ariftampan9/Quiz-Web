<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Pembeli</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	    <script type="text/javascript" src="js/jquery.js"></script>
	    <script type="text/javascript" src="js/bootstrap.js"></script>
        
    </head>
    <body>
        <h2 align="center">Tambah Pembeli</h2>
        <form method="post" action="simpan-pembeli.php">
            <table class="table">
                <tr><td>Kode Pembeli</td><td><input type="number" name="kd_pembeli"></td></tr>
                <tr><td>Nama Pembeli</td><td><input type="text" name="nm_pembeli"></td></tr>
                <tr><td>Jenis Kelamin</td><td><input type="text" name="jenis_kelamin"></td></tr>
				<tr><td>Alamat</td><td><input type="text" name="alamat"></td></tr>
				<tr><td>Kota</td><td><input type="text" name="kota"></td></tr>
				
				
				
                <tr><td colspan="2" align="right">
                    <button class="btn btn-primary btn-sm" type="submit" value="simpan">SIMPAN</button></td></tr>
            </table>
        </form>
    </body>
</html>
