<?php

$home="";
$projects="";
$register="";
if($this->uri->segment(1)=='projects'){
   $projects="active";
}
elseif($this->uri->segment(2)=='register'){
   $register="active";
}else
{
$home="active";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css"></link>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom.css"></link>

	<script type="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>


<!-- Latest compiled and minified JavaScript -->
<script
  src="https://code.jquery.com/jquery-1.11.0.js"
  integrity="sha256-zgND4db0iXaO7v4CLBIYHGoIIudWI5hRMQrPB20j0Qw="
  crossorigin="anonymous"></script>
	
</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>">CI APP</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="<?php echo $home;?>"><a href="<?php echo base_url();?>">Home <span class="sr-only">(current)</span></a></li>
         <li class="<?php echo $projects;?>"><a href="<?php echo base_url();?>projects">Projects<span class="sr-only">(current)</span></a></li>
        <li class="<?php echo $register;?>"><a href="<?php echo base_url();?>user/register">Register</a></li>
        
      </ul>
      <?php if($this->session->userdata('logged_in')):?>
      <ul class="nav navbar-nav navbar-right">
        
      
        <li><a href="<?php echo base_url();?>user/logout">Logout</a></li>

      
      </ul>
      <?php endif;?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	
	<div class="container">
	<div class="col-xs-3">
    
    <?php $this->load->view('users/login_view')?>








	</div>
	<div class="col-xs-9">
	<?php $this->load->view($main_view);?>
	</div>
	</div>

</body>
</html>