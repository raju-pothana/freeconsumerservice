<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Free Consumer Service &#8211; Consumer Court</title>
    <link type="text/css" href="<?= base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="<?= base_url(); ?>css/custom.css" rel="stylesheet">
    <style type="text/css">
    .card{
        padding:20px;
        min-height:420px;
    }
    .card-img-banner{
        width:60px;
        height: 60px;
        border-radius:50%;
        background-color: #0079c1;
        text-align:center;
        margin:20px auto;
        display:flex;
        align-items:center;
        justify-content: center;
}
    </style>
</head>

<body>
   <h3 class="text-center mt-5">How it works</h3>
   <section class="container">
   <div class="row my-5">
   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="card">
        <div class="card-img-banner"> 
        <img src="<?= base_url(); ?>images/fcs-logo.png" height="40" alt="logo" />
        </div>
        <p>Tell us about the company whose products or services you are frustrated We send out email notice to the company Immediately</p>
    </div>
   </div>
   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="card">
        <div class="card-img-banner"> 
        <img src="<?= base_url(); ?>images/fcs-logo.png" height="40" alt="logo" />
        </div>
        <p>No REsponse, WE draft a Demand notice and sent it to the company on second day. And our team keeps you updated by emails. We also start a SMC (Social Media Campaign) for your complaint. You can join with your digital handle.</p>
    </div>
   </div>
   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="card">
        <div class="card-img-banner"> 
        <img src="<?= base_url(); ?>images/fcs-logo.png" height="40" alt="logo" />
        </div>
        <p>Upon receipt Demand notice of your, the company is very likely to take your complaint seriously. If not, Our Partner Legal Cell will send LEGAL NOTICE to the Company under CPA.-2019 The compalint received company should resolve the matter amicably in the given Notice Period of 30 Day.</p>
    </div>
   </div>
   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="card">
        <div class="card-img-banner"> 
        <img src="<?= base_url(); ?>images/fcs-logo.png" height="40" alt="logo" />
        </div>
        <p>If the company is unable to resolve your compalint in given period, OUR Partner Legal Cell help you file a Consumer Complaint in Consumer Commission under Consumer Protection Act.-2019 (CPA.-2019).</p>
    </div>
   </div>
   
   </div>
   <div class="text-center mb-5">
   <button type="button" class="btn btn-primary">Raise A Complaint</button>
   </div>
   </section>
</body>

</html>