<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *  
 */
class Admin extends CI_Controller
{ 
	public function __construct(){
        parent::__construct();
        $this->load->model('Madmin');
		$this->load->model('Msoal');
    }

	function Login()
	{
		$username=$_POST["username"];
		$password = $_POST['password'];

		if ($username==='@dmin' && $password==='add-bk') {
			$_SESSION['admin']='admin';
			//echo "benarrrrr";
			//echo $_SESSION['admin'];
			redirect('admin/index');
		}
		else{
			echo "<script type='text/javascript'>alert('maaf email atau password salah'); 
			history.go(-1); </script>";
		}
	}
	
	public function logout()
	{
		session_destroy();
		redirect('admin/');
	}
	function index() {
		if (isset($_SESSION['admin'])) {
			
			$data['n'] = $this->Madmin->df_siswa()->num_rows();
			$this->load->view('admin/index',$data);
		}
		else{
			$this->load->view('admin/login');
		}
		
	}

	function data_siswa(){
		$_SESSION['admin'] = 'admin';
		$data['siswa'] = $this->Madmin->df_siswa()->result();
		$this->load->view('admin/datasiswa',$data);

	}

	function daftartest()
	{
		
		$data['tes'] = $this->Msoal->dftr_tes()->result();
		$this->load->view('admin/daftar_test',$data);
	}

	function inp_tes()
	{
		date_default_timezone_set("Asia/Jakarta");
		$join=date("Y/m/d h:i:s");

		$start = $_POST['startt']."T".$_POST['startw'];
		$end = $_POST['endt']."T".$_POST['endw'];
		$tes = array('nama_tes' => $_POST['nama'],
		'tipe'=> $_POST['tipe'],
		'start'=> $start,
		'end' => $end,
		'waktu_upload' => $join);

		$this->db->insert('tes',$tes);

		redirect('admin/daftartest');
	}

	function inp_soal() {
		$soal = array(
			'soal' => $_POST['soal'],
			'a' => $_POST['A'],
			'b' => $_POST['B'],
			'c' => $_POST['C'],
			'd' => $_POST['D'],
			'e' => $_POST['E'],
			'kunci' => $_POST['kunci'],
			'id_tes' => $_GET['id_tes']
		);
		$this->db->insert('soal',$soal);

		redirect('admin/add_pembahsan?id_tes='.$_GET['id_tes']);
	}

	function add_pembahsan(){
		$this->db->select('*');
		$this->db->from('soal');
		$this->db->order_by('id_soal','ASC');
		$query = $this->db->get()->result();
		foreach ($query as $key) {
			$id_soal = $key->ID_soal;
		}
		
		$pem = array('id_soal' =>$id_soal ,'link'=>" ",'isi'=>" ");
		$this->db->insert('pembahasan',$pem);

		redirect('admin/dftr_soal?id_tes='.$_GET['id_tes']);
	}

	public function dftr_soal()
	{
		$id_tes = $_GET['id_tes'];
		$data['soal'] = $this->Msoal->dftr_soal($id_tes)->result();
		$this->load->view('admin/dftrsoal',$data);
	}

	function updt_soal(){
		
		$id_soal = $_GET['id_sl'];
		$da = $this->Msoal->soal($id_soal)->result();
		$this->load->view("admin/form_edit?id=$id_soal",$data);
	}

	function save_soal(){
		$id_soal = $_POST['id_soal'];
		$soal = array(
			'soal' => $_POST['soal'],
			'a' => $_POST['a'],
			'b' => $_POST['b'],
			'c' => $_POST['c'],
			'd' => $_POST['d'],
			'e' => $_POST['e'],
			'jawaban' => $_POST['jawaban'],
			'tipe' => $_POST['tipe']
		);
		
		$this->Msoal->update($id_soal);

		redirect('admin/dftr_soal');
	}

	public function del_soal()
	{
		$id_sl= $_GET['id_sl'];
		
		$this->Msoal->de_soal($id_sl);
		echo "<script type='text/javascript'>alert('soal sudah berhasil di hapus'); 
			history.go(-1); </script>";
	}

	public function del_tes()
	{
		$id_tes= $_GET['id_sl'];
		
		$this->Msoal->de_tes($id_tes);
		echo "<script type='text/javascript'>alert('tes sudah berhasil di hapus'); 
			history.go(-1); </script>";
	}

	function daftartesp(){
		
		$data['tes'] = $this->Msoal->dftr_tes()->result();
		$this->load->view('admin/daftar_testp',$data);
	}

	public function dftr_pembahasan(){
		$id_tes = $_GET['id_tes'];
		
		$data['soal'] = $this->Msoal->dftr_soalp($id_tes)->result();
		$this->load->view('admin/daftar_pembahasan',$data);
	}

	function pembahasan(){
		$id_pembahasan = $_GET['id_sl'];
		
		$data['pembahasan'] = $this->Msoal->pembahasan($id_pembahasan)->result();
		$this->load->view('admin/pembahasan',$data);
	}

	function save_pembahasan(){
		//$link = $_POST['link'];
		$isi = $_POST['pembahasan'];
		$id = $_POST['id'];
		//file

		$namagambar=$_FILES['video']['name'];
		$uploaddir= './dst/video/';
		$alamatfile=$uploaddir.$namagambar;
		move_uploaded_file($_FILES['video']['tmp_name'],$alamatfile);

		$uploaddir= 'dst/video/';
		$alamatfile=$uploaddir.$namagambar;

		// /file
		$pem = array('link' =>$alamatfile , 'isi'=>$isi );
		
		$this->Msoal->update_pem($id,$pem);

		//redirect('/admin/dftr_pembahasan?id_tes='.$_GET['id_tes']);
	}

	function tmbh_soal(){
		$this->load->view('admin/tambah_soal');
	}

	function blog(){
		$this->load->model('Mblog');
		$data['blog'] = $this->Mblog->df_blog()->result();
		if (isset($_GET['s'])) {
			$data['notif']='berhasil di inputkan';
		}
		$this->load->view('admin/dftr_blog',$data);
	}

	function Input_post(){
		$this->load->helper(array('form', 'url'));
		$this->load->view('admin/Input_blog');
	}

	public function save_blog(){
		$namagambar=$_FILES['picture']['name'];
		$uploaddir= './dst/userfiles/images/';
		$alamatfile=$uploaddir.$namagambar;
		move_uploaded_file($_FILES['picture']['tmp_name'],$alamatfile);

		$uploaddir= base_url('dst/userfiles/images/');
		$alamatfile=$uploaddir.$namagambar;

		$title = $_POST['title'];
		$isi = $_POST['isi'];

		date_default_timezone_set("Asia/Jakarta");
        $tanggal=date("Y-m-d H:i");

		$blog = array('title' =>$title ,'cover'=>$alamatfile,'isi'=>$isi,'tanggal'=> $tanggal, 'oleh'=>$_SESSION['admin']);

		$this->db->insert('blog',$blog);

		$data['pesan']="blog sukses ditambahkan";
		redirect('admin/blog?s=1');

	}



}
?>