<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Msiswa extends CI_Model{
	
	function login($email,$password){
		return $this->db->get_where('siswa',array('email'=>$email,'password'=>$password));
	}

	function input_nilai($skor,$id_tes,$nob,$nos,$nok,$id_siswa)
	{
		$benar = implode("|",$nob);
		$salah = implode("|",$nos);
		$kosong = implode("|",$nok);


		$this->db->insert('nilai',array('id_siswa'=> $id_siswa ,'id_tes'=>$id_tes,'skor'=>$skor,'benar' => $benar,'salah'=>$salah,'kosong'=>$kosong));
	}

	function lihat_nilai($id_siswa)
	{
		$this->db->select('*');    
		$this->db->from('nilai');
		$this->db->join('tes', 'nilai.id_tes = tes.id_tes');
		$this->db->where('id_siswa',$id_siswa);
		return $this->db->get();
	}
}

  ?>