<h2>Create task </h2>

<?php $attributes=array('id'=>'create_form','class'=>'form_horizontal');?>
<?php echo validation_errors("<p class='bg-danger'>");?>
<?php //if($this->session->flashdata('errors')):?>
<?php //echo $this->session->flashdata('errors');?>
	<?php //endif;?>
<?php echo form_open('task/create/'.$this->uri->segment(3).'',$attributes);?>
<div class="form-group">

	<?php echo form_label('task name');
	
	$data=array(
		'class'=>'form-control',
		'name'=>'task_name',
		'placeholder'=>'Enter task'


	);
	?>
	<?php echo form_input($data);?>
</div>
<div class="form-group">

	<?php echo form_label('task Description');
	
	$data=array(
		'class'=>'form-control',
		'name'=>'task_body',
		'placeholder'=>'Enter Description'


	);
	?>
	<?php echo form_textarea($data);?>
</div>
<div class="form-group">

	<?php 
	
	$data=array(
		'class'=>'form-control',
		'name'=>'due_date',
		'type'=>'date'


	);
	?>
	<?php echo form_input($data);?>
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

