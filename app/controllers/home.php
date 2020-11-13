<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Home extends CI_Controller {



	public function __construct()

	{

		parent::__construct();	

		//$this->load->model('model_home');

	}

	

	public function index_old()

	{	

		//$this->session->sess_destroy();

		$file = fopen("counter.txt","r");

		$aa =  fgets($file);		

		if($this->session->userdata('user')!=1){

			$this->session->set_userdata('user', 1);

			$aa = $aa+1;

			//echo $aa;die();

			fclose($file);

			$file = fopen("counter.txt","w");

			fwrite($file,$aa);			

			fclose($file);

		}		

		 

		$add_header  ='';

		$data['counter'] = $aa;

		$data['add_header'] = $add_header;		

		$this->load->view('index',$data);

	}

	public function index()

	{	

		//$this->session->sess_destroy();

		$file = fopen("counter.txt","r");

		$aa =  fgets($file);		

		if($this->session->userdata('user')!=1){

			$this->session->set_userdata('user', 1);

			$aa = $aa+1;

			//echo $aa;die();

			fclose($file);

			$file = fopen("counter.txt","w");

			fwrite($file,$aa);			

			fclose($file);

		}		

		 

		$add_header  ='';

		$data['counter'] = $aa;

		$data['add_header'] = $add_header;		

		$this->load->view('index1',$data);

	}

	

	public function kirim_pesan(){

		$nama = $this->input->post('nama');

		$umur = $this->input->post('umur');

		$alamat = $this->input->post('alamat');

		$telp = $this->input->post('telp');

		$email = $this->input->post('email');

		$pesan = $this->input->post('pesan');

		

		$subject = "Konsultasi dan Bantuan Hukum";

		$message = '<html><head><title>'.$subject.'</title></head><body>';

		$message .= '<p>Yth ALWANIH, SH, SHI</p>';

		$message .= '<p>Biodata :</p>';

		$message .= '<p><table><tr><td>Nama</td><td>:</td><td>'.$nama.'</td></tr><tr><td>Umur</td><td>:</td><td>'.$umur.'</td></tr><tr><td>Telp</td><td>:</td><td>'.$telp.'</td></tr><tr><td>Alamat</td><td>:</td><td>'.$alamat.'</td></tr><tr><td>email</td><td>:</td><td>'.$email.'</td></tr></table></p>';

		$message .= '<p>'.$pesan.'</p>';		

		$message .= '<p>Regards,</p>';

		$message .= '<p>'.$nama.'</p>';

		$message .= '</body></html>';

		

		$arrReturn =array();

		$arrReturn['nil'] = 0;

		$arrReturn['txt'] = 'Gagal Kirim Pesan';

		$return = $this->kirim_email($email,$message,$subject,$nama);

		if($return){

			$arrReturn['nil'] = 1;

			$arrReturn['txt'] = 'Pesan Terkirim';

		}

		echo json_encode($arrReturn);

	}

	

	function kirim_email($email, $message, $subject,$nama)

	{			

		$this->load->helper('email');

		$email = trim($email);

		$emailOK = 0;

		if (valid_email($email))

		{

			/*

			$config = array(  

					'protocol' => 'smtp',

					'smtp_host' => 'mail2.edi-indonesia.co.id',

					'smtp_port' => 25,

					'smtp_user' =>'',

					'smtp_pass' =>'',

					'mailtype'  => 'html', 

					'charset'   => 'iso-8859-1',

					'wrapchars' =>100,

					'crlf' => "\r\n",

					'newline' => "\r\n",

					'start_tls' => TRUE

				);*/

				

			$config = array(  

				'protocol' => 'smtp',

				'smtp_host' => 'mail.alwanih.com',

				'smtp_port' => 26,

				'smtp_user' =>'administrator@alwanih.com',

				'smtp_pass' =>'alwanih123',

				'mailtype'  => 'html', 

				'charset'   => 'iso-8859-1',

				'wrapchars' =>100,

				'crlf' => "\r\n",

				'newline' => "\r\n",

				'start_tls' => TRUE

			);

				

			$this->load->library('email', $config);

			$this->email->set_newline("\r\n");

			$this->email->from($email, $nama);

						

			$this->email->to('alwanihlaw@gmail.com');

			$this->email->cc($email);

			$this->email->bcc('testbobihariadi@gmail.com');			

			$this->email->subject($subject);		

			

			$this->email->message($message);

			

			if ($this->email->send())

			{

				$emailOK = 1;

			}

		}

		return $emailOK;

	}

	

}

