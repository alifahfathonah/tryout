<?php

/**
 * 
 */
class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->view('admin/login');
	}

	function Login()
	{
		$username=$_POST["username"];
		$password = $_POST['password'];

		if ($username=='@dmin' && $password=='add-bk') {
			$_SESSION['admin']='admin';
			redirect('/admin');
		}
		else{
			echo "<script type='text/javascript'>alert('maaf email atau password salah'); 
			history.go(-1); </script>";
		}
	}
}

 ?>