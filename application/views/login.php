<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Free Consumer Service &#8211; Consumer Court</title>
	<link type="text/css" href="<?= base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" href="<?= base_url(); ?>css/custom.css" rel="stylesheet">
</head>
<body>
<div class="global-container">
   <div class="card login-form">
      <div class="card-body">
          <div class="text-center">
          <a class="navbar-brand" href="#"><img src="images/fcs-logo.png" height="40" alt="logo" /><span class="ml-2 text-mute">Free Consumer Service</span></a>
          </div>
         <h3 class="card-title text-center">Login</h3>
         <div class="card-text">
            <!--
               <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
            <form>
               <!-- to error: add class "has-danger" -->
               <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
               </div>
               <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <a href="#" style="float:right;font-size:12px;">Forgot password?</a>
                  <input type="password" class="form-control form-control-sm" id="exampleInputPassword1">
               </div>
               <button type="submit" class="btn btn-primary btn-block">Sign in</button>
               <div class="sign-up">
                  Don't have an account? <a href="#">Create One</a>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

</body>
</html>
