<?php include "templates/header.php"; ?>

<section class="row">

	<div class="col-xs-4">

		<?php echo form_open_multipart('form/submit', ['id' => 'user-form']); ?>
	
		<div class="form-group">
			<?php echo form_label('First Name:', 'first_name'); ?>
			<?php echo form_input('first_name', '', ['placeholder' => 'First Name', 'class' => 'form-control']);?>
		</div>
	
		<div class="form-group">
			<?php echo form_label('Last Name:', 'last_name'); ?>
			<?php echo form_input('last_name', '', ['placeholder' => 'Last Name', 'class' => 'form-control']);?>
		</div>

		<div class="form-group">
			<?php echo form_label('Address 1:', 'address_1'); ?>
			<?php echo form_input('address_1', '', ['placeholder' => 'Address 1', 'class' => 'form-control']);?>
		</div>

		<div class="form-group">
			<?php echo form_label('Address 2:', 'address_2'); ?>
			<?php echo form_input('address_2', '', ['placeholder' => 'Address 2', 'class' => 'form-control']);?>		
		</div>


		<div class="form-group">
			<?php echo form_label('City:', 'city'); ?>
			<?php echo form_input('city', '', ['placeholder' => 'City', 'class' => 'form-control']);?>
		</div>

		<div class="form-group">
			<?php echo form_label('State:', 'state'); ?>
			<?php echo form_input('state', '', ['placeholder' => 'State', 'class' => 'form-control']);?>
		</div>

		<div class="form-group">
			<?php echo form_label('Zip Code:', 'zip_code'); ?>
			<?php echo form_input('zip_code', '', ['placeholder' => 'Zip Code', 'class' => 'form-control']);?>
		</div>

		<div class="form-group">
			<?php echo form_label('Phone Number:', 'phone'); ?>
			<?php echo form_input('phone', '', ['placeholder' => 'Phone Number', 'class' => 'form-control']);?>
		</div>

		<div class="form-group">
			<?php echo form_label('E-mail:', 'email'); ?>
			<?php echo form_input('email','', ['placeholder' => 'E-mail', 'class' => 'form-control']);?>
		</div>

		<div class="form-group">
			<?php echo form_label('Attach PDF:', 'pdf'); ?>
			<?php echo form_upload('pdf', 'pdf', 'class="form-control"');?>
		</div>

		<div class="form-group">
			<?php echo form_button('submit', 'submit', 'class="btn btn-primary"');?>
		</div>
		
		<?php echo form_close(); ?>
	</div>

</section>

<?php include "templates/footer.php"; ?>
