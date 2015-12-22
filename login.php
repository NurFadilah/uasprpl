<?php
session_start();
if(isset($_SESSION['username']))
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body background="pic/menu.jpg">
<form method="post" action="proseslogin.php">
<center>
<br>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br><br>
<br>
<br>
<br>
<br>
<br>
	<br>
<br>
<br>
<br>
<br>
<br>
<br>

<table width="392" height="86" border="0">
  <tr>
    <td width="218" height="26"><font face="Space Bd BT" size="+2" color="#000000">&nbspUSERNAME :</font></td>
    <td width="191">&nbsp;<input type="text" name="username" required></td>
  </tr>
  <tr>
    <td><font face="Space Bd BT" size="+2" color="#000000">&nbsp;PASSWORD :</font></td>
    <td>&nbsp;<input type="password" name="password" required></td>
  </tr>
  <tr>
    <td colspan="2" align="right"><input type="submit" value="Login"/><a href="index.php"><input type="button" value="Batal"/></a></td>
  </tr>
</table>
</center>
</form>
</body>
</html>