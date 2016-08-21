<?php if($need_action): ?>
<table class="table table-striped table-condensed table-responsive">
<thead>
  <tr>
  	<?php foreach ($need_action[0] as $key => $value) {
  		echo "<th>{$key}</th>";
  	} ?>
  </tr>
</thead>
<tbody>
<?php foreach ($need_action as $object):  ?>
	<tr>
		<?php 
			foreach ($object as $key => $value ){

				if($key == 'status'){
					
					echo '<td>';

					echo form_open('status/update', '', ['status' => 1, 'user_id' => $object->id ] );
					echo form_submit('approve', 'Approve', ['class' => 'btn btn-success']);
					echo form_close();

					echo form_open('status/update', '', ['status' => 2, 'user_id' => $object->id ] );
					echo form_submit('deny', 'Deny', ['class' => 'btn btn-danger']);
					echo form_close();

					echo '</td>';
					continue;
				}

				if($key == 'pdf_path'){
					echo sprintf('<td><a href="%s" target="_blank">File</a></td>', $value);
					continue;
				}

					echo sprintf('<td>%s</td>', $value);

			 } 
		?>
	</tr>
<?php endforeach; ?>


</tbody>
</table>
<?php else: ?>
	<div class="col-xs-12 text-center">There aren't any records that need action</div>
<?php endif; ?>	