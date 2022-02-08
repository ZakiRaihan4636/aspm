<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController_M extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
}

	// List all your items
public function index()
{
	$data['title'] = 'Dashboard';

	// $data['petugas'] = $this->db->get('petugas')->num_rows();
	$data['pengaduan'] = $this->db->get('pengaduan')->num_rows();
	$data['pengaduan_proses'] = $this->db->get_where('pengaduan',['status' => 'proses'])->num_rows();
	$data['pengaduan_selesai'] = $this->db->get_where('pengaduan',['status' => 'selesai'])->num_rows();
    $data['pengaduan_ditolak'] = $this->db->get_where('pengaduan',['status' => 'tolak'])->num_rows();
    

	$this->load->view('_part/backend_head', $data);
	$this->load->view('_part/backend_sidebar_v');
	$this->load->view('_part/backend_topbar_v');
	$this->load->view('masyarakat/dashboard');
	$this->load->view('_part/backend_footer_v');
	$this->load->view('_part/backend_foot');
}
}

/* End of file DashboardController.php */
/* Location: ./application/controllers/Admin/DashboardController.php */
