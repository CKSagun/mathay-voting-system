<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sections extends MY_Controller {

	private $active_menu;
	
	function index()
	{
		$this->load->model('section_model');
		$sections = $this->section_model->get_all();

		$this->data['sections'] = $sections;

		$this->data['page_header']  = 'Sections Management';
		$this->data['main_content'] = 'pages/view-sections';
		$this->data['active_menu']  = $this->active_menu;

		$this->_render_view();
	}
}

/* End of file Sections.php */
/* Location: ./application/controllers/Sections.php */
