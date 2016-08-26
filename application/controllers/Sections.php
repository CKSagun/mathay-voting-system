<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sections extends MY_Controller {

	function index()
	{
		$this->load->model('section_model');
		$sections = $this->section_model->get_all();

		$this->data['sections'] = $sections;

		$this->data['page_header'] = 'SECTIONS MANAGEMENT';
		$this->data['footer'] = 'Some Text for footer';
		$this->data['main_content'] = 'pages/view-sections';

		$this->_render_view();
	}
}

/* End of file Sections.php */
/* Location: ./application/controllers/Sections.php */
