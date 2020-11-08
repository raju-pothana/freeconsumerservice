<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Free Consumer Service &#8211; Consumer Court</title>
	<link type="text/css" href="<?= base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" href="<?= base_url(); ?>css/custom.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>

    </style>
</head>
<body>
<section class="content-body">
   <section class="container-fluid py-5">
      <div class="container ">
         <h2>Complaints List</h2>
         <table class="table table-bordered table-striped table-responsive-stack"  id="tableOne">
            <thead class="thead-dark">
               <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Address</th>
                  <th>District</th>
                  <th>State</th>
                  <th>Pin Code</th>
				  <th>Actions</th>
				  <th><a href="<?= base_url(); ?>complaint/add"><i class="fa fa-plus" aria-hidden="true"></i></a></th>
				  
               </tr>
            </thead>
            <tbody>
			<?php foreach ($complaint as $complaintList) { ?>
               <tr>
                  <td><?= $complaintList['name'];?></td>
                  <td><?= $complaintList['email'];?></td>
                  <td><?= $complaintList['mobile_number'];?></td>
                  <td><?= $complaintList['Address'];?></td>
                  <td><?= $complaintList['district'];?></td>
                  <td><?= $complaintList['State'];?></td>
                  <td><?= $complaintList['Postal_Pincode'];?></td>
                  <td>
				  <a href="<?= base_url()?>complaint/edit/<?= $complaintList['id'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

				  </td>
				  <td>&nbsp;</td>
               </tr>
            <?php } ?>
            </tbody>
         </table>
      </div>
      <!-- /.container -->
   </section>
   
</section>
</body>
</html>
