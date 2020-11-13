<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		echo "welcome";
		//$this->load->view('welcome_message');
	}
	
	public function test($nama="",$kerja=""){
		echo "nama : ".$nama."<br>pekerjaan : ".$kerja;
	}
	
	public function test2(){
		echo "nama : ".$this->uri->segment(3)."<br>pekerjaan : ".$this->uri->segment(4);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */