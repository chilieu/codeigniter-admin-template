<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Backend_Controller extends Global_Controller
{
	protected $APP = 'manage';

	public function __construct($theme=null)
	{
		if (empty($theme)) {
			$theme = 'manage';
		}
		parent::__construct($theme);

		if ( !$this->session->userdata('admin_id') ) {
			redirect('manage/auth/');
			die();
		}

	}

}