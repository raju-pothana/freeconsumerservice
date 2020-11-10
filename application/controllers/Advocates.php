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
		$this->load->model('common_model'); 
		$this->lang->load('english_lang','english');
	}
	public function index()
	{
		$data['advocates'] = $this->common_model->get_advocates();
		//echo "<pre>";print_r($data);die;
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('avocate/adv-form',$data);
		$this->load->view('footer');
	}
	public function add()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('avocate/attroney-form');
		$this->load->view('footer');
	}
	public function saveAdvacateDetails()
	{
		//echo "<pre>";print_r($_POST);die;
		$res = $this->common_model->saveAdvacateDetails();
		if($res!='0'){
			$this->session->set_flashdata("user_success",'Added successfully');
			$response=array('success'=>TRUE);
			echo json_encode($response);
			//redirect(base_url().'advocates');
		}else{
			$this->session->set_flashdata("user_error",'Oops something went wrong,Please try again!');
			$response=array('success'=>FALSE);
			echo json_encode($response);
			//redirect(base_url().'advocates');
		}
	}
	public function edit($id)
	{
		$data['advocateDetails'] = $this->common_model->get_advocate_details($id);
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('avocate/edit_form',$data);
		$this->load->view('footer');
	}
	public function editAdvacateDetails()
	{
		//echo "<pre>";print_r($_POST);die;
		$res = $this->common_model->editAdvacateDetails();
		if($res!='0'){
			$this->session->set_flashdata("user_success",'Updated successfully');
			$response=array('success'=>TRUE);
			echo json_encode($response);
			//redirect(base_url().'advocates');
		}else{
			$this->session->set_flashdata("user_error",'Oops something went wrong,Please try again!');
			$response=array('success'=>FALSE);
			echo json_encode($response);
			//redirect(base_url().'advocates');
		}
	}
}
