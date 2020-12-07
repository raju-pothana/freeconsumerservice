<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Advocates extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('common_model'); 
		$this->lang->load('english_lang','english');
	}
	public function agriinputs()
	{
		// $data['advocates'] = $this->common_model->get_advocates();
		$this->load->view('header');
		$this->load->view('company/agriinputs', $data);
		$this->load->view('footer');
	}
	
}
