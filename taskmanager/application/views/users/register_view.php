
<h2>Register</h2>

<?php $attributes=array('id'=>'register_form','class'=>'form_horizontal');?>
<?php echo validation_errors("<p class='bg-danger'>");?>
<?php //if($this->session->flashdata('errors')):?>
<?php //echo $this->session->flashdata('errors');?>
	<?php //endif;?>
<?php echo form_open('user/register',$attributes);?>
<div class="form-group">

	<?php echo form_label('First name');
	
	$data=array(
		'class'=>'form-control',
		'name'=>'first_name',
		'placeholder'=>'Enter Your Fisrstname'


	);
	?>
	<?php echo form_input($data);?>
</div>
<div class="form-group">

	<?php echo form_label('Last name');
	
	$data=array(
		'class'=>'form-control',
		'name'=>'last_name',
		'placeholder'=>'Enter Your Lastname'


	);
	?>
	<?php echo form_input($data);?>
</div>
<div class="form-group">

	<?php echo form_label('Email');
	
	$data=array(
		'class'=>'form-control',
		'name'=>'email',
		'placeholder'=>'Enter Your Email'


	);
	?>
	<?php echo form_input($data);?>
</div>
<div class="form-group">

	<?php echo form_label('Username');
	
	$data=array(
		'class'=>'form-control',
		'name'=>'username',
		'placeholder'=>'Enter Your  Username'


	);
	?>
	<?php echo form_input($data);?>
</div>
<div class="form-group">

	<?php echo form_label('Password');
	
	$data=array(
		'class'=>'form-control',
		'name'=>'password',
		'placeholder'=>'Enter Your Password'


	);
	?>
	<?php echo form_password($data);?>
</div>
<div class="form-group">

	<?php echo form_label('Confirm Password');
	
	$data=array(
		'class'=>'form-control',
		'name'=>'confirm_password',
		'placeholder'=>'Confirm Your Password'


	);
	?>
	<?php echo form_password($data);?>
</div>
<div class="form-group">


	<?php $data=array(
		'class'=>'btn btn-primary',
		'name'=>'submit',
		'value'=>'Register'


	);
	?>
	<?php echo form_submit($data);?>
</div>



<?php echo form_close();?>

