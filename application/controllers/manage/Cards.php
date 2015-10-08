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
		$this->addJS('public/js/datatables/jquery.dataTables.min.js');
		$this->addCSS('public/js/datatables/datatables.css');

		$cards = array();
		$this->load->model('cards_model');
		$cards = $this->cards_model->get_last_entries( 500 );


		$this->viewData['_body'] = $this->load->view( $this->APP . '/cards/index', array("cards" => $cards), true);
		$this->render( $this->layout );
	}

	public function add()
	{
		if( $this->input->post() ){
			$card['value'] = $this->input->post('value');
			$card['phone'] = $this->input->post('phone');
			//insert giftcard
			$this->load->model('cards_model');
			$res = $this->cards_model->add( $card );
			$this->session->set_flashdata('res', array('status' => 0, 'msg' => 'saved') );
			if( $res ) redirect("manage/cards/edit/{$res}");
		}
		$this->viewData['_body'] = $this->load->view( $this->APP . '/cards/add', array(), true);
		$this->render( $this->layout );
	}

	public function delete($cardId)
	{
		if( !$cardId ) return false;
		$this->load->model('cards_model');
		$res = $this->cards_model->remove( $cardId );
		if( $res ) true;
	}

	public function edit($cardId)
	{
		$this->load->model('cards_model');
		if( $this->input->post() && $cardId ){
			$card['id'] = $cardId;
			$card['value'] = $this->input->post('value');
			$card['phone'] = $this->input->post('phone');
			//update giftcard
			$res = $this->cards_model->update( $card );
			$this->session->set_flashdata('res', array('status' => 0, 'msg' => 'updated') );
			if( $res ) redirect("manage/cards/edit/{$cardId}");
		}

		$card = $this->cards_model->get_card( $cardId );
		$this->viewData['_body'] = $this->load->view( $this->APP . '/cards/edit', array( 'card' => $card ), true);
		$this->render( $this->layout );
	}

}