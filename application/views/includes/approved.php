<?php if($approved): ?>
<table class="table table-striped table-condensed table-responsive">
<thead>
  <tr>
  	<?php foreach ($approved[0] as $key => $value) {
  		echo "<th>{$key}</th>";
  	} ?>
  </tr>
</thead>
<tbody>
<?php foreach ($approved as $object):  ?>
	<tr>
		<?php 
			foreach ($object as $key => $value ){

				if($key == 'status'){
					
					echo '<td>';
					echo form_open('status/update', '', ['status' => 0, 'user_id' => $object->id ] );
					echo form_submit('reconsider', 'Reconsider', ['class' => 'btn btn-primary']);
					echo form_close();
					echo '</td>';
					continue;

				}

				if($key == 'pdf_path'){

					echo sprintf('<td><a href="%s">File</a></td>', $value);
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
	<div class="col-xs-12 text-center">There aren't any approved records</div>
<?php endif; ?>	