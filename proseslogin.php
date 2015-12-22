<?php
session_start();
$server = "localhost";
$username = "root";
$password = "";
$db_name = "tugasbesar";
$db = mysql_connect($server,$username,$password) or DIE("Connection
is down ");
mysql_select_db($db_name) or DIE("Database name not available !!");
$login = mysql_query("select * from admin where
(username = '" . $_POST['username'] . "') and
(password = '" . $_POST['password'] . "')",$db);
$rowcount = mysql_num_rows($login);
if ($rowcount == 1)
{
$_SESSION['username'] = $_POST['username'];
header("location: pembayaran1.php");
}
else
{
echo "<center>Maaf Username atau Password anda salah</center>";
echo "<br>";
echo "<center><a href='login.php'>Login</a></p></center>";
}
?>