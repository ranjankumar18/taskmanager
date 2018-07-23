<?php

class Home extends CI_Controller{

	public function index()
	{ 
		if($this->session->userdata('logged_in')){
			$user_id=$this->session->userdata('user_id');
			$data['task']=$this->task_model->get_all_task($user_id);

			$data['projects']=$this->project_model->get_all_projects($user_id);

		}
		$data['main_view'] = "home_view";
		$this->load->view('layout/main',$data);
		//echo 'This is home controller';
	}
}
?>