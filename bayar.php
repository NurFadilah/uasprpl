<?php
include "koneksi.php";
$id = $_GET['id'];
if($_SERVER["REQUEST_METHOD"] == "POST"){	
	$no_pemesanan = $_POST["no_pemesanan"];
	$dari_bank = $_POST["dari_bank"];
	$no_rekening= $_POST["no_rekening"];
	$nama_pengguna = $_POST["nama_pengguna"];
	$ke_bank = $_POST["ke_bank"];
	$jumlah_bayar = $_POST["jumlah"];
	
	
	$simpan = mysql_query("INSERT INTO bayar VALUES ('$no_pemesanan', '$dari_bank', '$no_rekening', '$nama_pengguna', '$kebank', '$jumlahbayar')");
	if ($simpan){
		mysql_query("UPDATE pemesan SET status_bayar = 'sudah_bayar' WHERE nopemesan = '$no_pemesanan'");
		echo"<script>
		alert('Data Berhasil Disimpan!!');
		window.location = 'index.php';
		</script>";
	}else{
		echo"<script>
		alert('Data GAGAL Disimpan!!');
		</script>";
	}
	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
<style type="text/css">
body,td,th {
	color: #F60;
}
body {
	background-color: #666;
}
</style>
</head>

<body>
<form action="" method="post">
<table width="100%" border="0">
  <tr>
    <th colspan="3"><p>www.pemesanankamarkosan.com</p></th>
  </tr>
  <tr>
    <th colspan="3">SILAHKAN LAKUKAN KONFIRMASI PEMESANAN </th>
  </tr>
  <tr>
    <th colspan="3" align="center"><p>&nbsp;</p>
      <table width="50%" border="0" align="left">
        <tr>
    	<td>No Pemesanan</td>
        <td>:</td>
        <td align="left"><input type="text" name="no_pemesanan" value="<?php echo $id; ?>"/></td>
    </tr>
    <tr>
    	<td>Dari Bank</td>
        <td>:</td>
        <td align="left"><input type="text" name="dari_bank" /></td>
    </tr>
    
    <tr>
    	<td>No Rekening</td>
        <td>:</td>
        <td align="left"><input type="text" name="no_rekening" /></td>
    </tr>
   
    <tr>
    	<td>Nama Pengguna</td>
        <td>:</td>
        <td align="left"><input type="text" name="nama_pengguna" /></td>
    </tr>
    <tr>
    	<td>Ke Bank </td>
        <td>:</td>
        <td align="left"><input type="text" name="ke_bank" /></td>
    </tr>
    <tr>
    	<td>Jumlah Bayar</td>
        <td>:</td>
        <td align="left"><input type="text" name="jumlah" /></td>
         <tr>
    	<td>Bukti Pembayaran </td>
        <td>:</td>
        <td align="left"><input name="gambar" type="file" /></td>
   
    </tr>
    <tr>
    	<td></td>
        <td></td>
    	<td align="left"><input type="submit" name="submit" value="Simpan" /> &nbsp;<input type="reset" value="Reset" />  &nbsp; <input type="button" value="Print" onclick="window.print();" /> &nbsp;
        
        <button type="button" onclick="window.location='index.php'">Kembali</button></td>
        
    </tr>
</table>
</form>
<p></p>
</body>
</html>