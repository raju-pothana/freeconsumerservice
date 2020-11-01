<?php
class Common_model extends CI_Model {

  public function get_conpanies()
    {
            $query = $this->db->get('company_details');
            return $query->result_array();
    }
	public function get_advocates()
	{
		$sql = "select t1.*,t2.* from advocate_details as t1 left join advcate_images as t2 on (t1.id=t2.advacate_id) where t1.deleted='0' order by t1.id desc" ;
			$exec = $this->db->query($sql);
			$result = $exec->result_array();
			return $result;
	}
	
	public function get_advocate_details($id)
	{
		$sql = "select t1.*,t2.* from advocate_details as t1 left join advcate_images as t2 on (t1.id=t2.advacate_id) where t1.deleted='0' and t1.id='".$id."' order by t1.id desc" ;
			$exec = $this->db->query($sql);
			$result = $exec->row_array();
			return $result;
	}
	public function saveAdvacateDetails()
	{
		$data['created_date']=date("Y-m-d H:i:s");
		extract($_POST);
		$data['name_advocate']=$advocate;
		$data['email']=$email;
		$data['mobile_number']=$mobileno;
		$data['address']=$address;
		$data['district']=$district;
		$data['state']=$state;
		$data['pin_code']=$pincode;
		$data['nearestcity']=$nearestcity;
		$data['about_u']=$about_u;
		$data['practicing_place']=$practicing;
		$data['specialized_practice_areas']=$practicearea;
		$data['known_languages']=$languages;
		$data['experience']=$barexperience;
		$data['enrolment_no']=$enrolmentnumber;
		$data['number_of_legal_cases']=$noofleagalcases;
		$data['education']=$education;
		$data['experience_if_any']=$experience;
		$data['consultation_Fee']=$consultationfee;
		$data['cost_per_hour']=$cph;
		if($this->db->insert('advocate_details',$data))
		{
			$uid=$this->db->insert_id();
			$data1['created_date']=date("Y-m-d H:i:s");
				//$path="./uploads/advacate/".$uid;
				mkdir(label('801P').$uid, 0777, true);
				$path=label('801P').$uid.'/';
			
			if($_FILES['resumefiles']['name']!='' && !empty($_FILES['resumefiles']['name']))
				{
					$data1['resumefiles']  = $this->common_model->uploadImg($path,'resumefiles') ;
				}
				if($_FILES['eqcertificate']['name']!='' && !empty($_FILES['eqcertificate']['name']))
				{
					$data1['eqcertificate']  = $this->common_model->uploadImg($path,'eqcertificate') ;
				}
				
				if($_FILES['eqcertificate2']['name']!='' && !empty($_FILES['eqcertificate2']['name']))
				{
					$data1['eqcertificate2']  = $this->common_model->uploadImg($path,'eqcertificate2') ;
				}
				if($_FILES['eqcertificate3']['name']!='' && !empty($_FILES['eqcertificate3']['name']))
				{
					$data1['eqcertificate3']  = $this->common_model->uploadImg($path,'eqcertificate3') ;
				}
				
				if($_FILES['encertificate']['name']!='' && !empty($_FILES['encertificate']['name']))
				{
					$data1['encertificate']  = $this->common_model->uploadImg($path,'encertificate') ;
				}
				if($_FILES['identitycard']['name']!='' && !empty($_FILES['identitycard']['name']))
				{
					$data1['identitycard']  = $this->common_model->uploadImg($path,'identitycard') ;
				}
				if($_FILES['practcertificateissued']['name']!='' && !empty($_FILES['practcertificateissued']['name']))
				{
					$data1['practcertificateissued']  = $this->common_model->uploadImg($path,'practcertificateissued') ;
				}
				if($_FILES['practconcern']['name']!='' && !empty($_FILES['practconcern']['name']))
				{
					$data1['practconcern']  = $this->common_model->uploadImg($path,'practconcern') ;
				}
				if($_FILES['practcertificateissuedwhere']['name']!='' && !empty($_FILES['practcertificateissuedwhere']['name']))
				{
					$data1['practcertificateissuedwhere']  = $this->common_model->uploadImg($path,'practcertificateissuedwhere') ;
				}
				if($_FILES['passportphoto']['name']!='' && !empty($_FILES['passportphoto']['name']))
				{
					$data1['passportphoto']  = $this->common_model->uploadImg($path,'passportphoto') ;
				}
				if($_FILES['affidavit']['name']!='' && !empty($_FILES['affidavit']['name']))
				{
					$data1['affidavit']  = $this->common_model->uploadImg($path,'affidavit') ;
				}
				$data1['advacate_id']=$uid;
				$this->db->insert('advcate_images',$data1);
			return 1;
		}else{return 0;}
	}
	
	public function editAdvacateDetails()
	{
		$data['updated_date']=date("Y-m-d H:i:s");
		extract($_POST);
		$data['name_advocate']=$advocate;
		$data['email']=$email;
		$data['mobile_number']=$mobileno;
		$data['address']=$address;
		$data['district']=$district;
		$data['state']=$state;
		$data['pin_code']=$pincode;
		$data['nearestcity']=$nearestcity;
		$data['about_u']=$about_u;
		$data['practicing_place']=$practicing;
		$data['specialized_practice_areas']=$practicearea;
		$data['known_languages']=$languages;
		$data['experience']=$barexperience;
		$data['enrolment_no']=$enrolmentnumber;
		$data['number_of_legal_cases']=$noofleagalcases;
		$data['education']=$education;
		$data['experience_if_any']=$experience;
		$data['consultation_Fee']=$consultationfee;
		$data['cost_per_hour']=$cph;
		$this->db->where('id', $advacated_id);
        $res=$this->db->update('advocate_details',$data);
				$path=label('801P').$advacated_id.'/';
			
			if($_FILES['resumefiles']['name']!='' && !empty($_FILES['resumefiles']['name']))
				{
					$data1['resumefiles']  = $this->common_model->uploadImg($path,'resumefiles') ;
				}
				if($_FILES['eqcertificate']['name']!='' && !empty($_FILES['eqcertificate']['name']))
				{
					$data1['eqcertificate']  = $this->common_model->uploadImg($path,'eqcertificate') ;
				}
				if($_FILES['eqcertificate2']['name']!='' && !empty($_FILES['eqcertificate2']['name']))
				{
					$data1['eqcertificate2']  = $this->common_model->uploadImg($path,'eqcertificate2') ;
				}
				if($_FILES['eqcertificate3']['name']!='' && !empty($_FILES['eqcertificate3']['name']))
				{
					$data1['eqcertificate3']  = $this->common_model->uploadImg($path,'eqcertificate3') ;
				}
				if($_FILES['encertificate']['name']!='' && !empty($_FILES['encertificate']['name']))
				{
					$data1['encertificate']  = $this->common_model->uploadImg($path,'encertificate') ;
				}
				if($_FILES['identitycard']['name']!='' && !empty($_FILES['identitycard']['name']))
				{
					$data1['identitycard']  = $this->common_model->uploadImg($path,'identitycard') ;
				}
				if($_FILES['practcertificateissued']['name']!='' && !empty($_FILES['practcertificateissued']['name']))
				{
					$data1['practcertificateissued']  = $this->common_model->uploadImg($path,'practcertificateissued') ;
				}
				if($_FILES['practconcern']['name']!='' && !empty($_FILES['practconcern']['name']))
				{
					$data1['practconcern']  = $this->common_model->uploadImg($path,'practconcern') ;
				}
				if($_FILES['practcertificateissuedwhere']['name']!='' && !empty($_FILES['practcertificateissuedwhere']['name']))
				{
					$data1['practcertificateissuedwhere']  = $this->common_model->uploadImg($path,'practcertificateissuedwhere') ;
				}
				if($_FILES['passportphoto']['name']!='' && !empty($_FILES['passportphoto']['name']))
				{
					$data1['passportphoto']  = $this->common_model->uploadImg($path,'passportphoto') ;
				}
				if($_FILES['affidavit']['name']!='' && !empty($_FILES['affidavit']['name']))
				{
					$data1['affidavit']  = $this->common_model->uploadImg($path,'affidavit') ;
				}
				$data1['updated_date']=date("Y-m-d H:i:s");
				$this->db->where('advacate_id', $advacated_id);
				$this->db->update('advcate_images',$data1);
				if($res)
				{
					return 1;
				}else{return 0;}
	}
	
	public function get_complaint()
	{
		$sql = "select t1.*,t2.* from complaint_details as t1 left join complent_images as t2 on (t1.id=t2.complaint_id) where t1.delaeted='0' order by t1.id desc" ;
			$exec = $this->db->query($sql);
			$result = $exec->result_array();
			return $result;
	}
	
	public function get_complaint_details($id)
	{
		$sql = "select t1.*,t2.* from complaint_details as t1 left join complent_images as t2 on (t1.id=t2.complaint_id) where t1.delaeted='0' and t1.id='".$id."' order by t1.id desc" ;
			$exec = $this->db->query($sql);
			$result = $exec->row_array();
			return $result;
	}
	
	public function saveComplaintDetails()
	{
		$data['created_date']=date("Y-m-d H:i:s");
		extract($_POST);
		$data['Select_Company']=$company;
		$data['name']=$nameperaddhar;
		$data['email']=$email;
		$data['mobile_number']=$mobile_com;
		$data['Address']=$address;
		$data['district']=$district;
		$data['State']=$state;
		$data['Postal_Pincode']=$pincode;
		$data['complain_types']=$complain_types;
		$data['type']=$type;
		$data['product_name']=$product_name;
		$data['cash_receipt_no']=$cash_receipt_no;
		$data['IN_ON_TN_number']=$invoice_no;
		$data['Purchase_Value']=$purchase_val;
		$data['Registered_Email_Address']=$reg_email;
		$data['Registered_Mobile_Number']=$reg_mobile;
		$data['Aadhaar_number']=$aadhar_no;
		$data['When_happen']=$wth;
		$data['Complaint_Details']=$complaint_details;
		$data['Loss_value']=$loss_val;
		$data['expect_from_COMPANY']=$ecrc;
		$data['warr_type']=$warr_type;
		if($warr_type!='' && !empty($warr_type))
			{
				$data['when_date']=$when_date;
			}
		$data['Company_response']=$company_res;
		
		
		$data['Interested_Parties']=$int_partes;
		$data['Earlier_communication_with_company']=$company_named;
		$data['Email_id']=$c_email_id;
		$data['Phone_Number']=$c_phone_no;
		$data['Register_Address']=$c_register_address;
		$data['c_state']=$c_state;
		$data['c_pincode']=$c_pincode;
		if($this->db->insert('complaint_details',$data))
		{
			$uid=$this->db->insert_id();
			$data1['created_date']=date("Y-m-d H:i:s");
				//$path="./uploads/advacate/".$uid;
				mkdir(label('802P').$uid, 0777, true);
				$path=label('802P').$uid.'/';
			if($_FILES['upload_comm_proof']['name']!='' && !empty($_FILES['upload_comm_proof']['name']))
			{
				$data1['upload_comm_proof']  = $this->common_model->uploadImg($path,'upload_comm_proof') ;
			}
			if($_FILES['invoice_order_file']['name']!='' && !empty($_FILES['invoice_order_file']['name']))
				{
					$data1['invoice_order_file']  = $this->common_model->uploadImg($path,'invoice_order_file') ;
				}
				if($_FILES['aadhar_no_vote']['name']!='' && !empty($_FILES['aadhar_no_vote']['name']))
				{
					$data1['aadhar_no_vote']  = $this->common_model->uploadImg($path,'aadhar_no_vote') ;
				}
				if($_FILES['transaction_receipt']['name']!='' && !empty($_FILES['transaction_receipt']['name']))
				{
					$data1['transaction_receipt']  = $this->common_model->uploadImg($path,'transaction_receipt') ;
				}
				if($_FILES['foulty_wrong1']['name']!='' && !empty($_FILES['foulty_wrong1']['name']))
				{
					$data1['foulty_wrong1']  = $this->common_model->uploadImg($path,'foulty_wrong1') ;
				}
				if($_FILES['foulty_wrong2']['name']!='' && !empty($_FILES['foulty_wrong2']['name']))
				{
					$data1['foulty_wrong2']  = $this->common_model->uploadImg($path,'foulty_wrong2') ;
				}
				$data1['complaint_id']=$uid;
				$this->db->insert('complent_images',$data1);
			return 1;
		}else{return 0;}
	}
	public function editcomplaintDetails()
	{
		$data['updated_date']=date("Y-m-d H:i:s");
		extract($_POST);
		$data['Select_Company']=$company;
		$data['name']=$nameperaddhar;
		$data['email']=$email;
		$data['mobile_number']=$mobile_com;
		$data['Address']=$address;
		$data['district']=$district;
		$data['State']=$state;
		$data['Postal_Pincode']=$pincode;
		$data['complain_types']=$complain_types;
		$data['type']=$type;
		$data['product_name']=$product_name;
		$data['cash_receipt_no']=$cash_receipt_no;
		$data['IN_ON_TN_number']=$invoice_no;
		$data['Purchase_Value']=$purchase_val;
		$data['Registered_Email_Address']=$reg_email;
		$data['Registered_Mobile_Number']=$reg_mobile;
		$data['Aadhaar_number']=$aadhar_no;
		$data['When_happen']=$wth;
		$data['Complaint_Details']=$complaint_details;
		$data['Loss_value']=$loss_val;
		$data['expect_from_COMPANY']=$ecrc;
		$data['warr_type']=$warr_type;
		if($warr_type!='' && !empty($warr_type))
			{
				$data['when_date']=$when_date;
			}
		$data['Company_response']=$company_res;
		
		
		$data['Interested_Parties']=$int_partes;
		$data['Earlier_communication_with_company']=$company_named;
		$data['Email_id']=$c_email_id;
		$data['Phone_Number']=$c_phone_no;
		$data['Register_Address']=$c_register_address;
		$data['c_state']=$c_state;
		$data['c_pincode']=$c_pincode;
		$this->db->where('id', $compla_id);
        $res=$this->db->update('complaint_details',$data);
			
			$data1['created_date']=date("Y-m-d H:i:s");
				//$path="./uploads/advacate/".$uid;
				//mkdir(label('802P').$compla_id, 0777, true);
				$path=label('802P').$compla_id.'/';
			if($_FILES['upload_comm_proof']['name']!='' && !empty($_FILES['upload_comm_proof']['name']))
			{
				$data1['upload_comm_proof']  = $this->common_model->uploadImg($path,'upload_comm_proof') ;
			}
			if($_FILES['invoice_order_file']['name']!='' && !empty($_FILES['invoice_order_file']['name']))
				{
					$data1['invoice_order_file']  = $this->common_model->uploadImg($path,'invoice_order_file') ;
				}
				if($_FILES['aadhar_no_vote']['name']!='' && !empty($_FILES['aadhar_no_vote']['name']))
				{
					$data1['aadhar_no_vote']  = $this->common_model->uploadImg($path,'aadhar_no_vote') ;
				}
				if($_FILES['transaction_receipt']['name']!='' && !empty($_FILES['transaction_receipt']['name']))
				{
					$data1['transaction_receipt']  = $this->common_model->uploadImg($path,'transaction_receipt') ;
				}
				if($_FILES['foulty_wrong1']['name']!='' && !empty($_FILES['foulty_wrong1']['name']))
				{
					$data1['foulty_wrong1']  = $this->common_model->uploadImg($path,'foulty_wrong1') ;
				}
				if($_FILES['foulty_wrong2']['name']!='' && !empty($_FILES['foulty_wrong2']['name']))
				{
					$data1['foulty_wrong2']  = $this->common_model->uploadImg($path,'foulty_wrong2') ;
				}
				
				
				$data1['updated_date']=date("Y-m-d H:i:s");
				$this->db->where('complaint_id', $compla_id);
				$this->db->update('complent_images',$data1);
		if($res){
			return 1;
		}else{return 0;}
	}
	public function uploadImg($path,$name){
			$fileExt = pathinfo($_FILES[$name]["name"], PATHINFO_EXTENSION);
			if($fileExt == 'pdf' || $fileExt == 'PDF' ){
				$img_name=rand(00,99).time().'.pdf';
			}else{
				$img_name=rand(00,99).time().'.jpeg';
			}
			$img_name = str_replace(' ', '_', $img_name);
			$this->load->library('upload');
			$config['upload_path']          = "./".$path;
			$config['allowed_types']        = "*";
			$this->upload->initialize($config);
			$_FILES['userfile']['name']=$img_name;
			$_FILES['userfile']['tmp_name']=$_FILES[$name]['tmp_name'];
			$_FILES['userfile']['size']=$_FILES[$name]['size'];
			if($this->upload->do_upload()){
			    //$this->common_model->compressImageSize($path.$img_name);
				return $path.$img_name;
			}else{
				return $this->upload->display_errors() ;
			}
		}
}
?>
