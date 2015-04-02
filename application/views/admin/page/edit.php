

<?php echo form_open(''); ?>
<table class="table">
	<tr>
		<td>Title</td>
		<td><?php echo form_input('title', set_value('title', $page->title)); ?></td>
	</tr>
	<tr>
		<td>Locate</td>
		<td><?php echo form_input('locate', set_value('locate', $page->locate)); ?></td>
	</tr>
	
	<tr>
		<td>Order</td>
		<td><?php echo form_input('order', set_value('order', $page->order)); ?></td>
	</tr>
	<tr>
		<td>Body</td>
		<td><?php echo form_input('body', set_value('body', $page->body)); ?></td>
	</tr>
	<tr>
		<td>Parent_id</td>
		<td><?php echo form_input('parent_id', set_value('parent_id', $page->parent_id)); ?></td>
	</tr>
	<tr>
		<td></td>
		<td><?php echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?></td>
	</tr>
</table>
<?php echo form_close();?>
