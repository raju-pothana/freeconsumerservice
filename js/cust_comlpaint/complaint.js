function first(){
	var company=$('#company').val();
		 if(company=='' || company===null || typeof(company)  === "undefined")
		 {
			$("#company").focus();
			return false;
		 }
	var nameperaddhar=$('#nameperaddhar').val();
		 if(nameperaddhar=='' || nameperaddhar===null || typeof(nameperaddhar)  === "undefined")
		 {
			$("#nameperaddhar").focus();
			return false;
		 } 
		 var email=$('#email').val();
		 if(IsEmail(email)==false){
			$("#email").focus();
			return false;
		 }
		 var mobile_com=$('#mobile_com').val();
		 if(mobile_com=='' || mobile_com===null || typeof(mobile_com)  === "undefined")
		 {
			$("#mobile_com").focus();
			return false;
		 } var address=$('#address').val();
		 if(address=='' || address===null || typeof(address)  === "undefined")
		 {
			$("#address").focus();
			return false;
		 } 
		 var district=$('#district').val();
		 if(district=='' || district===null || typeof(district)  === "undefined")
		 {
			$("#district").focus();
			return false;
		 } 
		 var state=$('#state').val();
		 if(state=='' || state===null || typeof(state)  === "undefined")
		 {
			$("#state").focus();
			return false;
		 }
		 var pincode=$('#pincode').val();
		 if(pincode=='' || pincode===null || typeof(pincode)  === "undefined")
		 {
			$("#pincode").focus();
			return false;
		 } 
		 $(".section-1,.section-3.section-4").addClass("d-none"); $(".section-2").removeClass("d-none"); $(".step1,.step3,.step4").removeClass('active'); $(".step2").addClass('active');
}
function second(){
	var complain_types=$('#complain_types').val();
		 if(complain_types=='' || complain_types===null || typeof(complain_types)  === "undefined")
		 {
			$("#complain_types").focus();
			return false;
		 } 
		 var type=$('#type').val();
		 if(type=='' || type===null || typeof(type)  === "undefined")
		 {
			$("#type").focus();
			return false;
		 }
		 var product_name=$('#product_name').val();
		 if(product_name=='' || product_name===null || typeof(product_name)  === "undefined")
		 {
			$("#product_name").focus();
			return false;
		 } var cash_receipt_no=$('#cash_receipt_no').val();
		 if(cash_receipt_no=='' || cash_receipt_no===null || typeof(cash_receipt_no)  === "undefined")
		 {
			$("#cash_receipt_no").focus();
			return false;
		 } 
		 var invoice_no=$('#invoice_no').val();
		 if(invoice_no=='' || invoice_no===null || typeof(invoice_no)  === "undefined")
		 {
			$("#invoice_no").focus();
			return false;
		 } 
		 var purchase_val=$('#purchase_val').val();
		 if(purchase_val=='' || purchase_val===null || typeof(purchase_val)  === "undefined")
		 {
			$("#purchase_val").focus();
			return false;
		 }
		 var reg_email=$('#reg_email').val();
		 if(IsEmail(reg_email)==false){
			$("#reg_email").focus();
			return false;
		 }
		var reg_mobile=$('#reg_mobile').val();
		 if(reg_mobile=='' || reg_mobile===null || typeof(reg_mobile)  === "undefined")
		 {
			$("#reg_mobile").focus();
			return false;
		 }
		 var aadhar_no=$('#aadhar_no').val();
		 if(aadhar_no=='' || aadhar_no===null || typeof(aadhar_no)  === "undefined")
		 {
			$("#aadhar_no").focus();
			return false;
		 }
		 var wth=$('#wth').val();
		 if(wth=='' || wth===null || typeof(wth)  === "undefined")
		 {
			$("#wth").focus();
			return false;
		 }
		 var complaint_details=$('#complaint_details').val();
		 if(complaint_details=='' || complaint_details===null || typeof(complaint_details)  === "undefined")
		 {
			$("#complaint_details").focus();
			return false;
		 }
		var loss_val=$('#loss_val').val();
		 if(loss_val=='' || loss_val===null || typeof(loss_val)  === "undefined")
		 {
			$("#loss_val").focus();
			return false;
		 }
		 var ecrc=$('#ecrc').val();
		 if(ecrc=='' || ecrc===null || typeof(ecrc)  === "undefined")
		 {
			$("#ecrc").focus();
			return false;
		 }
		 var loss_val=$('#loss_val').val();
		 if(loss_val=='' || loss_val===null || typeof(loss_val)  === "undefined")
		 {
			$("#loss_val").focus();
			return false;
		 }
		 var loss_val=$('#loss_val').val();
		 if(loss_val=='' || loss_val===null || typeof(loss_val)  === "undefined")
		 {
			$("#loss_val").focus();
			return false;
		 }
		 var loss_val=$('#loss_val').val();
		 if(loss_val=='' || loss_val===null || typeof(loss_val)  === "undefined")
		 {
			$("#loss_val").focus();
			return false;
		 }
		 
		 $(".section-1,.section-2,.section-4").addClass("d-none"); $(".section-3").removeClass("d-none"); $(".step1,.step2,.step4").removeClass('active'); $(".step3").addClass('active');
}
function third(){
	//var resu =$('#resumeFiles').val();
	//var filename = $('input[type=file]').val().split('\\').pop();
	//alert(filename);
	//$('#viewResu').attr('src',filename);
	
	/*if (jQuery('#resumeFiles').val() == '' ) 
	 {
		 alert('please attach resume');
		$("#resumeFiles").addClass("bd-highlight");
		$("#resumeFiles").focus();
		return false;
	 } 
	 if (jQuery('#encertificate').val() == '' ) 
	 {
		 alert('please attach enrolment certificate');
		$("#encertificate").addClass("bd-highlight");
		$("#encertificate").focus();
		return false;
	 }
	 if (jQuery('#identitycard').val() == '' ) 
	 {
		 alert('please attach Identity card');
		$("#identitycard").addClass("bd-highlight");
		$("#identitycard").focus();
		return false;
	 }
	 if (jQuery('#practcertificateissued').val() == '' ) 
	 {
		 alert('please attach Practicing certificate');
		$("#practcertificateissued").addClass("bd-highlight");
		$("#practcertificateissued").focus();
		return false;
	 }
	 if (jQuery('#practconcern').val() == '' ) 
	 {
		 alert('please attach Practicing at concern bar association');
		$("#practconcern").addClass("bd-highlight");
		$("#practconcern").focus();
		return false;
	 }
	 if (jQuery('#practcertificateissuedwhere').val() == '' ) 
	 {
		 alert('Practing certificate issued by President');
		$("#practcertificateissuedwhere").addClass("bd-highlight");
		$("#practcertificateissuedwhere").focus();
		return false;
	 }
	 if (jQuery('#passportphoto').val() == '' ) 
	 {
		 alert('please attach Pass port size Photo');
		$("#passportphoto").addClass("bd-highlight");
		$("#passportphoto").focus();
		return false;
	 }
	 if (jQuery('#passportphoto').val() == '' ) 
	 {
		 alert('please attach AFFIDAVIT');
		$("#affidavit").addClass("bd-highlight");
		$("#affidavit").focus();
		return false;
	 }*/
	var company =$('#company').val();
	$('#viewCompany').text(company);	
	var viewemail =$('#email').val();
	$('#viewEmail').text(viewemail);
	var mobileNo =$('#mobileNo').val();
	$('#viewMobile').text(mobileNo);
	var viewAddress =$('#address').val();
	$('#viewAddress').text(viewAddress);
	var viewDistrict =$('#district').val();
	$('#viewDistrict').text(viewDistrict);
	var viewState =$('#state').val();
	$('#viewState').text(viewState);
	var viewPincode =$('#pincode').val();
	$('#viewPincode').text(viewPincode);
	var viewPlapracticing =$('#practicing').val();
	$('#viewPlapracticing').text(viewPlapracticing);
	var viewSpecialized =$('#practicearea').val();
	$('#viewSpecialized').text(viewSpecialized);
	var viewLanguages =$('#languages').val();
	$('#viewLanguages').text(viewLanguages);
	var viewExperience =$('#barexperience').val();
	$('#viewExperience').text(viewExperience);
	var viewEnrolment =$('#enrolmentnumber').val();
	$('#viewEnrolment').text(viewEnrolment);
	var viewLegalcases =$('#noofleagalcases').val();
	$('#viewLegalcases').text(viewLegalcases);
	var viewEducation =$('#education').val();
	$('#viewEducation').text(viewEducation);
	var viewExperienceif =$('#experience').val();
	$('#viewExperienceif').text(viewExperienceif);
	var viewConsultation =$('#consultationfee').val();
	$('#viewConsultation').text(viewConsultation);
	var viewCph =$('#cph').val();
	$('#viewCph').text(viewCph);
	
	
	$(".section-1,.section-2,.section-3").addClass("d-none"); $(".section-4").removeClass("d-none"); $(".step1,.step2,.step3").removeClass('active'); $(".step4").addClass('active');
}
function previousSecond()
{
$(".section-2,.section-3,.section-4").addClass("d-none"); $(".section-1").removeClass("d-none"); $(".step2,.step3,.step4").removeClass('active'); $(".step1").addClass('active');	
}
function previousThird()
{
$(".section-1,.section-3,.section-4").addClass("d-none"); $(".section-2").removeClass("d-none"); $(".step1,.step3,.step4").removeClass('active'); $(".step2").addClass('active');	
}
function previousForth()
{
$(".section-1,.section-2,.section-4").addClass("d-none"); $(".section-3").removeClass("d-none"); $(".step1,.step2,.step4").removeClass('active'); $(".step3").addClass('active');	
}
function saveAdvacateDetails(){
	
	//disableBtn('btnSubmit',0);
	var formData = new FormData($('#complaint_form')[0]);
		$.ajax({
		  type:"POST",
		  url:base_url+"complaint/saveComplaintDetails",
		  data:formData ,
		  contentType: false,
		  cache: false,
		  processData: false,
		  dataType:'json',
		  success: function(data){
		    if(data.success==false){
					window.location.href = base_url+'complaint';
				} 	
		  }
		});
}
function saveComplaintDetails(){
	
	//disableBtn('btnSubmit',0);
	var formData = new FormData($('#complaint_form')[0]);
		$.ajax({
		  type:"POST",
		  url:base_url+"complaint/editcomplaintDetails",
		  data:formData ,
		  contentType: false,
		  cache: false,
		  processData: false,
		  dataType:'json',
		  success: function(data){
			window.location.href = base_url+'complaint';
		  }
		});
}
function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test(email)) {
           return false;
        }else{
           return true;
        }
      }
