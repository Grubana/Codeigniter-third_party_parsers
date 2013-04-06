<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Simple extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		
		$this->load->driver('Parser');
	}

	public function index()
	{
		$parser_data = array();
		$parser_data['file_type'] = 'text';
		$parser_data['data'] = array(
			array('item1' => '1it', 'item2' => '2it'),
			array('item1' => '1it', 'item2' => '2it'),
			array('item1' => '1it', 'item2' => '2it'),
			array('item1' => '1it', 'item2' => '2it')
		);
		$parser_data['odata'] = 'sup';
		$this->parser->parse('simple', $parser_data);
	}
}

/* End of file simple.php */
/* Location: ./application/controllers/simple.php */