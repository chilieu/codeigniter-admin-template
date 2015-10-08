<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends Global_Controller
{
	private $layout;

	public function __construct($theme=null)
	{
		if (empty($theme)) {
			$theme = 'manage';
		}
		$this->layout = 'layout';
		parent::__construct($theme);

	}


	public function index()
	{
		$this->viewData['_body'] = $this->load->view( 'manage/auth/login', array(), true);
		$this->render( $this->layout );
	}

	public function login()
	{
		if( $this->input->post() )
		{
			$user = "jesus";
			$pass = "lovesyou";
			if( $user == $this->input->post("user") && $pass == $this->input->post("pass") )
			{
				$this->session->set_userdata('admin_id', 1);
				$admin = array("Admin" => "Administrator", "time" => time() );
				$this->session->set_userdata('admin');
				redirect('manage/cards/');
			} else {
				redirect('manage/auth');
			}
		} else {
			redirect('manage/auth/');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('admin');
		$this->session->sess_destroy();
		redirect('manage/auth/login/');
	}

}