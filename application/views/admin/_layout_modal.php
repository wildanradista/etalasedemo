<?php $this->load->view('admin/components/page_head'); ?>

<body style="background: #555;">

	
    <div class="container-fluid col-md-4 col-md-offset-4 ">
	<div class="modal-content" role="dialog" >
    	<?php $this->load->view($subview); ?>
        <div class="modal-footer" align="center">
			&copy;  <?php echo $meta_title; ?>
		</div>
        </div>
	</div>
          
<?php $this->load->view('admin/components/page_tail'); ?>