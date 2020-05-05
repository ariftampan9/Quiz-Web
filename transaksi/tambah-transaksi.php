<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Transaksi</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	    <script type="text/javascript" src="js/jquery.js"></script>
	    <script type="text/javascript" src="js/bootstrap.js"></script>
    </head>
    <body>
    <h2 align="center">Tambah Transaksi</h2>
        <form method="post" action="simpan-transaksi.php">
            <table class="table">
                <tr><td>Kode Transaksi</td><td><input type="number" name="kd_trx"></td></tr>
				<tr><td>Kode Barang</td><td><input type="number" name="kd_brg"></td></tr>
				<tr><td>Kode Pembeli</td><td><input type="number" name="kd_pembeli"></td></tr>
				
                
				<tr><td><label for="tgl_beli">Tanggal Pembelian:</label>
  <input type="datetime-local" id="tgl_beli" name="tgl_beli"></td></tr>
				
				
				
                <tr><td colspan="2" align="right">
                    <button class="btn btn-primary" type="submit" value="simpan">SIMPAN</button></td></tr>
            </table>
        </form>
        </html>

    </body>