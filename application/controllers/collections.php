<?php

class collections extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		
		$this->load->helper ( 'form' );
		$this->load->helper ( 'url' );
		
		$this->load->library('session');
		
		//TODO si el usuario es admin o no, tiene distintos permisos
		if(!$this->session->userdata('logged_in')) 
		
			redirect('main');	
			
		$this->load->model("Collection");
		$this->load->model("Collection");
	}
	
	function index() {
		
		$this->list_collections();
	}
	
	function list_collections(){
		
		//TODO si no es admin, no puede ver el listado de usuarios
		if($this->session->userdata('collection_type')!='admin')
			redirect('main');
		
		$collections=$this->Collection->getCollections();
		$this->load->view("list_collections",array('collections' => $collections));
	}
	
	function add_collection() {

		$errors='';	
		$campos=array();
		
		//TODO validar errores de ingreso de datos
		if ($_POST) {
			if($_POST['name']=='')
				$errors='Se debe completar el nombre';
			else{
				foreach($_POST as $key=>$value){
					$campos[$key]=$value;
				}
				$campos['user_id']=$this->session->userdata('user_id');
				
				$this->Collection->insertCollection ( $campos );
				redirect('collections');
			}
		}
		
		$this->load->view ( 'add_collection',array('errors'=>$errors));
	}
	
	function edit_collection($id='') {
		
		$errors='';	
		$collection=$this->Collection->getCollection($id);
		$campos=array();	
		
		//TODO validar errores de ingreso de datos
		if ($_POST) {

 			if($_POST['name']=='')
				$errors='Se debe completar el nombre';
			else{
				$id=$_POST['id'];
				foreach($_POST as $key=>$value){
					$campos[$key]=$value;
				}
				//unset($campos['id']);
				
				$this->Collection->updateCollection ( $id, $campos );
				redirect('collections');
			}
		}
		
		$this->load->view ( 'edit_collection',array('collection'=>$collection,'errors'=>$errors));
	}
	function collection_collections($id='') {
		
		//$collection=$this->Collection->getCollection($id);
		$cols=$this->Collection->getByCollectionId($id);
		
		$this->load->view ( 'collection_collections',array('cols'=>$cols));
	}
	
	function delete_collection($id='') {
		
		$this->Collection->deleteCollection ( $id );	
		redirect('collections');
	}
}

/* End of collection collections.php */
/* Location: ./system/application/controllers/collections.php */