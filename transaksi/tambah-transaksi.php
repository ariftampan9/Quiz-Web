<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <form method="post" action="simpan-transaksi.php">
            <table>
                <tr><td>Kode Transaksi</td><td><input type="number" name="kd_trx"></td></tr>
				<tr><td>Kode Barang</td><td><input type="number" name="kd_brg"></td></tr>
				<tr><td>Kode Pembeli</td><td><input type="number" name="kd_pembeli"></td></tr>
				
                
				<tr><td><label for="tgl_beli">Tanggal Pembelian:</label>
  <input type="datetime-local" id="tgl_beli" name="tgl_beli"></td></tr>
				
				
				
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
            </table>
        </form>
    </body>
</html>
