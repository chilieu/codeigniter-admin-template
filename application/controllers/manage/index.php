<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Index extends Backend_Controller
{
	private $layout;

	public function __construct()
	{
		parent::__construct();
		$this->layout = 'layout';
	}

	public function index()
	{
		echo "Index";
		$this->viewData['_body'] = $this->load->view( $this->APP . '/home/index', array(), true);
		$this->render( $this->layout );
	}

}