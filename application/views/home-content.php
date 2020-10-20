<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Free Consumer Service &#8211; Consumer Court</title>
	<link type="text/css" href="<?= base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" href="<?= base_url(); ?>css/custom.css" rel="stylesheet">
	<style>

    </style>
</head>
<body>
   <section class="container-fluid py-5">
      <div class="container">
         <h2>Recent Complaints</h2>
         <table class="table table-bordered table-striped table-responsive-stack"  id="tableOne">
            <thead class="thead-dark">
               <tr>
                  <th>Complaints</th>
                  <th>Link</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>Complaint 1</td>
                  <td><a href="#">Link</a></td>
               </tr>
               <tr>
                  <td>Complaint 2</td>
                  <td><a href="#">Link</a></td>
               </tr>
               <tr>
                  <td>Complaint 3</td>
                  <td><a href="#">Link</a></td>
               </tr>
               <tr>
                  <td>Complaint 4</td>
                  <td><a href="#">Link</a></td>
               </tr>
               <tr>
                  <td>Complaint 5</td>
                  <td><a href="#">Link</a></td>
               </tr>
            </tbody>
         </table>
      </div>
      <!-- /.container -->
   </section>

   <section class="container-fluid py-5 bg-theme">
      <div class="bannerblock">
         <h2 class="mb-4 mt-0">India's largest online consumer compaints Aggregetor</h2>
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


   <section class="container-fluid gray-theme sec-bg-image-1 py-5 mt-5">
   <div class="container">
      <div class="row" >
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <!-- <img src="http://freeconsumerservice.com/wp-content/uploads/2016/10/bg_2.jpg" alt=""> -->
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="vc_column-inner vc_custom_1475919632789">
               <div class="wpb_wrapper">
                  <div class="sc_section margin_top_huge margin_bottom_huge" style="max-width: 470px;">
                     <div class="sc_section_inner">
                        <div class="sc_section_content_wrap">
                           <h3 class="sc_title sc_title_underline"><strong>RESOLVE</strong> MY COMPLAINT</h3>
                           <div class="wpb_text_column wpb_content_element  vc_custom_1591532937226">
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
                           <a class="submit-btn" href="http://freeconsumerservice.com/resolve-my-complaint/" title="">Submit</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

</body>
</html>
