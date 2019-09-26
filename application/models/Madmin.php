<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Madmin extends CI_model
{
	
	function df_siswa()
	{
		return $this->db->get('siswa');
	}
}
?>