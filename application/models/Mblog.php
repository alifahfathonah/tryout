<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Mblog extends CI_model
{
	
	function df_blog()
	{
		return $this->db->get('blog');
	}

	function blog($id_blog)
	{
		return $this->db->get_where('blog',array('id_blog' => $id_blog));
	}
}
?>