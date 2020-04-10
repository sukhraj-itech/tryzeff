<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

	public function __construct() {

		parent::__construct();


	}

	public function index(){

		$data['title'] = "Dashboard";

		$this->load->view('common/head');
		$this->load->view('common/navbar');
		$this->load->view('dashboard/index', $data);
		$this->load->view('common/footer');

	}
}
