<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/min/style.min.css">
	<script src="<?php echo base_url(); ?>assets/min/main.min.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<title>Rebate Application</title>
</head>
<body class="container-fluid">
<header>
<nav class="navbar navbar-default row">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Rebate Application</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
     	<?php if( !$this->session->userdata('username') ) : ?>
        	<li><a href="<?php echo base_url('login') ?>">Admin Login</a></li>
    	<?php  else: ?>
	    	<li><a href="<?php echo base_url('dashboard') ?>">Hello, <?php echo $this->session->userdata('username') ?></a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo base_url('form') ?>">Form</a></li>
	            <li><a href="<?php echo base_url('dashboard') ?>">Dashboard</a></li>
	            <li><a href="<?php echo base_url('dashboard/logout') ?>">Logout</a></li>
	          </ul>
	        </li>
    	<?php endif; ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



</header>


