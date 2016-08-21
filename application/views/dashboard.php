<?php include "includes/header.php"; ?>

<h1>Welcome <?php echo $this->session->userdata('username') ?></h1>
<div class="need-action-wrapper">
	<h2 class="text-center">Need Action</h2>
	<?php include "includes/need_action.php" ?>
</div>

<div class="approved-wrapper">
	<h2 class="text-center">Approved</h2>
	<?php include "includes/approved.php" ?>
</div>

<div class="denied-wrapper">
	<h2 class="text-center">Denied</h2>
	<?php include "includes/denied.php" ?>
</div>

<?php include "includes/footer.php" ?>