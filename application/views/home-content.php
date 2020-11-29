<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Free Consumer Service &#8211; Consumer Court</title>
	<link type="text/css" href="<?= base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" href="<?= base_url(); ?>css/custom.css" rel="stylesheet">
  <link type="text/css" href="<?= base_url(); ?>css/jquery.dataTables.min.css" rel="stylesheet">    
  <script type="text/javascript" src="<?= base_url(); ?>js/jquery.min.js"></script>  
  <script type="text/javascript" src="<?= base_url(); ?>js/datatables.min.js"></script>
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
   <section class="container py-5">
<div class="row">
   <div class="col-lg-12 col-md-12">
   <!-- <div class="table-responsive"> -->
            <table
              id="complaintinfo"
              class="display table-bordered responsive nowrap w100p"
              cellspacing="0"
            >
              <thead>
                <tr>
                  <th>Complaint</th>
                  <th>URL</th>
                </tr>
              </thead>
            </table>
          <!-- </div> -->
   </div>
</div>



   </section>

   <section class="container-fluid py-5 bg-theme">
      <div class="bannerblock">
         <h2 class="mb-4 mt-0 text-uppercase">Are You frustrated with your Product/service we can help.</h2>
      </div>
      <div class="home-icon-box container">
				<?php
					if($companies){
					 foreach($companies as $companie){
						 ?>
						 <div class="icon-block">
		            <a href="<?= base_url(); ?>company/<?php echo $companie['company_name']; ?>">
		               <div class="icon-image"><img src="<?= base_url(); ?>images/company_icons/<?php echo $companie['image']; ?>"></div>
		            </a>
		            <h3><?php echo $companie['company_name'];?></h3>
		         </div>
						 <?php
					 }
				 }
				 ?>
      </div>
   </section>
   <section class="container-fluid gray-theme sec-bg-image-1 py-5">
   <h3 class="text-center mt-5 text-uppercase">How it works</h3>
   <section class="container">
   <div class="row my-5">
   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="card">
        <div class="card-img-banner"> 
        <img src="<?= base_url(); ?>images/question-mark.png" height="32" alt="logo" />
        </div>
        <p>Tell us about the company whose products or services you are frustrated We send out email notice to the company Immediately</p>
    </div>
   </div>
   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="card">
        <div class="card-img-banner"> 
        <img src="<?= base_url(); ?>images/email.png" height="32" alt="logo" />
        </div>
        <p>No REsponse, WE draft a Demand notice and sent it to the company on second day. And our team keeps you updated by emails. We also start a SMC (Social Media Campaign) for your complaint. You can join with your digital handle.</p>
    </div>
   </div>
   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="card">
        <div class="card-img-banner"> 
        <img src="<?= base_url(); ?>images/send.png" height="32" alt="logo" />
        </div>
        <p>Upon receipt Demand notice of your, the company is very likely to take your complaint seriously. If not, Our Partner Legal Cell will send LEGAL NOTICE to the Company under CPA.-2019 The compalint received company should resolve the matter amicably in the given Notice Period of 30 Day.</p>
    </div>
   </div>
   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="card">
        <div class="card-img-banner"> 
        <img src="<?= base_url(); ?>images/gavel.png" height="32" alt="logo" />
        </div>
        <p>If the company is unable to resolve your compalint in given period, OUR Partner Legal Cell help you file a Consumer Complaint in Consumer Commission under Consumer Protection Act.-2019 (CPA.-2019).</p>
    </div>
   </div>
   
   </div>
   <div class="text-center mb-5">
   <button type="button" class="btn btn-primary">Raise A Complaint</button>
   </div>
   </section>
   </section>


   <section class="container-fluid sec-bg-image-1 py-5">
   <div class="container">
      <div class="row" >
         <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> -->
            <!-- <img src="http://freeconsumerservice.com/wp-content/uploads/2016/10/bg_2.jpg" alt=""> -->
         <!-- </div> -->
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="vc_column-inner vc_custom_1475919632789">
               <div class="wpb_wrapper">
                  <div class="sc_section margin_top_huge margin_bottom_huge">
                     <div class="sc_section_inner">
                        <div class="sc_section_content_wrap">
                           <h3 class="text-left mt-5 mb-4">RESOLVE MY COMPLAINT</h3>
                           <div class="wpb_text_column wpb_content_element">
                              <div class="wpb_wrapper">
                                 <p><strong>ARE YOU FRASTRUATED WITH SELLER / MERCHANT?</strong></p>
                                 <ul>
                                    <li>YOUR merchant committed fraud with YOU?</li>
                                    <li>YOUR seller ignore YOU or Fail to solve YOUR problem?</li>
                                    <li>YOU are looking for REFUND / REPLACEMENT to YOUR purchased product / Service?</li>
                                    <li>YOU are afraid of LEGAL SYSTEM / COURT CASES?</li>
                                 </ul>
                                 <p><strong>DON’T WORRY… RELAX, The Easiest, Fastest Free and affordable way to file a complaint against a defaulting brand / product / service here.</strong></p>
                                 <p>We explore all the possible legal steps to resolve your online complaint in.</p>
                                 <p>IT’S a 4-MINUTE ONLENE process to RAISE / FILE A COMPLAINT</p>
                              </div>
                           </div>
                           <div class="vc_empty_space" style="height: 15px"><span class="vc_empty_space_inner"></span></div>
                           <a class="submit-btn1 btn btn-primary px-5" href="http://freeconsumerservice.com/resolve-my-complaint/" title="">Submit</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="container-fluid gray-theme sec-bg-image-1 py-5">
   <div class="container">
   <h6 class="mt-5 text-uppercase">Dear Advicate</h6>
   <h3 class="text-left text-uppercase">Increase your practice</h3>
   <div class="py-3">
      <ul>
         <li>How do ypu GET MORE CLIENTS from your place of practice?</li>
         <li>Is it time to GROW YOUR PRACTICE in your area</li>
      </ul>
      <p>You have noticed that there's growing demand for the kind of work that you do it cn be difficult to know where to start and increase your practice?</p>
      <p>If you want to grow your small or solo practice by adding new clients from us in your local area, where. You are practice from, you need to take few steps to register with us.</p>
      <a class="btn btn-primary px-5 text-uppercase" href="#">join hands with us</a>
   </div>
</div>




</section>


<script>
   $(document).ready(function(){
  //Jquery Datatable
  var table = $("#complaintinfo").DataTable({
          ajax:
            // "https://gyrocode.github.io/files/jquery-datatables/objects.json",
            "<?= base_url(); ?>js/complaint.json",
          responsive: true,
          columns: [
            { data: "complaint" },
            { data: "url" }
          ],
          order: [[1, "asc"]],
        });
   });
</script>


</body>
</html>
