<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_contest');
	}

	public function index()
	{
		$this->menu();
	}
	public function menu()
	{
		$this->load->view('menu_view');
	}

//Contestant
	public function contestant()
	{
		//$this->load->model('model_contest');
		$data['records'] = $this->model_contest->get_all();
		$data['district'] = $this->model_contest->get_district();
		$this->load->view('contestant_view',$data);

	}


	//ADDING NEW USERS
	public function addContestant() //goes to View
	{
		//$this->load->model('model_contest');
		$data['district'] = $this->model_contest->get_district();
		$this->load->view('addContestant',$data);
	}
	public function registerCandidate()  //registers in database
	{
		//$this->load->model('model_contest');
		$sql = "SELECT id FROM district WHERE name = ?";//to know district->id
		$query = $this->db->query($sql, $this->input->post("district"))->result();
		foreach ($query as $dId): //district ID

		$data = array(
			'firstname'		=>	$this->input->post("firstname"),
			'lastname'		=>	$this->input->post("lastname"),
			'dateofbirth'	=>	$this->input->post("dob"),
			'isactive'		=>	$this->input->post("isactive"),
			'districtid'	=>	$dId->id,
			'gender'		=>	$this->input->post("gender"),
			'photourl'		=>	$this->input->post("photourl"),
			'address'		=>	$this->input->post("address")
			);

		endforeach;

		//var_dump($data['dateofbirth']);

		$this->model_contest->insert_contestant($data);

		$sql = "SELECT id FROM contestant";  //To insert in Rating table /database
		$query = $this->db->query($sql);
		$row = $query->last_row();  

		$rating = array(
			'contestantid'	=>	$row->id,
			'rating'		=>	'0', //Default
			'rateddate'		=>	date("Y-m-d")
			);
		
		$this->model_contest->insert_contestant_rating($rating);
		
		redirect('main/contestant');
	}


	//EDITING Users

	public function editContestant(){
		//$this->load->model('model_contest');
		$data['user'] = $this->model_contest->editContestant();
		$data['district'] = $this->model_contest->get_district();
		$this->load->view('editContestant_view',$data);

	}
	public function editCandidate(){  //modifies the users into database
		//$this->load->model('model_contest');

		//to know district->id
		$sql = "SELECT id FROM district WHERE name = ?";
		$query = $this->db->query($sql, $this->input->post("district"))->result();
		foreach ($query as $dId): //district ID 
		
		$data = array(
			'id'			=>	$this->input->post('c_id'),
			'firstname'		=>	$this->input->post("firstname"),
			'lastname'		=>	$this->input->post("lastname"),
			'dateofbirth'	=>	$this->input->post("dob"),
			'isactive'		=>	$this->input->post("isactive"),
			'districtid'	=>	$dId->id,
			'gender'		=>	$this->input->post("gender"),
			'photourl'		=>	$this->input->post("photourl"),
			'address'		=>	$this->input->post("address")
			);
		endforeach;

		$this->model_contest->insert_old_contestant($data); //database upload for new edited users

		redirect('main/contestant');

	}

	//DELETING User
	public function deleteContestant(){
		//to bring POP UP.


				//window.location.href='/theContest/main/contestant';

		$this->model_contest->deleteContestant();
		redirect('main/contestant');


	}


}