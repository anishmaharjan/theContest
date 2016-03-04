<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Rating extends CI_Controller{
	public function __construct(){
		parent::__construct();

		$this->load->model('model_contest');
	}

	public function index(){
		$this->rating();
	}

	public function rating(){
		$data['ratings'] = $this->model_contest->get_ratings();
		$data['records'] = $this->model_contest->get_all();
		$data['district'] = $this->model_contest->get_district();

		$this->load->view("rating_view",$data);
	}

	public function rateContestant(){
		$data['record'] = $this->model_contest->to_rate_getUser();
		$data['user'] = $this->model_contest->to_rate_getRating();
		$this->load->view("contestant_rating_view",$data);
		
		
	}

	public function theVote(){
		$sql = "SELECT contestantid,rating FROM contestantrating WHERE contestantid = ?";
		$query = $this->db->query($sql, $this->uri->segment(3))->row();

		$data = array(
			'contestantid'		=> $query->contestantid,  //to process in model
			'rating'			=> $this->input->post('rating'), //from the user
			'rateddate'			=> date('Y-m-d')

			);
	

		if($query->rating == 0) //Fresh Rating
		{
			$this->model_contest->insertVote($data); 
		}
		else  //Stale Rating
		{
			$data['rating'] = ($query->rating + $data['rating'])/2;
			$this->model_contest->insertVote($data);
		}	

		redirect('rating');	

	}



}