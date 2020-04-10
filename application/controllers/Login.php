<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	public function __construct() {

		parent::__construct();


	}

	public function index(){

		$data['title'] = "Log In";

		$this->load->view('common/head');
		$this->load->view('login/login', $data);
		$this->load->view('common/foot');

	}
	public function register(){

		$data['title'] = "Register";

		$this->load->view('common/head');
		$this->load->view('login/register', $data);
		$this->load->view('common/foot');

	}

	public function recover_password(){

		$data['title'] = "Recover Password";

		$this->load->view('common/head');
		$this->load->view('login/recover-password', $data);
		$this->load->view('common/foot');

	}

	public function forget_password(){

		$data['title'] = "Forget Password";

		$this->load->view('common/head');
		$this->load->view('login/forget-password', $data);
		$this->load->view('common/foot');

	}
}

