<?php
class Model_contest extends CI_Model{
	
	public function get_district(){
		$query = $this->db->get('district');
		return $query->result();
	}

	public function insert_contestant($data){
		$this->db->insert('contestant',$data);
	}

	public function get_all(){
		$query = $this->db->get('contestant');
		return $query->result();
	}
}