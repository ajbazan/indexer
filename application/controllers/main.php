<?php

class main extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		
		$this->load->helper ( 'form' );
		$this->load->helper ( 'url' );
		
		$this->load->library('session');
		
		$this->load->model("User");
	}
	
	function index() {
		
		$this->login();
	}
	
	function login(){
		
		/*
		TODO Se debe corroborrar user y pass en la Base de datos
			 Se debe guardar la pass encriptada y coparar con una funcion de encriptado
			 Si es incorrecta la comparacion, se pda la opcion de resetear el password
		*/
		
		if(isset($_POST['username'])&& isset($_POST['pass']) )	{	
			
			//TODO Encriptar clave
			$user=$this->User->getUserByUsername($_POST['username']);
			
			if(isset($user->name))
			{	
				if($_POST['pass']==$user->password && $user->type=='admin' )
				{
					$this->session->set_userdata('logged_in',TRUE);
					$this->session->set_userdata('user_type','admin');
					$this->session->set_userdata('user_id',$user->id);
					
					redirect(base_url().'/index.php/users');
				}
				else if($_POST['pass']==$user->password && $user->type=='user')
				{
					$this->session->set_userdata('logged_in',TRUE);
					$this->session->set_userdata('user_type','user');
					$this->session->set_userdata('user_id',$user->id);
					redirect(base_url().'/index.php/users/user_collections/'.$user->id);
				}
			}
		}
		else if($this->session->userdata('logged_in') )
		{
			if($this->session->userdata('user_type')=='admin')
				redirect(base_url().'/index.php/users');
			else
				redirect(base_url().'/index.php/users/user_collections/'.$this->session->userdata('user_id'));
		}
		
		$this->load->view("login");
	}
	
	function logout(){
		$this->session->unset_userdata('logged_in');
		$this->login();
	}
}

/* End of file main.php */
/* Location: ./system/application/controllers/main.php */
