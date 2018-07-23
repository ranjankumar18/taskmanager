<p class="bg-success">
	<?php if($this->session->flashdata('login_success')):
		echo $this->session->flashdata('login_success')?>
	<?php endif;?>

	


	<?php if($this->session->flashdata('user_registered')):
		echo $this->session->flashdata('user_registered')?>
	<?php endif;?>
</p>

<p class="bg-danger">
	<?php if($this->session->flashdata('login_failed')):
		echo $this->session->flashdata('login_failed')?>
	<?php endif;?>

	<?php if($this->session->flashdata('no_access')):
		echo $this->session->flashdata('no_access')?>
	<?php endif;?>
</p>
<div class="jumbotron">
	<h3>Welcome to CI APP</h3>
</div>
<?php if(isset($projects)):?>
<h1> PROJECTS</h1>
<table class="table table-bordered">

	
	<thead>
		<tr>
			<th>
				Project Name
			</th>
			<th>
				Project Description
			</th>
		</tr>
	</thead>
	<tbody>

		<?php foreach ($projects as $project): ?>
			<tr>
<td>
	<?php  echo $project->project_name; ?></td>
<td><?php  echo $project->project_body; ?></td>
<td><a href="<?php echo base_url();?>projects/display/<?php echo $project->id?>">View</a></td>
			</tr>
		<?php endforeach;?>
	
	</tbody>
</table>
<?php endif;?>
<?php if(isset($task)):?>
<h1> TASKS</h1>
<table class="table table-bordered">

	
	<thead>
		<tr>
			<th>
				Task Name
			</th>
			<th>
				Task Description
			</th>
		</tr>
	</thead>
	<tbody>

		<?php foreach ($task as $tasks): ?>
			<tr>
<td>
	<?php  echo $tasks->task_name; ?></td>
<td><?php  echo $tasks->task_body; ?></td>
<td><a href="<?php echo base_url();?>task/display/<?php echo $tasks->id?>">View</a></td>
			</tr>
		<?php endforeach;?>
	
	</tbody>
</table>
<?php endif;?>
