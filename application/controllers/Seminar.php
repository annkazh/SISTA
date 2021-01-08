<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seminar extends CI_Controller {

	public function index(){
		$meta['title'] = 'Halaman Seminar Sista';
		$this->load->view('template/header', $meta);
		$this->load->view('seminar/home');
		$this->load->view('template/footer');
	}

}

/* End of file Seminar.php */
/* Location: ./application/controllers/Seminar.php */