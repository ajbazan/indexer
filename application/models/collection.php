<?php

class Collection extends CI_Model {

 	function __construct()    {
        parent::__construct();
        $this->load->database();
        $this->load->helper ( 'url' );
    }
    
    //Devuelve las colecciones de un usuario
	function getByUserId($id)
	{
		$query = $this->db->query('select * from collection where user_id = '.$id);
        return $query->result();
	}
	
	//Dado un id de collection, trae sus datos
	function getCollection($id)
	{	
		return $this->db->get_where('collection', array('id' => $id))->first_row();
	}
	
	function getCollectionByCollectionname($collectionname){
		return $this->db->get_where('collection', array('collectionname' => $collectionname))->first_row();
	}
	
	function insertCollection($campos){ 
      
	  $res=$this->db->insert('collection', $campos);
      return $res;
  }
    
  function updateCollection($id, $campos){
    	
  		$this->db->where('id', $id);
    	$this->db->update('collection', $campos);
  	}
	
	function deleteCollection($id){
    	
    	$this->db->where('id', $id);
		$this->db->delete('collection');
  	}

	function getMaxId()
	{
		$id = $this->db->query('select max(id) as max_id from collection');
		return $id->first_row();
	}
}	