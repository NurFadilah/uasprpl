<?php
include "koneksi.php";
$id = $_GET['id'];
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$no = $_POST["no_pemesanan"];
	$nama = $_POST["nama_pemesan"];
	$ttl = $_POST["ttl"];
	$alamat = $_POST["alamat"];
	$informasi = $_POST["informasi"];
	$kode = $_POST["kode"];
	$no_telp = $_POST["no_telp"];
	$nik = $_POST["nik"];
	$jk = $_POST["jk"];
	
	$simpan = mysql_query("INSERT INTO pemesan VALUES ('$no', '$nama', '$jk', '$alamat', '$kode', '$no_telp', '$nik', 'belum_bayar')");
	if ($simpan){
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

$query = mysql_fetch_array(mysql_query("SELECT MAX(nopemesan) AS max FROM pemesan"));
$last = $query['max'] + 1;
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
</head>

<body>
<form action="" method="post">
<table width="100%" border="0" bgcolor="#FF6600">
  <tr>
    <th colspan="3"><p>www.pemesanankamarkosan.com</p>
    <p>&nbsp;</p></th>
  </tr>
  <tr>
    <th colspan="3">SELAMAT DATANG DI KOSAN NUFA    </th>
  </tr>
  <tr>
    <th colspan="3"><br />
    <table width="50%" border="0" align="left">
    <tr>
    	<td>No Pemesanan</td>
        <td>:</td>
        <td align="left"><input type="text" name="no_pemesanan" value="<?php echo $last; ?>"/></td>
    </tr>
    <tr>
    	<td>Nama Pemesan</td>
        <td>:</td>
        <td align="left"><input type="text" name="nama_pemesan" /></td>
    </tr>
    <tr>
    	<td>Jenis Kelamin</td>
        <td>:</td>
        <td align="left"><select name="jk">
        	<option value="">--Pilih--</option>
            <option value="pria">Pria</option>
            <option value="wanita">Wanita</option>
        </select></td>
    </tr>
        <tr>
    	<td>Alamat</td>
        <td>:</td>
        <td align="left"><textarea name="alamat" cols="30" rows="5"></textarea></td>
    </tr>
      <tr>
    	<td>Kode Kamar</td>
        <td>:</td>
        <td align="left"><input type="text" name="kode" value="<?php echo $id; ?>" width="3"/></td>
    </tr>
    <tr>
    	<td>No Telp</td>
        <td>:</td>
        <td align="left"><input type="text" name="no_telp" /></td>
    </tr>
    <tr>
    	<td>NIK</td>
        <td>:</td>
        <td align="left"><input type="text" name="nik" /></td>
    </tr>
    <tr>
    	<td></td>
        <td></td>
    	<td align="left"><input type="submit" name="submit" value="Simpan" /> &nbsp;<input type="reset" value="Reset" /> &nbsp;
        <button type="button" onclick="window.location='index.php'">Kembali</button></td>
    </tr>
</table>
</form>
<p></p>
</body>
</html>