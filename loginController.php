<?php
include "loginModel.php";
class loginController{
	public $model;
	public function __construct(){
		$this->model = new LoginModel();
	}
	
	public function login(){
		$username = @$_POST['username'];
		$password = @$_POST['password'];
		
		$sql = $this->model->select($username, $password);
		$data = $this->model->fetch($sql);
		$cek = $this->model->numRow($sql);
		
		if($cek > 0) {
			?>
			<script type="text/javascript">
			alert("Login Berhasil");
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
			alert("Login Gagal");
			</script>
			<?php
		}
		
	}
	
	public function logout(){
	}
}
?>