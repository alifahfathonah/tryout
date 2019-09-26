<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Error extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('error404');
	}
}
?>