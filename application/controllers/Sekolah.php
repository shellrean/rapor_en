<?php

class Sekolah extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
		is_admin();
	}

	function index()
	{
		if($this->form_validation->run('config/sekolah') == false) {

	      $data['info'] = $this->db->get('tbl_sekolah_info')->row_array();
	      $this->template->load('template','admin/sekolah',$data);

	    } else {

	      # define the required data
	      $data = array(
			'NPSN'              => $this->input->post('npsn',TRUE),
			'NDS'               => $this->input->post('nds',TRUE),
			'nama_sekolah' 		=> $this->input->post('nama_sekolah', TRUE),
			'alamat_sekolah' 	=> $this->input->post('alamat_sekolah', TRUE),
			'kode_post'         => $this->input->post('kode_pos',TRUE),
			'email' 	        => $this->input->post('email_sekolah', TRUE),
			'telp'		        => $this->input->post('telp_sekolah', TRUE),
			'kelurahan'         => $this->input->post('kelurahan',TRUE),
			'kecamatan'         => $this->input->post('kecamatan',TRUE),
			'kota'              => $this->input->post('kota',TRUE),
			'provinsi'          => $this->input->post('provinsi',TRUE),
			'website'           => $this->input->post('website',TRUE),
			'email'             => $this->input->post('email',TRUE),
			'kepsek'			=> $this->input->post('kepsek',TRUE),
			'nip'				=> $this->input->post('nip',TRUE)
		  );

	      $this->db->update('tbl_sekolah_info',$data,['npsn' => $this->input->post('npsn',TRUE)]);

	      # finaly code
	      alertsuccess('message','Data sekolah berhasil diubah');
	      redirect('sekolah');

		}
	}
}