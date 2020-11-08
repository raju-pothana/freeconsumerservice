<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Free Consumer Service &#8211; Consumer Court</title>
	<link type="text/css" href="<?= base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" href="<?= base_url(); ?>css/custom.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;1,300;1,400&display=swap" rel="stylesheet">
<style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  .custom-navbar li.login-otp{
    position:relative;
  }
.otp-container{
  display:none;
  font-size: 0.9em;
  color: #212121;
  font-family: Arial;
  width: 350px;
  box-sizing: border-box;
  position: absolute;
  right: 0;
  top: 0;
}
.custom-navbar li.login-otp:hover .otp-container{
display:block;
}

#frm-mobile-verification {
    border: #E0E0E0 1px solid;
    border-radius: 3px;
    padding: 30px;
    text-align: center;
    background: #ffffff;
}

.form-heading {
    font-size: 1.5em;
    margin-bottom: 30px;
}

.form-row {
    margin-bottom: 30px;
}

.form-input {
    padding: 10px 20px;
    width: 100%;
    box-sizing: border-box;
    border-radius: 3px;
    border: #E0E0E0 1px solid;
}

.btnSubmit {
    background: #4cb7ff;
    padding: 8px 20px;
    border: #47abef 1px solid;
    border-radius: 3px;
    width: 100%;
    color: #FFF;
}


.error {
    color: #483333;
    padding: 10px;
    background: #ffbcbc;
    border: #efb0b0 1px solid;
    border-radius: 3px;
    margin: 0 auto;
    margin-bottom: 20px;
    width: 350px;
    display:none;
    box-sizing: border-box;
}

.success {
    color: #483333;
    padding: 10px 20px;
    background: #cff9b5;
    border: #bce4a3 1px solid;
    border-radius: 3px;
    margin: 0 auto;
    margin-bottom: 20px;
    width: 350px;
    display:none;
    box-sizing: border-box;
}

.btnVerify {
    background: #4CAF50;
    padding: 8px 20px;
    border: #449e48 1px solid;
    border-radius: 3px;
    width: 100%;
    color: #FFF;
}
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-theme">
      <a class="navbar-brand" href="home"><img src="<?= base_url(); ?>images/fcs-logo.png" height="40" alt="logo" /><span class="ml-2 text-mute">Free Consumer Service</span></a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto custom-navbar">
			<li class="nav-item"><a href="<?= base_url(); ?>howitworks">How it Works</a></li>
			<li class="nav-item"><a href="<?= base_url(); ?>cpact2019">CP ACT 2019</a></li>
			<li class="nav-item"><a href="#">Customer Reviews</a></li>
			<li class="nav-item"><a href="<?= base_url(); ?>advocates">Advocates</a></li>
            <li class="nav-item"><a href="<?= base_url(); ?>complaint">Browse a Complaint</a></li>
            <li class="nav-item"><a href="<?= base_url(); ?>complaint">Raise A complaint For Free</a></li>
            <li class="nav-item login-otp"><a href="#">Login</a>
          <div class="otp-container">
		<div class="error"></div>
		<form id="frm-mobile-verification">
			<div class="form-heading">Mobile Number Verification</div>

			<div class="form-row">
				<input type="number" id="mobile" class="form-input"
					placeholder="Enter the 10 digit mobile">
			</div>

			<input type="button" class="btnSubmit" value="Send OTP"
				onClick="sendOTP();">
		</form>
          </div>
          </li>
        </ul>
      </div>
    </nav>
<?php if($this->session->flashdata("user_success")!=""){?>
			<div class="myAlert-top alert alert-success alert-dismissible" role="alert" id="eemesg">
				<button type="button" class="close" data-dismiss="alert" onclick="hideErroMsg('eemesg')">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">&times;</span>
				</button>
				<?php echo $this->session->flashdata("user_success");?>	<i class="fa fa-thumbs-up"></i>
			</div>
		<?php }?>
		<?php if($this->session->flashdata("user_error")!=""){ ?>
			<div class="myAlert-top alert alert-danger alert-dismissible" role="alert" id="eemesg1">
				<button type="button" class="close" data-dismiss="alert" onclick="hideErroMsg('eemesg1')">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">&times;</span>
				</button>
				<?php echo $this->session->flashdata("user_error");?> 
				<span class="imprnt"  > <i class="fa fa-exclamation-circle"></i> </span>
			</div>
		<?php }?>
</body>
</html>
<script>
var base_url="<?= base_url(); ?>";
</script>