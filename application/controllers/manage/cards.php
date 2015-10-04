<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cards extends Backend_Controller
{
	private $layout;

	public function __construct()
	{
		parent::__construct();
		$this->layout = 'layout';
	}

	public function index()
	{
		$this->viewData['_body'] = $this->load->view( $this->APP . '/cards/index', array(), true);
		$this->render( $this->layout );
	}

	public function add()
	{

		$this->viewData['_body'] = $this->load->view( $this->APP . '/cards/add', array(), true);
		$this->render( $this->layout );
	}

}