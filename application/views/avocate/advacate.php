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
         <h2>Advocates List</h2>
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
				  <th><a href="<?= base_url(); ?>advocates/add"><i class="fa fa-plus" aria-hidden="true"></i></a></th>
				  
               </tr>
            </thead>
            <tbody>
			<?php foreach ($advocates as $advocatesList) { ?>
               <tr>
                  <td><?= $advocatesList['name_advocate'];?></td>
                  <td><?= $advocatesList['email'];?></td>
                  <td><?= $advocatesList['mobile_number'];?></td>
                  <td><?= $advocatesList['address'];?></td>
                  <td><?= $advocatesList['district'];?></td>
                  <td><?= $advocatesList['state'];?></td>
                  <td><?= $advocatesList['pin_code'];?></td>
                  <td>
				  <a href="<?= base_url()?>advocates/edit/<?= $advocatesList['id'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

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
