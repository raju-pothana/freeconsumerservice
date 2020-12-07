<section>
   <div class="page-banner">
      <img src="<?= base_url(); ?>images/Sample.jpg" class="container-fluid px-0" alt="logo" />
   </div>
   <div class="container">
      <div class="custom-paragraph mt-5 text-left">
         <p><b>ARE YOU FRASTRUATED WITH SELLER/MERCHANT?</b></p>
         <p><b>YOUR merchant committed fraud with YOU?</b></p>
         <p><b>YOUR seller ignore YOU or Fail to solve YOUR problem?</b></p>
         <p><b>YOU are looking for REFUND/REPLACEMENT to YOUR purchased product/Services?</b></p>
         <p><b>YOU are afraid of LEGAL SYSTEM/COURT CASES?</b></p>
         <p>DON'T WORRY....RELAX, The Easiest, Fastest Free and affordable way to file a complaint against a defaulting brand/product/service here.</p>
         <p>We explore all the possible legal steps to resolve your online complaint in.</p>
         <p>IT'S a 4-MINUTE ONINE process to RAISE/FILE A COMPLAINT</p>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <div class="col-md-12 mb-4">               
            <input class="form-control" type="text" placeholder="Search" aria-label="Search" />
         </div>
      </div>
      <section class="container-fluid py-5">
         <div class="bannerblock">
            <h3 class="mb-4 mt-0 text-uppercase text-left text-primary">Companies</h3>
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
   </div>
</section>