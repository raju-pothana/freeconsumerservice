<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
      .adv-item {
        width: 100%;
        padding: 20px;
        border: 1px solid #d3d3d3;
        border-radius: 5px;
        margin-bottom: 20px;
      }
      .image-block {
        position: relative;
        overflow: hidden;
        max-width: 100px !important;
        padding: 0 !important;
        height: 100px;
        background-color: #dcd8d5;
      }
      .image-block > img {
        max-width: none;
        width: auto;
        height: 100%;
        display: block;
        position: absolute;
        top: 50%;
        right: 0;
        left: 50%;
        bottom: 0;
        -webkit-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
      }
    </style>
  </head>
  <body>
    <div class="container">
		<h3 align="center">View Details</h3>
		<ul class="list-group">
			<li class="list-group-item">Name of the Advocate (with capital letters) : <span class=""><b><?= $advocateDetails['name_advocate'];?></b></span></li>
			<li class="list-group-item">Email Address : <span class=""><b><?= $advocateDetails['email'];?></b></span></li>
			<li class="list-group-item">Mobile Number : <span class=""><b><?= $advocateDetails['mobile_number'];?></b></span></li>
			<li class="list-group-item">Address : <span class=""><b><?= $advocateDetails['address'];?></b></span></li>
			<li class="list-group-item">District : <span class=""><b><?= $advocateDetails['district'];?></b></span></li>
			<li class="list-group-item">State : <span class=""><b><?= $advocateDetails['state'];?></b></span></li>
			<li class="list-group-item">Pin Code : <span class=""><b><?= $advocateDetails['pin_code'];?></b></span></li>
			<li class="list-group-item">Nearest City : <span class=""><b><?= $advocateDetails['nearestcity'];?></b></span></li>
			<li class="list-group-item">About You : <span class=""><b><?= $advocateDetails['about_u'];?></b></span></li>
			<li class="list-group-item">Place of Practicing (Courts) : <span class=""><b><?= $advocateDetails['practicing_place'];?></b></span></li>
			<li class="list-group-item">Specialized practice areas : <span class=""><b><?= $advocateDetails['specialized_practice_areas'];?></b></span></li>
			<li class="list-group-item">Languages Spoken : <span class=""><b><?= $advocateDetails['known_languages'];?></b></span></li>
			<li class="list-group-item">Experience with Bar ( in Yrs) : <span class=""><b><?= $advocateDetails['experience'];?></b></span></li>
			<li class="list-group-item">Enrolment Number issued by concern State Bar Association : <span class=""><b><?= $advocateDetails['enrolment_no'];?></b></span></li>
			<li class="list-group-item">Number of Legal Cases and its particulars where he/she holds Vakalatnama : <span class=""><b><?= $advocateDetails['number_of_legal_cases'];?></b></span></li>
			<li class="list-group-item">Education : <span class=""><b><?= $advocateDetails['education'];?></b></span></li>
			<li class="list-group-item">Experience if any (optional) : <span class=""><b><?= $advocateDetails['experience_if_any'];?></b></span></li>
			<li class="list-group-item">Consultation Fee : <span class=""><b><?= $advocateDetails['consultation_Fee'];?></b></span></li>
			<li class="list-group-item">Cost Per Hour (optional) : <span class=""><b><?= $advocateDetails['cost_per_hour'];?></b></span></li>
			<li class="list-group-item">Resume : <image id="blahAffidavit" src="<?=base_url();?><?= $advocateDetails['resumefiles'];?>" alt="your image8" height="60" width="70"></image></li>
			<li class="list-group-item">Education Qualification Certificates 1 : <image id="blahAffidavit" src="<?=base_url();?><?= $advocateDetails['eqcertificate'];?>" alt="your image8" height="60" width="70"></image></li>
			<li class="list-group-item">Education Qualification Certificates 2 : <image id="blahAffidavit" src="<?=base_url();?><?= $advocateDetails['eqcertificate2'];?>" alt="your image8" height="60" width="70"></image></li>
			<li class="list-group-item">Education Qualification Certificates 3 : <image id="blahAffidavit" src="<?=base_url();?><?= $advocateDetails['eqcertificate3'];?>" alt="your image8" height="60" width="70"></image></li>
			<li class="list-group-item">Enrolment Certificate : <image id="blahAffidavit" src="<?=base_url();?><?= $advocateDetails['encertificate'];?>" alt="your image8" height="60" width="70"></image></li>
			<li class="list-group-item">Practing certificate issued by President/Secretary where he has been practing at concern bar association : <image id="blahAffidavit" src="<?=base_url();?><?= $advocateDetails['identitycard'];?>" alt="your image8" height="60" width="70"></image></li>
			<li class="list-group-item">Practing certificate issued by President/Secretary<br>
			where he has been : <image id="blahAffidavit" src="<?=base_url();?><?= $advocateDetails['practcertificateissuedwhere'];?>" alt="your image8" height="60" width="70"></image></li>
			<li class="list-group-item">Pass port size Photo(with coat ) : <image id="blahAffidavit" src="<?=base_url();?><?= $advocateDetails['passportphoto'];?>" alt="your image8" height="60" width="70"></image></li>
		</ul>
		
	</div>
  </body>
</html>
