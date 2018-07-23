<?php

class User_model extends CI_Model{

public function login_user($username,$password){
	$this->db->where('username',$username);
	$this->db->where('password',$password);
	$result=$this->db->get('users');
	//$db_password=$result->row(2)->password;
	if($result->num_rows()==1){
       return $result->row(0)->id;
	//if(password_verify($password, $db_password)){
		//return $result->row(0)->id;
	}
	else{
        return false;
	}


	
}

public function create_user()
{
    //$options=['cost'=>12]
	//$encpass=password_hash($this->input->post('password'),PASSWORD_BCRYPT);
	$data=array(
		'username'=>$this->input->post('username'),
		//'password'=>$encpass,
		'password'=>$this->input->post('password'),
		'first_name'=>$this->input->post('first_name'),
		'last_name'=>$this->input->post('last_name'),
		'email'=>$this->input->post('email')

	);
$insert_data=$this->db->insert('users',$data);
return $insert_data;

}


}










?>