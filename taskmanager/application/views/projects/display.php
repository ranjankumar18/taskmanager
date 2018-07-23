
<div class="col-xs-9">

<p class="bg-success">
	<?php if($this->session->flashdata('mark_done')):?>
    <?php    echo $this->session->flashdata('mark_done');?>
   <?php endif;
		?>
</p>
<p class="bg-success">
	<?php if($this->session->flashdata('mark_undone')):
       echo $this->session->flashdata('mark_undone');
   endif;
		?>
</p>



<h1>Project Name: <?php echo $project_data->project_name;?></h1>
<p>Date Created: <?php echo $project_data->date_created;?></p>
<h3>Description</h3>
<p><?php echo $project_data->project_body;?></p>

<h3>Active Task</h3>

<ul>
<?php if($completed_task):?>
	<?php foreach ($completed_task as $task):?>
		<li>
	<a href="<?php echo base_url();?>task/display/<?php echo $task->task_id;?>"> 
		<?php echo $task->project_name;?>
		</a>
	</li>
	<?php endforeach;?>
	<?php else:?>
		<p>There is no task pending</p>
<?php endif;?>

</ul>





<h3>Completed Tasks</h3>
<ul>
<?php if($not_completed_task):?>
	<?php foreach ($not_completed_task as $task):?>
		<li>
	<a href="<?php echo base_url();?>task/display/<?php echo $task->task_id;?>"> 
		<?php echo $task->project_name;?>
		</a>
	</li>
	<?php endforeach;?>
	<?php else:?>
		<p>There is no task pending</p>
<?php endif;?>

</ul>

</div>	
<div class="col-xs-3 pull-right">
<ul class="list-group">
	<h3>
		Project Action
	</h3>
		<li class="list-group-item"><a href="<?php echo base_url();?>task/create/<?php echo $project_data->id; ?>">Create Task</a></li>
		<li class="list-group-item"><a href="<?php echo base_url();?>projects/edit/<?php echo $project_data->id;?>">Edit projects</a></li>
		<li class="list-group-item"><a href="<?php echo base_url();?>projects/delete/<?php echo $project_data->id;?>">Delete projects</a></li>
</ul>
</div>
