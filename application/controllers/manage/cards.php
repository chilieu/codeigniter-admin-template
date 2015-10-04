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
		$this->addJS('/public/js/datatables/jquery.dataTables.min.js');
		$this->addCSS('/public/js/datatables/datatables.css');

		$this->viewData['_body'] = $this->load->view( $this->APP . '/cards/index', array(), true);
		$this->render( $this->layout );
	}

	public function add()
	{
		if( $this->input->post() ){
			$card['value'] = $this->input->post('value');
			$card['phone'] = $this->input->post('phone');
			print_r($card);
			//insert giftcard
			$this->load->model('cards_model');
			$res = $this->cards_model->add( $card );
			if( $res ) redirect("manage/cards");
		}
		$this->viewData['_body'] = $this->load->view( $this->APP . '/cards/add', array(), true);
		$this->render( $this->layout );
	}

}