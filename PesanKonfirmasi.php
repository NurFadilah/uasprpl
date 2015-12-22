<?php
include "koneksi.php";
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
<style>
table{
	border-collapse:collapse;
}
body{
	font:Arial;
}
</style>
</head>

<body>
<table width="100%" border="0">
  <tr>
    <th colspan="3">www.pemesanankamarkosan.com</th>
  </tr>
  <tr>
    <th colspan="3">SELAMAT DATANG DI KOSAN NUFA    </th>
  </tr>
  <tr>
    <th colspan="3">
    
    <table width="100%" border="1">
    	<tr>
        	<td>No.</td>
            <td>Nama Pemesan</td>
            <td>Jenis Kelamin</td>
            <td>Alamat</td>
            <td>Kode Kamar</td>
            <td>No Telp</td>
            <td>NIK</td>
            <td>Status</td>
        </tr>
    <?php
	$query = mysql_query("SELECT*FROM pemesan ORDER BY nopemesan DESC");
	while($d = mysql_fetch_array($query)){
		echo"
		<tr>
			<td>$d[nopemesan]</td>
			<td>$d[namapemesan]</td>
			<td>$d[jeniskelamin]</td>
			<td>$d[alamat]</td>
			<td>$d[kodekamar]</td>
			<td>$d[notelp]</td>
			<td>$d[nik]</td>
			<td><div align='center'>";
			if($d[status_bayar] == 'belum_bayar'){
				echo "<a href='bayar.php?id=$d[nopemesan]'>Bayar</a>";
			}else{
				echo "Sudah Bayar";
			}echo"</div></td>
		</tr>";
	}
    ?>
    </th>
	</table><br />
<br />

  </tr>

  <tr>
    <th width="33%"><button type="button" onclick="window.location='TentangKami.php'">Tentang Kami</button></th>
    <th width="33%"><button type="button" onclick="window.location='TelusuriKamar.php'">Cari  Kamar</button></th>
    <th width="33%"><button type="button" onclick="window.location='PesanKonfirmasi.php'">Bayar Kamar</button></th>
   
     <input type="button" value="Print" onclick="window.print();" /> &nbsp;
  </tr>
</table>
</body>
</html>