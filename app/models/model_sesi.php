<?php

class Model_sesi extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	
	function cek_sesi(){
		if($this->session->userdata('username')=="")
			redirect(base_url(),'refresh');
	}
}
