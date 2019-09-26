<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Msoal extends CI_model {
	public function dftr_soal($id_tes){
		$this->db->where('id_tes',$id_tes);
		return $this->db->get('soal');
	}

	function dftr_tes()
	{
		return $this->db->get('tes');
	}

	public function soal($id_tes)
	{
		$this->db->where('id_tes',$id_tes);
		return $this->db->get('soal');
	}
	public function de_soal($id_soal)
	{

		$this->db->where('id_soal',$id_soal);
		$this->db->delete('soal');
	}

	public function de_tes($id_tes)
	{

		$this->db->where('id_tes',$id_tes);
		$this->db->delete('tes');
	}

	public function update($id_soal)
	{
		$this->db->where('id_soal',$id_soal);
		$this->db->update('soal',$soal);
	}

	public function dftr_soalp($id_tes){
		$this->db->select('*');    
		$this->db->from('pembahasan');
		$this->db->join('soal', 'pembahasan.id_soal = soal.ID_soal');
		$this->db->where('id_tes',$id_tes);
		return $this->db->get();
	}

	public function pembahasan($id_pembahasan){
		$this->db->select('*');    
		$this->db->from('pembahasan');
		$this->db->join('soal', 'pembahasan.id_soal = soal.ID_soal');
		$this->db->where('id_pembahasan',$id_pembahasan);
		return $this->db->get();
	}

	public function update_pem($id_pembahasan,$pem)
	{
		$this->db->where('id_pembahasan',$id_pembahasan);
		$this->db->update('pembahasan',$pem);
	}
}

?>