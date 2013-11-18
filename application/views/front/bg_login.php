<div id="container">
	

	<div id="body">
		
		<?php echo form_open('front/index'); ?>
		<div id="bg-line">
		Username : 
		<?php echo form_input($username,set_value('username')); ?>
		Password : 
		<?php echo form_input($password); ?>
		<?php echo form_submit('submit', 'Log In', ' class="btn-kirim-login"');?> 
		<?php echo form_reset('submit', 'Hapus',' class="btn-kirim-login"');?>
		</div>
		<?php echo form_close(); ?>
		<?php echo validation_errors(); ?>
		<?php echo $this->session->flashdata('result_login'); ?>
	</div>
