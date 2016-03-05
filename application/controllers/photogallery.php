<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Photogallery extends CI_Controller{
	public function __construct(){
		parent::__construct();

		$this->load->model('model_contest');
	}

	public function index(){
		$this->gallery();
	}

	public function gallery(){
		$data['records'] = $this->model_contest->get_all();
		$this->load->view('gallery_view',$data);
	}

}