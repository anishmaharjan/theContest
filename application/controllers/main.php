<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->menu();
	}
	public function menu()
	{
		$this->load->view('menu_view');
	}

	public function contestant()
	{
		$this->load->model('model_contest');
		$data['records'] = $this->model_contest->get_all();
		$this->load->view('contestant_view',$data);

	}

	public function addContestant()
	{
		$this->load->model('model_contest');
		$data['district'] = $this->model_contest->get_district();
		$this->load->view('addContestant',$data);
	}
	public function registerCandidate()
	{
		$this->load->model('model_contest');
		$sql = "SELECT id FROM district WHERE name = ?"; 
		$test = $this->db->query($sql, $this->input->post("district"));

		var_dump($test);

		//upload a file //LEARN
		/*$data = array(
			'firstname'		=>	$this->input->post("firstname"),
			'lastname'		=>	$this->input->post("lastname"),
			'dateofbirth'	=>	$this->input->post("dob"),
			'isactive'		=>	$this->input->post("isactive"),
			'districtid'	=>	$this->input->post("district")1,
			'gender'		=>	$this->input->post("gender"),
			'photourl'		=>	$this->input->post("photourl"),
			'address'		=>	$this->input->post("address")
			);

		$this->model_contest->insert_contestant($data);
*/

	}


}