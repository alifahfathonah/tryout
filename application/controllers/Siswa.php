<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Msiswa');
		$this->load->model('Msoal');
	} 
	//homepage
	function awal(){
		$this->load->view('welcome_message');
	}
	//menampilkan halaman login
	function log(){
		$this->load->view('login');
	}

	function login() //function untuk login siswa
	{
		$email=$_POST["email"];
		$password = md5($_POST['password']);


		$cek = $this->Msiswa->login($email,$password);
		if ($cek->num_rows()==1) {
			foreach ($cek->result() as $userlog) {
				print_r($userlog);
				$_SESSION['nama']= $userlog->nama;
				$_SESSION['ID_siswa']= $userlog->ID_siswa;
			}
	
			echo $_SESSION['nama'];
			redirect('/siswa/awal');
		}
		else{
			echo "<script type='text/javascript'>alert('maaf email atau password salah'); 
			history.go(-1); </script>";
		}

	}
	//proses daftar
	function signup(){
		date_default_timezone_set("Asia/Jakarta");
		$join=date("Y/m/d h:i:s");
		$user = array( 
			'email'=>$_POST['email'],
			'nama'=>$_POST['nama'],
			'tgl_lhr'=>$_POST['tgl_lhr'],
			'tlp'=>$_POST['tlp'],
			'password'=>md5($_POST['password']),
			'join'=>$join
		);
		$tes =$this->db->insert('siswa',$user);
		if ($tes) {
			echo "<script type='text/javascript'>alert('Anda sudah berhasil mendaftar, silakan login'); 
			history.go(-1); </script>";
		}
		else{
			echo "<script type='text/javascript'>alert('maaf email sudah digunakan'); 
			history.go(-1); </script>";
		}
	}

	//proses logout
	function logout(){
		session_destroy();
		redirect('/siswa/awal');
	} 

	//melihat daftar tes
	function lihat_tes(){
		if (isset($_SESSION['nama'])) {
			$data['tes']=$this->Msoal->dftr_tes()->result();
			$this->load->view('daftar_tes',$data);
		}
		else{

			redirect('/siswa/awal');
			//echo "<script type='text/javascript'>alert('Anda belum Login'); history.go(-1); </script>";
		}
		
	}

	//melihat soal dari tes
	function soal(){
		if (isset($_POST['id_tes'])) {
			$id_tes=$_POST['id_tes'];
			$data['id_tes'] = $id_tes;
			$data['soal'] = $this->Msoal->dftr_soal($id_tes)->result();
			$data['n'] = $this->Msoal->dftr_soal($id_tes)->num_rows();
			$this->load->view('soal',$data);
		}
		else{
			redirect('siswa/lihat_tes');
		}
		
		
	}

	//menghitung nilai setelah tes
	function hitung_nilai()
	{
		$id_tes = $_POST['id_tes'];
		$skor=0;
		$benar=0;
		$salah=0;
		$kosong=0;
		$jumlah = $this->Msoal->dftr_soal($id_tes)->num_rows();

		
		$id_soal = $_POST['id_soal'];
		$OP = $_POST['OP'];
		$nob = array();
		$nos = array();
		$nok = array();
		for ($i=0;$i<$jumlah;$i++){
			$nomor=$id_soal[$i];
			if (empty($OP[$nomor])){
				$nok[$kosong] = $i+1;
				$kosong++;
			}else{
				$jawaban=$OP[$nomor];
				$cek = $this->db->get_where('soal',array('ID_soal'=>$nomor,'kunci'=>$jawaban));
					
				if($cek->num_rows()>=1){
					$nob[$benar] = $i+1;
					$benar++;
				}else{
					$nos[$salah] = $i+1;
					$salah++;
				}		
			} 
			//rumus skor
			$skor = $benar*10;
		}
		$id_siswa= $_SESSION['ID_siswa']; 
		$this->Msiswa->input_nilai($skor,$id_tes,$nob,$nos,$nok,$id_siswa);
		print_r($OP);
		print_r($id_soal);
		print_r($nos);
		redirect('siswa/lihatnilai');
	}

	//menampilkan halaman nilai
	public function lihatnilai(){
		$id_siswa = $_SESSION['ID_siswa'];
		$data['nilai'] = $this->Msiswa->lihat_nilai($id_siswa)->result();
		$this->load->view('nilai',$data);
	}

	//menampilkan halaman list pembahasan
	function listpembahasan(){
		if (isset($_SESSION['nama'])) {
			$data['tes']=$this->Msoal->dftr_tes()->result();
			$this->load->view('listpembahasan',$data);
		}
		else{
			redirect('/siswa/awal');
		}
	}

	//menampilkan list soal pembahasan
	function listsp(){
		$id_tes = $_GET['id_tes'];
		$data['soal'] = $this->Msoal->dftr_soalp($id_tes)->result();
		$this->load->view('listsoalp',$data);
	}
	//menampilkan pembahasan
	function pembahasan(){
		$id_pembahasan = $_GET['id_pembahasan'];
		$data['pembahasan'] = $this->Msoal->pembahasan($id_pembahasan)->result();

		$this->load->view('pembahasan',$data);
	}

	function dftr_blog(){
		$this->load->model('Mblog');
		$data['post'] = $this->Mblog->df_blog()->result();
		$this->load->view('daftar_post',$data);
	}

	function blog(){
		$id_blog = $_GET['id_post'];
		$this->load->model('Mblog');
		$data['post'] = $this->Mblog->blog($id_blog)->result();

		$this->load->view('blog',$data);
	}
}