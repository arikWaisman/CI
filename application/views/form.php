<?php 
//repopulate form fields on validation error
$first_name_value		= set_value('first_name'); 
$last_name_value		= set_value('last_name'); 
$address_1_value		= set_value('address_1'); 
$address_2_value		= set_value('address_2'); 
$city_value				= set_value('city'); 
$state_value			= set_value('state'); 
$zipcode_value			= set_value('zipcode'); 
$phone_value			= set_value('phone'); 
$email_value			= set_value('email'); 
$company_name_value		= set_value('company_name'); 
$company_address_value 	= set_value('company_address'); 
$company_city_value 	= set_value('company_city'); 
$company_state_value 	= set_value('company_state'); 
$company_zipcode_value 	= set_value('company_zipcode'); 
$company_phone_value 	= set_value('company_phone'); 

?>

<?php include "templates/header.php"; ?>

<section class="row">

<div class="col-xs-12 form-wrapper">

<?php if( validation_errors() || $_SESSION['file_type_error'] ): ?>
	<div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center alert alert-danger">
		<?php 
		echo validation_errors(); 
		if( isset($_SESSION['file_type_error'])) {
			echo $_SESSION['file_type_error'];
		}
		?>
	</div>
<?php endif; ?>


	<?php echo form_open_multipart('form/submit', ['id' => 'user-form']); ?>
		<div class="col-xs-12">
			<h2 class="text-center">User Info</h2>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('First Name:', 'first_name'); ?>
					<?php echo form_input('first_name', $first_name_value,  ['placeholder' => 'First Name', 'class' => 'form-control']);?>
				</div>
			
				<div class="form-group">
					<?php echo form_label('Last Name:', 'last_name'); ?>
					<?php echo form_input('last_name', $last_name_value, ['placeholder' => 'Last Name', 'class' => 'form-control']);?>
				</div>
		
				<div class="form-group">
					<?php echo form_label('Address 1:', 'address_1'); ?>
					<?php echo form_input('address_1', $address_1_value, ['placeholder' => 'Address 1', 'class' => 'form-control']);?>
				</div>
		
				<div class="form-group">
					<?php echo form_label('Address 2:', 'address_2'); ?>
					<?php echo form_input('address_2', $address_2_value, ['placeholder' => 'Address 2', 'class' => 'form-control']);?>		
				</div>

				<div class="form-group">
					<?php echo form_label('City:', 'city'); ?>
					<?php echo form_input('city', $city_value, ['placeholder' => 'City', 'class' => 'form-control']);?>
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('State:', 'state'); ?>
					<?php echo form_input('state', $state_value, ['placeholder' => 'State', 'class' => 'form-control']);?>
				</div>
		
				<div class="form-group">
					<?php echo form_label('Zipcode:', 'zipcode'); ?>
					<?php echo form_input('zipcode', $zipcode_value, ['placeholder' => 'Zip Code', 'class' => 'form-control']);?>
				</div>
		
				<div class="form-group">
					<?php echo form_label('Phone Number:', 'phone'); ?>
					<?php echo form_input('phone', $phone_value, ['placeholder' => 'Phone Number', 'class' => 'form-control']);?>
				</div>
		
				<div class="form-group">
					<?php echo form_label('E-mail:', 'email'); ?>
					<?php echo form_input('email', $email_value, ['placeholder' => 'E-mail', 'class' => 'form-control']);?>
				</div>
			</div>
		</div>

		<div class="col-xs-12">
			<h2 class="text-center">Company Info</h2>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Company Name:', 'company_name'); ?>
					<?php echo form_input('company_name', $company_name_value, ['placeholder' => 'Company Name', 'class' => 'form-control']);?>
				</div>
		
				<div class="form-group">
					<?php echo form_label('Company Address:', 'company_address'); ?>
					<?php echo form_input('company_address', $company_address_value, ['placeholder' => 'Company Address', 'class' => 'form-control']);?>
				</div>

				<div class="form-group">
					<?php echo form_label('Company City:', 'company_city'); ?>
					<?php echo form_input('company_city', $company_city_value, ['placeholder' => 'Company City', 'class' => 'form-control']);?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Company State:', 'company_state'); ?>
					<?php echo form_input('company_state', $company_state_value, ['placeholder' => 'Company State', 'class' => 'form-control']);?>
				</div>

				<div class="form-group">
					<?php echo form_label('Company Zipcode:', 'company_zipcode'); ?>
					<?php echo form_input('company_zipcode', $company_zipcode_value, ['placeholder' => 'Company Zip Code', 'class' => 'form-control']);?>
				</div>

				<div class="form-group">
					<?php echo form_label('Company Phone:', 'company_phone'); ?>
					<?php echo form_input('company_phone', $company_phone_value, ['placeholder' => 'Company Phone', 'class' => 'form-control']);?>
				</div>
			</div>
		</div>

	<div class="col-xs-12">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="form-group">
				<?php echo form_label('Attach PDF:', 'pdf'); ?>
				<?php echo form_upload('pdf', 'pdf', ['accept' => '.pdf', 'class' => 'form-control']);?>
			</div>
		</div>
	</div>

<!-- 	<div class="g-recaptcha col-xs-12" data-sitekey="6LcmDSgTAAAAAKpcdQkUdWxQnGd35dnXvyaLhCa3"></div>
 -->	<div class="col-xs-12 text-center"> 
		<?php echo form_submit('submit', 'submit', ['class' =>'btn btn-primary']);?>
	</div>

	<?php echo form_close(); ?>
	
</div>

</section>

<?php include "templates/footer.php"; ?>
