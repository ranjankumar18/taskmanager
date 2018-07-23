<h1>Task For:<?php echo $project_name;?></h1>

<table class="table table-bordered">

	
	<thead>
		<tr>
			<th>
				Task Name
			</th>
			<th>
				Task Description
			</th>
			<th>
				Date created
			</th>
			<th>
				
			</th>
		</tr>
	</thead>
	<tbody>

		
			<tr>
				
<td>
	
		<div class="task-name">
			<?php  echo $task->task_name; ?>
					
				</div>
				<div class="task-action">
					<a href="<?php echo base_url();?>task/edit/<?php echo $task->id;?>">Edit</a>
					<a href="<?php echo base_url();?>task/delete/<?php echo $task->project_id;?>/<?php echo $task->id;?>">Delete</a>
				</div>
	</td>
<td><?php  echo $task->task_body; ?></td>
<td><?php  echo $task->date_created; ?></td>
<td><a href="<?php echo base_url();?>task">View</a></td>
<td><a href="<?php echo base_url();?>task/mark_complete/<?php echo $task->id;?>">Mark Complete</a></td>
<td><a href="<?php echo base_url();?>task/mark_incomplete/<?php echo $task->id;?>">Mark InCompleted</a></td>
			</tr>
		
	
	</tbody>
</table>
