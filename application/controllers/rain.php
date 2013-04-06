<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Rain extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		
		$this->load->driver('Parser');
	}

	public function index()
	{
		$this->parser->parse('rain');
	}
}

/* End of file rain.php */
/* Location: ./application/controllers/rain.php */