function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
	function readURL(input,id) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#'+id).attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
if (jQuery('#resumeFiles').val() != '' ) 
	 {
		$("#resumeFiles").change(function(){
			readURL(this,'blahResume');
		});
	 }
	 if (jQuery('#eqcertificate').val() != '' ) 
	 {
		$("#eqcertificate").change(function(){
			readURL(this,'blahEduQualification');
		});
	 }
	 if (jQuery('#encertificate').val() != '' ) 
	 {
		$("#encertificate").change(function(){
			readURL(this,'blahEnCertificate');
		});
	 }
	 if (jQuery('#identitycard').val() != '' ) 
	 {
		$("#identitycard").change(function(){
			readURL(this,'blahIdentity');
		});
	 }
	 if (jQuery('#practcertificateissued').val() != '' ) 
	 {
		$("#practcertificateissued").change(function(){
			readURL(this,'blahPracticingcertificate');
		});
	 }
	  if (jQuery('#practconcern').val() != '' ) 
	 {
		$("#practconcern").change(function(){
			readURL(this,'blahBarassociation');
		});
	 }
	 if (jQuery('#practcertificateissuedwhere').val() != '' ) 
	 {
		$("#practcertificateissuedwhere").change(function(){
			readURL(this,'blahPractingcertificateissued');
		});
	 }
	 if (jQuery('#practcertificateissuedwhere').val() != '' ) 
	 {
		$("#practcertificateissuedwhere").change(function(){
			readURL(this,'blahPassport');
		});
	 }
	 if (jQuery('#affidavit').val() != '' ) 
	 {
		$("#affidavit").change(function(){
			readURL(this,'blahAffidavit');
		});
	 }
	 function showDate(val)
	 {
		 if(val=='1')
		 {
			 $("#whenDate").removeClass('d-none');
		 }
		 else{
			 $("#whenDate").addClass('d-none');
		 }
	 }
	