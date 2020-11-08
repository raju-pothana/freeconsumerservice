<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Complaint extends CI_Controller {

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
		$data['complaint'] = $this->common_model->get_complaint();
		//echo "<pre>";print_r($data);die;
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('complaint/complaint',$data);
		$this->load->view('footer');
	}
	public function add()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('complaint/complaint-form');
		$this->load->view('footer');
	}
	public function saveComplaintDetails()
	{
		//echo "<pre>";print_r($_POST);die;
		$res = $this->common_model->saveComplaintDetails();
		if($res!='0'){
			$this->session->set_flashdata("user_success",'Added successfully');
			$response=array('success'=>TRUE);
			echo json_encode($response);
		}else{
			$this->session->set_flashdata("user_error",'Oops something went wrong,Please try again!');
			$response=array('success'=>FALSE);
			echo json_encode($response);
		}
	}
	public function edit($id)
	{
		$data['complaintDetails'] = $this->common_model->get_complaint_details($id);
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('complaint/edit_form',$data);
		$this->load->view('footer');
	}
	public function editcomplaintDetails()
	{
		//echo "<pre>";print_r($_POST);die;
		$res = $this->common_model->editcomplaintDetails();
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
