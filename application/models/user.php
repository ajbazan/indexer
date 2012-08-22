<?php

class User extends CI_Model {

 	function __construct()    {
        parent::__construct();
        $this->load->database();
        $this->load->helper ( 'url' );
    }
    
	//Devuelve los archivos pdf
	function getUsers()
	{
		$query = $this->db->query('select * from user');
        return $query->result();
	}
	
	//Dado un id de user, trae sus datos
	function getUser($id)
	{	
		return $this->db->get_where('user', array('id' => $id))->first_row();
	}
	
	function getUserByUsername($username){
		return $this->db->get_where('user', array('username' => $username))->first_row();
	}
	
	function insertUser($campos){ 
      
	  $res=$this->db->insert('user', $campos);
      return $res;
  }
    
  function updateUser($id, $campos){
    	
  		$this->db->where('id', $id);
    	$this->db->update('user', $campos);
  	}
	
	function deleteUser($id){
    	
    	$this->db->where('id', $id);
		$this->db->delete('user');
  	}

	function getMaxId()
	{
		$id = $this->db->query('select max(id) as max_id from user');
		return $id->first_row();
	}
}	