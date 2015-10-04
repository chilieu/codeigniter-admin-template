<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Staffs extends Backend_Controller
{
	private $layout;

	public function __construct()
	{
		parent::__construct();
		$this->layout = 'layout';
	}

	public function index()
	{
		$this->viewData['_body'] = $this->load->view( $this->APP . '/staffs/index', array(), true);
		$this->render( $this->layout );
	}

}