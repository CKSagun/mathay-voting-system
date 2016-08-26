<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	
	protected $data;
	
	function __construct()
	{
		parent::__construct();
	}
	
	function _render_view()
	{
		$this->load->view('app-layout-template', $this->data);
	}
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */