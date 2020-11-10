<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//$path="./".label('801P');
//echo label('801P');die;
?>
<!DOCTYPE html>
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
		input[type=text].rupee {
			background-image: url(http://i.imgur.com/Fd7NROx.png);
			border: 1px solid #aaa;
			padding: 5px;
			padding-left: 20px; /* Indent the text values inside textbox */
			background-size: 20px 25px; /* Change symbol size */
			background-repeat: no-repeat; /* So that rupee image doesn't repeat */
		}
		.textarea_text
		{
			width: 100%;margin-top: 0px;margin-bottom: 0px;height: 61px;
		}
      .content-body{
        height: calc(100vh - 102px);
        overflow-y:auto;
        padding-top:20px;
        padding-bottom:20px;
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
<h2 class="form-title">Attroney1</h2>
<section class="custom-form">
<form method="POST" enctype='multipart/form-data' id="advacate_form">
<section class="section-1">
	<div class="form-group">
		<label for="">Name of the Advocate (with capital letters)</label><br>
		<input type="text" class="form-control" id="advocate" placeholder="" name="advocate" value="<?= $advocateDetails['name_advocate'];?>">
	</div>
	<div class="form-group">
		<label for="">Email Address</label><br>
		<input type="text" class="form-control" id="email" placeholder="" name="email" value="<?= $advocateDetails['email'];?>">
	</div>
	<!-- onKeyPress="if(this.value.length==10) return false;"-->
	<div class="form-group">
		<label for="">Mobile Number</label><br>
		<input type="number" class="form-control" id="mobileNo" placeholder="" name="mobileno"  onKeyPress="if(this.value.length==10) return false;" value="<?= $advocateDetails['mobile_number'];?>">
	</div>
	<div class="form-group">
		<label for="">Address</label><br>
		<textarea rows="3" class="textarea_text" id="address" placeholder="" name="address" ><?= $advocateDetails['address'];?></textarea>
	</div>
	<div class="form-group">
		<label for="">District</label><br>
		<input type="text" class="form-control" id="district" placeholder="" name="district" value="<?= $advocateDetails['district'];?>">
	</div>
	<div class="form-group">
		<label for="">State</label><br>
		<input type="text" class="form-control" id="state" placeholder="" name="state" value="<?= $advocateDetails['state'];?>">
	</div>
	<div class="form-group">
		<label for="">Pin Code</label><br>
		<input type="number" class="form-control" id="pincode" placeholder="" name="pincode" onKeyPress="if(this.value.length==6) return false;" value="<?= $advocateDetails['pin_code'];?>">
	</div>
	<div class="form-group">
		<label for="">Nearest City</label><br>
		<input type="text" class="form-control" id="nearestcity" placeholder="" name="nearestcity" value="<?= $advocateDetails['nearestcity'];?>">
	</div>
	<div class="form-group">
		<label for="">About You </label><br>
		<textarea rows="3" class="textarea_text" id="about_u" placeholder="" name="about_u" ><?= $advocateDetails['about_u'];?></textarea>
	</div>
	    
		<input type="button" class="btn custom-btn goto-step2" onClick="first()" value="Next" >
    
</section>
<section class="section-2 d-none">
	<div class="form-group">
		<label for="">Place of Practicing (Courts)</label><br>
		<input type="text" class="form-control" id="practicing" placeholder="" name="practicing" value="<?= $advocateDetails['practicing_place'];?>">
	</div>
	<div class="form-group">
		<label for="">Specialized practice areas</label><br>
		<textarea rows="3" class="textarea_text" id="practicearea" placeholder="" name="practicearea" ><?= $advocateDetails['specialized_practice_areas'];?></textarea>
	
	</div>
	<div class="form-group">
		<label for="">Languages Spoken</label><br>
		<input type="text" class="form-control" id="languages" placeholder="" name="languages" value="<?= $advocateDetails['known_languages'];?>">
	</div>
	<div class="form-group">
		<label for="">Experience with Bar ( in Yrs) </label><br>
		<input type="text" class="form-control" id="barexperience" placeholder="" name="barexperience" value="<?= $advocateDetails['experience'];?>">
	</div>
	<div class="form-group">
		<label for="">Enrolment Number issued by concern State Bar Association.</label><br>
		<input type="text" class="form-control" id="enrolmentnumber" placeholder="" name="enrolmentnumber" value="<?= $advocateDetails['enrolment_no'];?>">
	</div>
	<div class="form-group">
		<label for="">Number of Legal Cases and its particulars where he/she holds Vakalatnama</label><br>
		<textarea rows="3" class="textarea_text" id="noofleagalcases" placeholder="" name="noofleagalcases" ><?= $advocateDetails['number_of_legal_cases'];?></textarea>
	</div>
	<div class="form-group">
		<label for="">Education </label><br>
		<textarea rows="3" class="textarea_text" id="education" placeholder="" name="education" ><?= $advocateDetails['education'];?></textarea>
	</div>
	<div class="form-group">
		<label for="">Experience if any (optional)</label><br>
		<textarea rows="3" class="textarea_text" id="experience" placeholder="" name="experience" ><?= $advocateDetails['experience_if_any'];?></textarea>
	</div>
	<div class="form-group">
		<label for="">Consultation Fee</label><br>
		<input type="text" class="form-control rupee" id="consultationfee" placeholder="" name="consultationfee" value="<?= $advocateDetails['consultation_Fee'];?>">
	</div>
	<div class="form-group">
		<label for="">Cost Per Hour</label><br>
		<input type="text" class="form-control rupee" id="cph" placeholder="" name="cph" value="<?= $advocateDetails['cost_per_hour'];?>">
	</div>
	<p>         
       <button type="button" class="btn custom-btn goback-step1 float-left" onClick="previousSecond()">Prev</button>
	   <button type="button" class="btn custom-btn goto-step3" onClick="second()">Next</button>
    </p>
</section>
<section class="section-3 d-none">
	
	<div class="form-group custom-file" >
	
	<label class="custom-file-label" for="resumeFile">Resume</label><br>
		<div>
			<input type="file" class="custom-file-input" id="resumeFiles" name="resumefiles" onchange="imaa(this);">
		</div>
		<?php if($advocateDetails['resumefiles']!='' ){ ?>
		<div>
			<img src="<?= base_url();?><?= $advocateDetails['resumefiles'];?>" height="60" width="60" style="
			margin-top: -145px;"></img>
		</div>
		<?php } ?>
	</div>
	
	<div class="form-group custom-file">
		<label class="custom-file-label" for="resumeFile">Education Qualification Certificates 1<br>
			(Optional)</label><br>
		<div>
			<input type="file" class="custom-file-input" id="eqcertificate" name="eqcertificate">
			<?php if($advocateDetails['eqcertificate']!='' ){ ?>
		<div>
			<img src="<?= base_url();?><?= $advocateDetails['eqcertificate'];?>" height="60" width="60" style="
			margin-top: -145px;"></img>
		</div>
		<?php } ?>
		</div>
	</div>
	
	<div class="form-group custom-file">
		<label class="custom-file-label" for="resumeFile">Education Qualification Certificates 2<br>
			(Optional)</label><br>
		<div>
			<input type="file" class="custom-file-input" id="eqcertificate2" name="eqcertificate2">
		</div>
	</div>
	<div class="form-group custom-file">
		<label class="custom-file-label" for="resumeFile">Education Qualification Certificates 3<br>
			(Optional)</label><br>
		<div>
			<input type="file" class="custom-file-input" id="eqcertificate3" name="eqcertificate3">
		</div>
	</div>
	
	<div class="form-group custom-file">
		<label class="custom-file-label" for="resumeFile">Enrolment Certificate (Pdf Only)</label><br>
		<div>
			<input type="file" class="custom-file-input" id="encertificate" name="encertificate">
			<?php if($advocateDetails['encertificate']!='' ){ ?>
		<div>
			<img src="<?= base_url();?><?= $advocateDetails['encertificate'];?>" height="60" width="60" style="
			margin-top: -145px;"></img>
		</div>
		<?php } ?>
		</div>
	</div>
	<div class="form-group custom-file">
		<label class="custom-file-label" for="resumeFile">Practing certificate issued by President/Secretary where he has been practing at concern bar association.</label><br>
		<div>
			<input type="file" class="custom-file-input" id="identitycard" name="identitycard">
			<?php if($advocateDetails['identitycard']!='' ){ ?>
		<div>
			<img src="<?= base_url();?><?= $advocateDetails['identitycard'];?>" height="60" width="60" style="
			margin-top: -145px;"></img>
		</div>
		<?php } ?>
		</div>
	</div>
	<div class="form-group custom-file">
		<label class="custom-file-label" for="resumeFile">Practicing at concern bar association.</label><br>
		<input type="file" class="custom-file-input" id="practconcern" name="practconcern">
		<?php if($advocateDetails['practconcern']!='' ){ ?>
		<div>
			<img src="<?= base_url();?><?= $advocateDetails['practconcern'];?>" height="60" width="60" style="
			margin-top: -145px;"></img>
		</div>
		<?php } ?>
	</div>
	<div class="form-group custom-file">
		<label class="custom-file-label" for="resumeFile">Practing certificate issued by President/Secretary<br>
			where he has been</label><br>
		<div>
			<input type="file" class="custom-file-input" id="practcertificateissuedwhere" name="practcertificateissuedwhere">
			<?php if($advocateDetails['practcertificateissuedwhere']!='' ){ ?>
		<div>
			<img src="<?= base_url();?><?= $advocateDetails['practcertificateissuedwhere'];?>" height="60" width="60" style="
			margin-top: -145px;"></img>
		</div>
		<?php } ?>
		</div>
	</div>
	<div class="form-group custom-file">
		<label class="custom-file-label" for="resumeFile">Pass port size Photo(with coat )</label><br>
		<div>
			<input type="file" class="custom-file-input" id="passportphoto" name="passportphoto">
			<?php if($advocateDetails['passportphoto']!='' ){ ?>
		<div>
			<img src="<?= base_url();?><?= $advocateDetails['passportphoto'];?>" height="60" width="60" style="
			margin-top: -145px;"></img>
		</div>
		<?php } ?>
		</div>
	</div>
	<!--<div class="form-group custom-file">
		<label class="custom-file-label" for="resumeFile">AFFIDAVIT – Accepting the terms and conditions<br>
		</label><br>
		<div>
			<input type="file" class="custom-file-input" id="affidavit" name="affidavit">
			<?php if($advocateDetails['affidavit']!='' ){ ?>
		<div>
			<img src="<?= base_url();?><?= $advocateDetails['affidavit'];?>" height="60" width="60" style="
			margin-top: -145px;"></img>
		</div>
		<?php } ?>
		</div>
	</div>-->
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
		<label for="">Name of the Advocate : <span id="viewAdvacate"></span></label>
	</div>
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
	
	<div class="row w-100p">
		<div class="col-md-6">
			<button type="button" class="btn custom-btn goback-step4 float-left" onclick="previousForth()">Prev</button>
		</div>
		<div class="col-md-6">
		<input type="hidden" id="advacated_id" name="advacated_id" value="<?=$advocateDetails['id'];?>">
			<button type="submit" class="btn custom-btn " onclick="editAdvacateDetails();" >Submit</button>
		</div>
	<p></p>
	</div>
</section>
</section>
</form>
</div>
</section>
</body>
</html>
<script src="<?php echo base_url();?>/js/advacate/advForm.js" ></script>

