<?php
class loginModel{

	public function _construct(){
		$connection = mysql_connect("localhost","root","");
		$db = mysql_select_db("tugasbesar");
		}
	public function execute($query){
		return mysql_quary($quary);
		}
	public function etch($var){
		return mysql_fetch_array($var);
		}
	public function numRow($data){
		return mysql_num_rws($data);
		}
	public function select($username, $password){
		$query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
		return $this->execute($query);
	}
	}
?>