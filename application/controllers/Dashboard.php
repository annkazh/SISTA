<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index(){
		$meta['title'] = 'Halaman Dashboard Sista';
		$this->load->view('template/header', $meta);
		$this->load->view('dashboard/index');
		$this->load->view('template/footer');
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */