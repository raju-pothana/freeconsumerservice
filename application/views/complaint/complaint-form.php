<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Free Consumer Service &#8211; Consumer Court</title>
	<link type="text/css" href="<?= base_url(); ?>assets/bootstrap.min.css" rel="stylesheet">
	<link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<style>     
      .content-body{
        height: calc(100vh - 102px);
        overflow-y:auto;
        padding-top:20px;
        padding-bottom:20px;
      }
	  .textarea_text
		{
			width: 100%;margin-top: 0px;margin-bottom: 0px;height: 61px;
		}
	  .bd-highlight {
			background-color: azure; 
			border: 1px solid rgb(255, 0, 0);
		}
		input[type=number]::-webkit-inner-spin-button, 
		input[type=number]::-webkit-outer-spin-button { 
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
			margin: 0; 
		}
      .container{max-width:1140px}.form-group{margin-bottom:1rem}label{display:inline-block;margin-bottom:.5rem}.form-control{display:block;width:100%;height:36px !important; height:calc(1.5em + .75rem + 2px);padding:.375rem .75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#495057;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;border-radius:.25rem;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out}.btn-primary{color:#fff;background-color:#007bff;border-color:#007bff}.btn{display:inline-block;font-weight:400;color:#212529;text-align:center;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:transparent;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}.form-title{margin:15px 15px;text-transform:capitalize}.custom-form .form-group{width:calc(50% - 0px);float:left;padding:0 15px}.custom-form .form-group label{font-size:14px;    white-space: nowrap;overflow: hidden;text-overflow: ellipsis;padding-right: 80px;}.custom-form .custom-btn{padding:8px 16px;background:#0079c2;color:#fff!important;margin:10px auto;clear:both;float:right}.section-1,.section-2,.section-3,.section-4{display:inline-block;width:100%}.custom-file{position:relative;display:inline-block;width:100%;height:calc(1.5em + .75rem + 2px)}.custom-file-input{position:relative;z-index:2;width:100%;height:calc(1.5em + .75rem + 2px);margin:0;opacity:0}.custom-file-label{width:calc(100% - 30px);position:absolute;top:0;right:0;left:0;z-index:1;height:calc(1.5em + .75rem + 2px);padding:.375rem .75rem;font-weight:400;line-height:1.5;color:#495057;background-color:#fff;border:1px solid #ced4da;border-radius:.25rem}.custom-file-label::after{position:absolute;top:0;right:0;bottom:0;z-index:3;display:block;height:calc(1.5em + .75rem);padding:.375rem .75rem;line-height:1.5;color:#495057;content:"Browse";background-color:#e9ecef;border-left:inherit;border-radius:0 .25rem .25rem 0}.clear-both { clear: both; } .w-100p { width: 100%; } .steps { list-style: none; display: flex; padding-left: 0px; } .steps .step { white-space: nowrap; transition: 0.3s ease-in-out; background: #106e94; position: relative; height: 50px; line-height: 50px; margin-right: 30px; padding: 0 20px; } .steps .step>a { text-decoration: none; color: white; } .steps .step:last-child { margin-right: 0; } .steps .step.active { background: #0079c1 !important; } .steps .step.active::after { border-left: 25px solid #0079c1 !important; } .steps .step.active::after { border-left-color: #0079c1; } .steps .step.active::before { border-top-color: #0079c1; border-bottom-color: #0079c1; } .steps .step::before { transition: 0.3s ease-in-out; content: ""; position: absolute; top: 0; left: -25px; border-left: 25px solid transparent; border-top: 25px solid #106e94; border-bottom: 25px solid #106e94; } .steps .step:first-child::before { display: none; } .steps .step::after { transition: 0.3s ease-in-out; position: absolute; top: 0; right: -25px; border-left: 25px solid #106e94; border-top: 25px solid transparent; border-bottom: 25px solid transparent; content: ""; } .steps .step:last-child::after { display: none; } .steps .step:hover { /* background: hotpink; */ background: #0079c1; } .steps .step:hover::before { /* border-top-color: hotpink; border-bottom-color: hotpink; */ border-top-color: #0079c1; border-bottom-color: #0079c1; } .steps .step:hover::after { /* border-left-color: hotpink; */ border-left-color: #0079c1; } .steps .step:first-child { border-top-left-radius: 5px; border-bottom-left-radius: 5px; } .steps .step:last-child { border-top-right-radius: 5px; border-bottom-right-radius: 5px; }
    </style>
</head>
<body>

<section class="content-body">
<div class="container">
<div class="breadcrumbs">
<ul class="steps">
<li class="step step1 active"><a>Step 1</a></li>
<li class="step step2 "><a>Step 2</a></li>
<li class="step step3"><a>Step 3</a></li>
<li class="step step4"><a>Step 4</a></li>
</ul>
</div>
<h2 class="form-title">Complaint Form</h2>

<section class="custom-form">
<form method="POST" enctype='multipart/form-data' id="complaint_form" action="<?=base_url()?>complaint/saveComplaintDetails">
<section class="section-1">
	<div class="form-group">
		<label for="">Company </label><br>
		<input type="text" class="form-control" id="company" placeholder="" name="company">
	</div>
<div class="form-group">
                    <label for="">Name (As per  Aadhaar / Govt. ID ) </label><br>
                    <input type="text" class="form-control" id="nameperaddhar" placeholder="" name="nameperaddhar">
                </div>
<div class="form-group">
                    <label for="">Email Address</label><br>
                    <input type="text" class="form-control" id="email" placeholder="" name="email">
                </div>
<div class="form-group">
                    <label for="">Mobile Number</label><br>
                    <input type="number" class="form-control" id="mobile_com" placeholder="" name="mobile_com" onKeyPress="if(this.value.length==10) return false;">
                </div>
<div class="form-group">
                    <label for="">Address</label><br>
                    <input type="text" class="form-control" id="address" placeholder="" name="address">
                </div>
<div class="form-group">
                    <label for="">District</label><br>
                    <input type="text" class="form-control" id="district" placeholder="" name="district">
                </div>
<div class="form-group">
                    <label for="">State</label><br>
                    <input type="text" class="form-control" id="state" placeholder="" name="state">
                </div>
<div class="form-group">
                    <label for="">Pin Code</label><br>
                    <input type="number" class="form-control" id="pincode" placeholder="" name="pincode" onKeyPress="if(this.value.length==6) return false;">
                </div>
	<input type="button" class="btn custom-btn goto-step2" onClick="first()" value="Next">
</section>
<section class="section-2 d-none">
<div class="form-group">
                    <label for="">Selection of  Complain type</label><br>
                    <select  class="form-control" id="complain_types" placeholder="" name="complain_types">
					<option value="">Complain type</option>
					<option value="1">Complain Letter</option>
					<option value="2">Demand Draft</option>
					<option value="3">Legal Notice</option>
					</select>
                </div>
<div class="form-group">
                    <label for="">Select type</label><br>
                    <select  class="form-control" id="type" placeholder="" name="type">
					<option value="">Select type</option>
					<option value="1">Product </option>
					<option value="2">Service </option>
					</select>
                </div>
<div class="form-group">
                    <label for="">Name of the Product / Service</label><br>
                    <input type="text" class="form-control" id="product_name" placeholder="" name="product_name">
                </div>
				<div class="form-group">
                    <label for="">Title of the complaint (180 words)</label><br>
                    <textarea rows="3" class="textarea_text" id="title" placeholder="" name="title" ></textarea>
                </div>
<div class="form-group">
                    <label for="">Cash paid receipt Number </label><br>
                    <input type="text" class="form-control" id="cash_receipt_no" placeholder="" name="cash_receipt_no">
                </div>
<div class="form-group">
                    <label for="">Invoice Number / Order Number/ Ticket Number</label><br>
                    <input type="text" class="form-control" id="invoice_no" placeholder="" name="invoice_no">
                </div>
<div class="form-group">
                    <label for="">Purchase Value in Rs. </label><br>
                    <input type="number" class="form-control" id="purchase_val" placeholder="" name="purchase_val">
                </div>
<div class="form-group">
                    <label for="">Registered email during purchase transaction with the company </label><br>
                    <input type="text" class="form-control" id="reg_email" placeholder="" name="reg_email">
                </div>
<div class="form-group">
                    <label for="">Registered mobile number during purchase  transaction with the company</label><br>
                    <input type="number" class="form-control" id="reg_mobile" placeholder="" name="reg_mobile" onKeyPress="if(this.value.length==10) return false;">
                </div>
<div class="form-group">
                    <label for="">AADHAAR Number (last 4 digits only )</label><br>
                    <input type="number" class="form-control" id="aadhar_no" placeholder="" name="aadhar_no" onKeyPress="if(this.value.length==4) return false;">
                </div>
	<div class="form-group">
		<label for="">When this happen (Date)</label><br>
		<input type="date" class="form-control" id="wth" placeholder="" name="wth">
	</div>
	<div class="form-group">
		<label for="">Complaint Details / What happened? </label><br>
		<input type="text" class="form-control" id="complaint_details" placeholder="" name="complaint_details">
	</div>
	<div class="form-group">
		<label for="">Loss Value / how much you affected? </label><br>
		<input type="text" class="form-control" id="loss_val" placeholder="" name="loss_val">
	</div>
	<div class="form-group">
		<label for="">What would you expect from the Company to resolve your complaint?</label><br>
		<input type="text" class="form-control" id="ecrc" placeholder="" name="ecrc">
	</div>
	<div class="form-group">
		<label for="">Have you raised this issue before Warranty / complaint period with Company?</label><br>
		<input type="radio" id="yes" name="warr_type" value="Yes" onClick="showDate(1);"> Yes
		<input type="radio" id="no" name="warr_type" value="No" onClick="showDate(0);"> No
	</div>
	<div class="form-group d-none" id="whenDate">
		<label for="">When (Date) & How (Email / Phone message)</label><br>
		<input type="date" class="form-control" id="when_date" placeholder="" name="when_date">
	</div>
	<div class="form-group">
		<label for="">Company response (name of people who interacted & designation)</label><br>
		<input type="text" class="form-control" id="company_res" placeholder="" name="company_res">
	</div>
	<div class="form-group custom-file">
		<label class="custom-file-label" for="upload_comm_proof">Upload (Communication proof with company)   </label><br>
		<input type="file" class="custom-file-input" id="upload_comm_proof" name="upload_comm_proof">
	</div>
	<div class="form-group">
		<label for="">Interested Parties (here add the fields)</label><br>
		<input type="text" class="form-control" id="int_partes" placeholder="" name="int_partes">
	</div>
	<div class="form-group">
		<label for="">Company name</label><br>
		<input type="text" class="form-control" id="company_named" placeholder="" name="company_named">
	</div>
	<div class="form-group">
		<label for="">Email id</label><br>
		<input type="text" class="form-control" id="c_email_id" placeholder="" name="c_email_id">
	</div>
	<div class="form-group">
		<label for="">Phone Number</label><br>
		<input type="number" class="form-control" id="c_phone_no" placeholder="" name="c_phone_no" onKeyPress="if(this.value.length==10) return false;">
	</div>
	<div class="form-group">
		<label for="">Register Address</label><br>
		<input type="text" class="form-control" id="c_register_address" placeholder="" name="c_register_address">
	</div>
	<div class="form-group">
		<label for="">State</label><br>
		<input type="text" class="form-control" id="c_state" placeholder="" name="c_state">
	</div>
	<div class="form-group">
		<label for="">Pincode</label><br>
		<input type="text" class="form-control" id="c_pincode" placeholder="" name="c_pincode" onKeyPress="if(this.value.length==6) return false;">
	</div>
<p>         
       <button type="button" class="btn custom-btn goback-step1 float-left" onClick="previousSecond()">Prev</button>
	   <button type="button" class="btn custom-btn goto-step3" onClick="second()">Next</button>
    </p>
</section>
<section class="section-3 d-none">
	<div class="form-group custom-file">
		<label class="custom-file-label" for="resumeFile">Invoice / Order scan copy (PDF Only)</label><br>
		<input type="file" class="custom-file-input" id="invoice_order_file" name="invoice_order_file">
	</div>
	<div class="form-group custom-file">
		<label class="custom-file-label" for="resumeFile">Upload your Aadhaar/ Voter ID, Driving License, Passport, PAN card</label><br>
		<input type="file" class="custom-file-input" id="aadhar_no_vote" name="aadhar_no_vote">
	</div>
	<div class="form-group custom-file">
		<label class="custom-file-label" for="resumeFile">Transaction receipt scan copy</label><br>
		<input type="file" class="custom-file-input" id="transaction_receipt" name="transaction_receipt">
	</div>
	<div class="form-group custom-file">
		<label class="custom-file-label" for="resumeFile">Faulty / Wrong Product photo 1 </label><br>
		<input type="file" class="custom-file-input" id="foulty_wrong1" name="foulty_wrong1">
	</div>
	<div class="form-group custom-file">
		<label class="custom-file-label" for="resumeFile">Faulty / Wrong Product photo 2</label><br>
		<input type="file" class="custom-file-input" id="foulty_wrong2" name="foulty_wrong2">
	</div>
	<div class="form-group custom-file">
		<label class="custom-file-label" for="resumeFile">Youtube Video (optional)</label><br>
		<input type="file" class="custom-file-input" id="youtube_video" name="youtube_video">
	</div>

		
<div class="row w-100p">
	<div class="col-md-6">
			<button type="button" class="btn custom-btn goback-step2 float-left" onClick="previousThird()">Prev</button>
		</div>
		<div class="col-md-6">
			<button type="button" class="btn custom-btn goto-step4" onClick="third()">Next</button>
		</div>
<p></p>
</div>
</section>
<section class="section-4 d-none">
	<div class="form-group">
		<label for="">Company : <span id="viewCompany"></span></label>
	</div>
	<!--
	<div class="form-group">
		<label for="">Email Address : <span id="viewEmail"></span></label>
	</div>
	<div class="form-group">
		<label for="">Mobile Number : <span id="viewMobile"></span></label>
	</div>
	<div class="form-group">
		<label for="">Address : <span id="viewAddress"></span></label>
	</div>
	<div class="form-group">
		<label for="">District : <span id="viewDistrict"></span></label>
	</div>
	<div class="form-group">
		<label for="">State : <span id="viewState"></span></label>
	</div>
	<div class="form-group">
		<label for="">Pin Code : <span id="viewPincode"></span></label>
	</div>
	<div class="form-group">
		<label for="">Place of Practicing : <span id="viewPlapracticing"></span></label>
	</div>
	<div class="form-group">
		<label for="">Specialized practice areas : <span id="viewSpecialized"></span></label>
	</div>
	<div class="form-group">
		<label for="">Known Languages : <span id="viewLanguages"></span></label>
	</div>
	<div class="form-group">
		<label for="">Experience with Bar ( in Yrs) : <span id="viewExperience"></span></label>
	</div>
	<div class="form-group">
		<label for="">Enrolment Number issued by concern State Bar Association. : <span id="viewEnrolment"></span></label>
	</div>
	<div class="form-group">
		<label for="">Number of Legal Cases and its particulars where he/she holds Vakalatnama : <span id="viewLegalcases"></span></label>
	</div>
	<div class="form-group">
		<label for="">Education : <span id="viewEducation"></span></label>
	</div>
	<div class="form-group">
		<label for="">Experience if any : <span id="viewExperienceif"></span></label>
	</div>
	<div class="form-group">
		<label for="">Consultation Fee : <span id="viewConsultation"></span></label>
	</div>
	<div class="form-group">
		<label for="">Cost Per Hour : <span id="viewCph"></span></label>
	</div>
	<div class="form-group">
		<label for="">Resume</label><image id="blahResume" src="#" alt="your image" height="60" width="70"></image>
	</div>
	<div class="form-group">
		<label for="">Education Qualification Certificates</label><image id="blahEduQualification" src="#" alt="your image1" height="60" width="70"></image>
	</div>
	<div class="form-group">
		<label for="">Enrolment Certificate (Pdf Only)</label><image id="blahEnCertificate" src="#" alt="your image2" height="60" width="70"></image>
	</div>
	<div class="form-group">
		<label for="">Identity card issued by the concern Bar<br>
			Association where he/she practicing</label><image id="blahIdentity" src="#" alt="your image3" height="60" width="70"></image>
	</div>
	<div class="form-group">
		<label for="">Practicing certificate issued by<br>
			President/Secretary where he has been</label><image id="blahPracticingcertificate" src="#" alt="your image4" height="60" width="70"></image>
	</div>
	<div class="form-group">
		<label for="">Practicing at concern bar association.</label><image id="blahBarassociation" src="#" alt="your image5" height="60" width="70"></image>
	</div>
	<div class="form-group">
		<label for="">Practing certificate issued by President/Secretary<br>
			where he has been</label><image id="blahPractingcertificateissued" src="#" alt="your image6" height="60" width="70"></image>
	</div>
	<div class="form-group">
		<label for="">Pass port size Photo(with coat )</label><image id="blahPassport" src="#" alt="your image7" height="60" width="70"></image>
	</div>
	<div class="form-group">
		<label for="">AFFIDAVIT – Accepting the terms and conditions</label><image id="blahAffidavit" src="#" alt="your image8" height="60" width="70"></image>
	</div>
	-->
	<div class="row w-100p">
		<div class="col-md-6">
			<button type="button" class="btn custom-btn goback-step4 float-left" onclick="previousForth()">Prev</button>
		</div>
		<div class="col-md-6">
			<button type="button" class="btn custom-btn " onclick="saveComDetails();" >Submit</button>
		</div>
	<p></p>
	</div>
</section>
</section>
</div>
</form>
</section>
</body>
</html>
<script src="<?php echo base_url();?>js/cust_comlpaint/complaint.js" ></script>
