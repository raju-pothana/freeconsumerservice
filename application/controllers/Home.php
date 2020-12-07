<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->model('common_model'); 
		$this->lang->load('english_lang','english');
	}
	public function index()
	{
		//echo label('801P');die;
		$this->load->model('Common_model', 'common');
		$data['companies'] = $this->common->get_conpanies();
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('home-content', $data);
		$this->load->view('footer');
	}
	public function get_complaint()
	{
		$data = $this->common_model->get_complaint();
		
		if (is_array($data) || is_object($data))
    {
        foreach ($data as $key => $value) {
            $button = "";
            $button .= "<a href=".base_url()."complaint/edit/".$value['id'].">Link</a>";
            $result['data'][$key] = array(
					"id" => $value['id'],
                    "name"=>$value['name'],
                    "url"=>$button
                     );
        }
    }
		
		echo json_encode($result);
		
	}
}
