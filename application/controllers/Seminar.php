<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seminar extends CI_Controller {

	public function index(){
		$this->load->view('seminar/home');
	}

}

/* End of file Seminar.php */
/* Location: ./application/controllers/Seminar.php */