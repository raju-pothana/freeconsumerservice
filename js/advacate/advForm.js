function first(){
	var advocate=$('#advocate').val();
		 if(advocate=='' || advocate===null || typeof(advocate)  === "undefined")
		 {
			$("#advocate").focus();
			return false;
		 } 
		 var email=$('#email').val();
		 if(IsEmail(email)==false){
			$("#email").focus();
			return false;
		 }
		 var mobileNo=$('#mobileNo').val();
		 if(mobileNo=='' || mobileNo===null || typeof(mobileNo)  === "undefined")
		 {
			$("#mobileNo").focus();
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
		 var nearestcity=$('#nearestcity').val();
		 if(nearestcity=='' || nearestcity===null || typeof(nearestcity)  === "undefined")
		 {
			$("#nearestcity").focus();
			return false;
		 }
		 /*var about_u=$('#about_u').val();
		 if(about_u=='' || about_u===null || typeof(about_u)  === "undefined")
		 {
			$("#about_u").focus();
			return false;
		 }*/
		 $(".section-1,.section-3.section-4").addClass("d-none"); $(".section-2").removeClass("d-none"); $(".step1,.step3,.step4").removeClass('active'); $(".step2").addClass('active');
}
function second(){
	var practicing=$('#practicing').val();
		 if(practicing=='' || practicing===null || typeof(practicing)  === "undefined")
		 {
			$("#practicing").focus();
			return false;
		 } 
		 /*var practicearea=$('#practicearea').val();
		 if(practicearea=='' || practicearea===null || typeof(practicearea)  === "undefined")
		 {
			$("#practicearea").focus();
			return false;
		 }*/
		 var languages=$('#languages').val();
		 if(languages=='' || languages===null || typeof(languages)  === "undefined")
		 {
			$("#languages").focus();
			return false;
		 } var barexperience=$('#barexperience').val();
		 if(barexperience=='' || barexperience===null || typeof(barexperience)  === "undefined")
		 {
			$("#barexperience").focus();
			return false;
		 } 
		 var enrolmentnumber=$('#enrolmentnumber').val();
		 if(enrolmentnumber=='' || enrolmentnumber===null || typeof(enrolmentnumber)  === "undefined")
		 {
			$("#enrolmentnumber").focus();
			return false;
		 } 
		 /*var noofleagalcases=$('#noofleagalcases').val();
		 if(noofleagalcases=='' || noofleagalcases===null || typeof(noofleagalcases)  === "undefined")
		 {
			$("#noofleagalcases").focus();
			return false;
		 }*/
		 /*var education=$('#education').val();
		 if(education=='' || education===null || typeof(education)  === "undefined")
		 {
			$("#education").focus();
			return false;
		 }
		var education=$('#education').val();
		 if(education=='' || education===null || typeof(education)  === "undefined")
		 {
			$("#education").focus();
			return false;
		 }
		 var experience=$('#experience').val();
		 if(experience=='' || experience===null || typeof(experience)  === "undefined")
		 {
			$("#experience").focus();
			return false;
		 }*/
		 var consultationfee=$('#consultationfee').val();
		 if(consultationfee=='' || consultationfee===null || typeof(consultationfee)  === "undefined")
		 {
			$("#consultationfee").focus();
			return false;
		 }
		 var cph=$('#cph').val();
		 if(cph=='' || cph===null || typeof(cph)  === "undefined")
		 {
			$("#cph").focus();
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
	var viewAdvacate =$('#advocate').val();
	$('#viewAdvacate').text(viewAdvacate);	
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
	var formData = new FormData($('#advacate_form')[0]);
		$.ajax({
		  type:"POST",
		  url:base_url+"advocates/saveAdvacateDetails",
		  data:formData ,
		  contentType: false,
		  cache: false,
		  processData: false,
		  dataType:'json',
		  success: function(data){
			  if(data.success==true){
					window.location.href = base_url+'advocates';
			  }
			  if(data.success==false){
					window.location.href = base_url+'advocates/add';
			  }
		  }
		});
}
function editAdvacateDetails(){
	
	//disableBtn('btnSubmit',0);
	var formData = new FormData($('#advacate_form')[0]);
		$.ajax({
		  type:"POST",
		  url:base_url+"advocates/editAdvacateDetails",
		  data:formData ,
		  contentType: false,
		  cache: false,
		  processData: false,
		  dataType:'json',
		  success: function(data){
			if(data.success==true){
					window.location.href = base_url+'advocates';
			  }
			  if(data.success==false){
					location.reload();
			  }
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
	
