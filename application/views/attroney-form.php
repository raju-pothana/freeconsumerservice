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
      .container{max-width:1140px}.form-group{margin-bottom:1rem}label{display:inline-block;margin-bottom:.5rem}.form-control{display:block;width:100%;height:36px !important; height:calc(1.5em + .75rem + 2px);padding:.375rem .75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#495057;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;border-radius:.25rem;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out}.btn-primary{color:#fff;background-color:#007bff;border-color:#007bff}.btn{display:inline-block;font-weight:400;color:#212529;text-align:center;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:transparent;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}.form-title{margin:15px 15px;text-transform:capitalize}.custom-form .form-group{width:calc(50% - 0px);float:left;padding:0 15px}.custom-form .form-group label{font-size:14px;    white-space: nowrap;overflow: hidden;text-overflow: ellipsis;padding-right: 80px;}.custom-form .custom-btn{padding:8px 16px;background:#0079c2;color:#fff!important;margin:10px auto;clear:both;float:right}.section-1,.section-2,.section-3,.section-4{display:inline-block;width:100%}.custom-file{position:relative;display:inline-block;width:100%;height:calc(1.5em + .75rem + 2px)}.custom-file-input{position:relative;z-index:2;width:100%;height:calc(1.5em + .75rem + 2px);margin:0;opacity:0}.custom-file-label{width:calc(100% - 30px);position:absolute;top:0;right:0;left:0;z-index:1;height:calc(1.5em + .75rem + 2px);padding:.375rem .75rem;font-weight:400;line-height:1.5;color:#495057;background-color:#fff;border:1px solid #ced4da;border-radius:.25rem}.custom-file-label::after{position:absolute;top:0;right:0;bottom:0;z-index:3;display:block;height:calc(1.5em + .75rem);padding:.375rem .75rem;line-height:1.5;color:#495057;content:"Browse";background-color:#e9ecef;border-left:inherit;border-radius:0 .25rem .25rem 0}.clear-both { clear: both; } .w-100p { width: 100%; } .steps { list-style: none; display: flex; padding-left: 0px; } .steps .step { white-space: nowrap; transition: 0.3s ease-in-out; background: #106e94; position: relative; height: 50px; line-height: 50px; margin-right: 30px; padding: 0 20px; } .steps .step>a { text-decoration: none; color: white; } .steps .step:last-child { margin-right: 0; } .steps .step.active { background: #0079c1 !important; } .steps .step.active::after { border-left: 25px solid #0079c1 !important; } .steps .step.active::after { border-left-color: #0079c1; } .steps .step.active::before { border-top-color: #0079c1; border-bottom-color: #0079c1; } .steps .step::before { transition: 0.3s ease-in-out; content: ""; position: absolute; top: 0; left: -25px; border-left: 25px solid transparent; border-top: 25px solid #106e94; border-bottom: 25px solid #106e94; } .steps .step:first-child::before { display: none; } .steps .step::after { transition: 0.3s ease-in-out; position: absolute; top: 0; right: -25px; border-left: 25px solid #106e94; border-top: 25px solid transparent; border-bottom: 25px solid transparent; content: ""; } .steps .step:last-child::after { display: none; } .steps .step:hover { /* background: hotpink; */ background: #0079c1; } .steps .step:hover::before { /* border-top-color: hotpink; border-bottom-color: hotpink; */ border-top-color: #0079c1; border-bottom-color: #0079c1; } .steps .step:hover::after { /* border-left-color: hotpink; */ border-left-color: #0079c1; } .steps .step:first-child { border-top-left-radius: 5px; border-bottom-left-radius: 5px; } .steps .step:last-child { border-top-right-radius: 5px; border-bottom-right-radius: 5px; }
    </style>
</head>
<body>

<section class="content-body">
<div class="container">
<div class="breadcrumbs">
<ul class="steps">
<li class="step step1"><a>Step 1</a></li>
<li class="step step2 active"><a>Step 2</a></li>
<li class="step step3"><a>Step 3</a></li>
<li class="step step4"><a>Step 4</a></li>
</ul>
</div>
<h2 class="form-title">Attroney1</h2>
<section class="custom-form">
<section class="section-1">
<div class="form-group">
                    <label for="">Name of the Advocate</label><br>
                    <input type="text" class="form-control" id="advocate" placeholder="" name="advocate">
                </div>
<div class="form-group">
                    <label for="">Email Address</label><br>
                    <input type="text" class="form-control" id="email" placeholder="" name="email">
                </div>
<div class="form-group">
                    <label for="">Mobile Number</label><br>
                    <input type="text" class="form-control" id="mobile" placeholder="" name="mobile">
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
                    <input type="text" class="form-control" id="pincode" placeholder="" name="pincode">
                </div>
<p>                <button class="btn custom-btn goto-step2 clear-both">Next</button>
            </p>
</section>
<section class="section-2">
<div class="form-group">
                    <label for="">Place of Practicing</label><br>
                    <input type="text" class="form-control" id="practicing" placeholder="" name="practicing">
                </div>
<div class="form-group">
                    <label for="">Specialized practice areas</label><br>
                    <input type="text" class="form-control" id="practicearea" placeholder="" name="practicearea">
                </div>
<div class="form-group">
                    <label for="">Known Languages</label><br>
                    <input type="text" class="form-control" id="languages" placeholder="" name="languages">
                </div>
<div class="form-group">
                    <label for="">Experience with Bar ( in Yrs) </label><br>
                    <input type="text" class="form-control" id="barexperience" placeholder="" name="barexperience">
                </div>
<div class="form-group">
                    <label for="">Enrolment Number issued by concern State Bar Association.</label><br>
                    <input type="text" class="form-control" id="enrolmentnumber" placeholder="" name="enrolmentnumber">
                </div>
<div class="form-group">
                    <label for="">Number of Legal Cases and its particulars where he/she holds Vakalatnama</label><br>
                    <input type="text" class="form-control" id="noofleagalcases" placeholder="" name="noofleagalcases">
                </div>
<div class="form-group">
                    <label for="">Education </label><br>
                    <input type="text" class="form-control" id="education" placeholder="" name="education">
                </div>
<div class="form-group">
                    <label for="">Experience if any</label><br>
                    <input type="text" class="form-control" id="experience" placeholder="" name="experience">
                </div>
<div class="form-group">
                    <label for="">Consultation Fee</label><br>
                    <input type="text" class="form-control" id="consultationfee" placeholder="" name="consultationfee">
                </div>
<div class="form-group">
                    <label for="">Cost Per Hour</label><br>
                    <input type="text" class="form-control" id="cph" placeholder="" name="cph">
                </div>
<p>                <button class="btn custom-btn goback-step1 float-left">Prev</button><button class="btn custom-btn goto-step3">Next</button>
            </p>
</section>
<section class="section-3 d-none">
<div class="form-group custom-file">
                    <label class="custom-file-label" for="resumeFile">Resume</label><br>
                    <input type="file" class="custom-file-input" id="resumeFile">
                </div>
<div class="form-group custom-file">
                    <label class="custom-file-label" for="resumeFile">Education Qualification Certificates<br>
                        (Optional)</label><br>
                    <input type="file" class="custom-file-input" id="resumeFile">
                </div>
<div class="form-group custom-file">
                    <label class="custom-file-label" for="resumeFile">Enrolment Certificate (Pdf Only)</label><br>
                    <input type="file" class="custom-file-input" id="resumeFile">
                </div>
<div class="form-group custom-file">
                    <label class="custom-file-label" for="resumeFile">Identity card issued by the concern Bar<br>
                        Association where he/she practicing</label><br>
                    <input type="file" class="custom-file-input" id="resumeFile">
                </div>
<div class="form-group custom-file">
                    <label class="custom-file-label" for="resumeFile">Practicing certificate issued by<br>
                        President/Secretary where he has been</label><br>
                    <input type="file" class="custom-file-input" id="resumeFile">
                </div>
<div class="form-group custom-file">
                    <label class="custom-file-label" for="resumeFile">Practicing at concern bar association.</label><br>
                    <input type="file" class="custom-file-input" id="resumeFile">
                </div>
<div class="form-group custom-file">
                    <label class="custom-file-label" for="resumeFile">Practing certificate issued by President/Secretary<br>
                        where he has been</label><br>
                    <input type="file" class="custom-file-input" id="resumeFile">
                </div>
<div class="form-group custom-file">
                    <label class="custom-file-label" for="resumeFile">Pass port size Photo(with coat )</label><br>
                    <input type="file" class="custom-file-input" id="resumeFile">
                </div>
<div class="form-group custom-file">
                    <label class="custom-file-label" for="resumeFile">AFFIDAVIT – Accepting the terms and conditions<br>
                    </label><br>
                    <input type="file" class="custom-file-input" id="resumeFile">
                </div>
<div class="row w-100p">
<div class="col-md-6">
                        <button class="btn custom-btn goback-step2 float-left">Prev</button>
                    </div>
<div class="col-md-6">
                        <button class="btn custom-btn goto-step4">Next</button>
                    </div>
<p></p>
</div>
</section>
</section>
<p><script type="text/javascript">$(document).ready(function () { $(".section-2,.section-3").addClass("d-none"); $(".step1").addClass('active'); $(".goto-step2").click(function () { $(".section-1,.section-3").addClass("d-none"); $(".section-2").removeClass("d-none"); $(".step1").removeClass('active'); $(".step2").addClass('active'); }); $(".goto-step3").click(function () { $(".section-1,.section-2").addClass("d-none"); $(".section-3").removeClass("d-none"); $(".step1,.step2").removeClass('active'); $(".step3").addClass('active'); }); $(".goback-step1").click(function () { $(".section-2,.section-3").addClass("d-none"); $(".section-1").removeClass("d-none"); $(".step2,.step3").removeClass('active'); $(".step1").addClass('active'); }); $(".goback-step2").click(function () { $(".section-1,.section-3").addClass("d-none"); $(".section-2").removeClass("d-none"); $(".step2,.step3").removeClass('active'); $(".step2").addClass('active'); }); });</script>
</p>
</div>
</section>
<script type="text/javascript">$(document).ready(function () { $(".section-2,.section-3").addClass("d-none"); $(".step1").addClass('active'); $(".goto-step2").click(function () { $(".section-1,.section-3").addClass("d-none"); $(".section-2").removeClass("d-none"); $(".step1").removeClass('active'); $(".step2").addClass('active'); }); $(".goto-step3").click(function () { $(".section-1,.section-2").addClass("d-none"); $(".section-3").removeClass("d-none"); $(".step1,.step2").removeClass('active'); $(".step3").addClass('active'); }); $(".goback-step1").click(function () { $(".section-2,.section-3").addClass("d-none"); $(".section-1").removeClass("d-none"); $(".step2,.step3").removeClass('active'); $(".step1").addClass('active'); }); $(".goback-step2").click(function () { $(".section-1,.section-3").addClass("d-none"); $(".section-2").removeClass("d-none"); $(".step2,.step3").removeClass('active'); $(".step2").addClass('active'); }); });</script>
</body>
</html>
