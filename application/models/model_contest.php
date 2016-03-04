<?php
class Model_contest extends CI_Model{
	
	public function get_district(){
		$query = $this->db->get('district');
		return $query->result();
	}

	public function insert_contestant($data){
		$this->db->insert('contestant',$data);
	}

	public function insert_contestant_rating($rating){
		$this->db->insert('contestantrating',$rating);
	}

	public function get_all(){
		$query = $this->db->get('contestant');
		return $query->result();
	}

	public function editContestant(){
		$this->db->where('id',$this->uri->segment(3));
		$query = $this->db->get('contestant');

		return $query->row();
	}


	public function insert_old_contestant($data){
		$this->db->where('id',$data['id']);
		//var_dump($data);
		//echo $this->uri->segment(3);

		$this->db->update('contestant',$data);
	}

	public function deleteContestant(){
		$this->db->where('id',$this->uri->segment(3));
		$this->db->delete('contestant');
		$this->db->delete('contestantrating');
	}

	///RATINGS
	public function get_ratings(){
		$query = $this->db->get('contestantrating');
		return $query->result();
	}
	public function to_rate_getRating(){
		$this->db->where('contestantid',$this->uri->segment(3));
		$query = $this->db->get('contestantrating');
		return $query->row();
	}
	public function to_rate_getUser(){
		$this->db->where('id',$this->uri->segment(3));
		$query = $this->db->get('contestant');
		return $query->row();
	}

	public function insertVote($data){
		$this->db->where('contestantid',$data['contestantid']);
		$this->db->update('contestantrating',$data);
	}



}