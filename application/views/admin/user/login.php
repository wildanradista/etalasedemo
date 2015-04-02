
<div class="modal-header" >
        	<h2 align="center"> Login </h2>
            
        </div>
		<div class="modal-body">
		<?php echo validation_errors(); ?>
		 <?php echo form_open(); ?>        
                    		<table class="table">
                    <tr>
                        <td>Email</td>
                        <td><?php echo form_input('email'); ?></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><?php echo form_password('password'); ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><?php echo form_submit('submit', 'Log in', 'class="btn btn-primary"'); ?></td>
                    </tr>
                </table>
         <?php echo form_close(); ?> 
         </div>