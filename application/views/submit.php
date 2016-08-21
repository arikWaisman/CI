<?php include "includes/header.php"; ?>

<section>
	<div class="col-xs-12 col-sm-6 col-sm-offset-3 alert alert-success text-center">
		<p>Your information has been recieved, Thank you!<p>
	</div>
	<div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
		<p>To submit the form again <a href="<?php echo base_url(); ?>form">click here</a></p>
	</div>

	<?php if( $this->session->userdata('username') ) : ?>
	<div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
		<p>To view all existing applications <a href="<?php echo base_url(); ?>dashboard">click here</a></p>
	</div>
<?php endif; ?>
</section>

<?php include "includes/footer.php"; ?>