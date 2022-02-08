<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataUserController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		is_logged_in();
		if ($this->session->userdata('level') != 'petugas') :
			redirect('Auth/BlockedController');
		endif;
		$this->load->model('Petugas_m');
	}

    public function index()
    {
        $data['data_masyarakat'] = $this->db->get('masyarakat')->result_array();
		$data['title'] = 'Data masyarakat';
		$this->load->view('_part/backend_head', $data);
		$this->load->view('_part/backend_sidebar_v');
		$this->load->view('_part/backend_topbar_v');
		$this->load->view('admin/data_masyarakat');
		$this->load->view('_part/backend_foot');
    }
}