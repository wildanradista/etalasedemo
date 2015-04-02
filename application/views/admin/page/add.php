

<?php echo form_open(''); ?>
<table class="table">
	<tr>
		<td>Title</td>
		<td><?php echo form_input('title'); ?></td>
	</tr>
	<tr>
		<td>Locate</td>
		<td><?php echo form_input('Locate'); ?></td>
	</tr>
	
	<tr>
		<td>Order</td>
		<td><?php echo form_input('order'); ?></td>
	</tr>
	<tr>
		<td>Body</td>
		<td><?php echo form_input('body'); ?></td>
	</tr>

	
	<tr>
		<td>Parent_id</td>
		<td><?php echo form_input('parent_id'); ?></td>
	</tr>
	<tr>
		<td></td>
		<td><?php echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?></td>
	</tr>
</table>
<?php echo form_close();?>
