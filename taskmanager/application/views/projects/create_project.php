<h2>Create Project </h2>

<?php $attributes=array('id'=>'create_form','class'=>'form_horizontal');?>
<?php echo validation_errors("<p class='bg-danger'>");?>
<?php //if($this->session->flashdata('errors')):?>
<?php //echo $this->session->flashdata('errors');?>
	<?php //endif;?>
<?php echo form_open('projects/create',$attributes);?>
<div class="form-group">

	<?php echo form_label('Project name');
	
	$data=array(
		'class'=>'form-control',
		'name'=>'project_name',
		'placeholder'=>'Enter Project'


	);
	?>
	<?php echo form_input($data);?>
</div>
<div class="form-group">

	<?php echo form_label('Project Description');
	
	$data=array(
		'class'=>'form-control',
		'name'=>'project_body',
		'placeholder'=>'Enter Description'


	);
	?>
	<?php echo form_textarea($data);?>
</div>

<div class="form-group">


	<?php $data=array(
		'class'=>'btn btn-primary',
		'name'=>'submit',
		'value'=>'Submit'


	);
	?>
	<?php echo form_submit($data);?>
</div>



<?php echo form_close();?>

