<?php include "includes/header.php"; ?>

<?php if( $this->session->flashdata('flash_data') ): ?>
	<div class="col-md-6 col-md-offset-3 alert alert-danger text-center">
		<?php echo $this->session->flashdata('flash_data'); ?>
	</div>
<?php endif; ?>

<?php echo form_open('login'); ?>
	<div class="col-xs-12">
		<h2 class="text-center">Login</h2>
		<div class="col-md-6 col-md-offset-3">
			<div class="form-group">
				<?php echo form_label('Username:', 'username'); ?>
				<?php echo form_input('username', '',  ['placeholder' => 'username', 'class' => 'form-control']);?>
			</div>
			<div class="form-group">
				<?php echo form_label('Password:', 'password'); ?>
				<?php echo form_input('password', '',  ['placeholder' => 'password', 'class' => 'form-control']);?>
			</div>
		</div>
	</div>
	<div class="col-xs-12 text-center"> 
		<?php echo form_submit('submit', 'submit', ['class' =>'btn btn-primary']);?>
	</div>
<?php echo form_close(); ?>

<?php include "includes/footer.php"; ?>


