<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class tubes extends CI_Controller {

	public function __construct()
	 {
	 	parent::__construct();
	 	$this->load->model('model');
		$this->load->library('form_validation');
		// Pembantu Foreach get database
		$this->load->library('table');

	 }

	public function index($value='home')
	{
		$this->load->view('pages/'.$value);
	}
// ======================================================================================
	public function cek()
	{	
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$tempatlahir = $this->input->post('tempatlahir');
			$tanggallahir = $this->input->post('tanggallahir');
			$nohp = $this->input->post('nohp');

		$data = array(
				"nama" => $nama,
				"tempatlahir" => $tempatlahir,
				"tanggallahir" => $tanggallahir,
				"nohp" => $nohp
			);
		$cekk=$this->model->inputdata($data,'pasbar');
		 $this->form_validation->set_rules('nama','nama','required|min_length[2]|max_length[20]');
		 $this->form_validation->set_rules('tempatlahir','tempatlahir','required|max_length[20]');
		 $this->form_validation->set_rules('tanggallahir','tanggallahir','required|max_length[12]');
		 $this->form_validation->set_rules('nohp','nohp','trim|required|numeric', array('numeric'=>'HARUS ANGKA SEMUA'));

		 if($this->form_validation->run() == FALSE){
		 	$this->load->view('pages/baru');
		 }else{
			redirect('tubes/pilpol2');	
		}	
	}

	public function pilpol()
	{
		$this->load->view('pages/poli');
	}
// ======================================================================================
	public function cek1()
	{
	$id2 = $this->input->post('id2');
	$norkm = $this->input->post('norkm');
	$ceks = $this->model->selectdata($norkm)->num_rows();
		if($ceks > 0){

			$data_session = array(
				'norkm' => $norkm

				);
 
			$this->session->set_userdata($data_session);
 
			redirect('tubes/pilpol');

			}else{
			echo "Data Tidak Ditemukan";
		}
	}

	public function pilpol2()
	{
		$this->load->view('pages/poli2');
	}
// ======================================================================================
	public function cek2()
	 {	
	 		$id1 = $this->input->post('id1');
	 		$pilpol = $this->input->post('pilpol');
	 		$tglkun = $this->input->post('tglkun');
	 		$pembayaran = $this->input->post('pembayaran');
			
	 	$data1 = array(
	 			"pilpol" => $pilpol,
	 			"tglkun" => $tglkun,
	 			"pembayaran" => $pembayaran
	 		);
	 	$this->model->inputdata1($data1,'pempol');
	 	  $this->form_validation->set_rules('tglkun','tglkun','trim|required|date', array('date'=>$tglkun<1));

		  if($this->form_validation->run() == FALSE){
		  	$this->load->view('pages/baru');
		  }else{
			redirect('tubes/antri');
		}
	 }

	public function antri()
	 {
	 	$this->load->view('pages/antrian');
	 }

// ======================================================================================

	public function tampildokter(){
		$datdok['user'] = $this->model->tampil_data()->result();
		$this->load->view('pages/viewjadwaldokter',$datdok);
	}
	
// ======================================================================================

	public function hapus($id){
		$where = array('id' => $id);
		$this->model->hapus_data($where,'dokter');
		redirect('tubes/tampildokter');
	}	
// ======================================================================================

	public function edit($id){
		$where = array('id' => $id);
		$data['user'] = $this->model->edit_data($where,'dokter')->result();
		$this->load->view('pages/edit',$data);
	}

// ======================================================================================

	public function update(){
	$id = $this->input->post('id');
	$poliklinik = $this->input->post('poliklinik');
	$namadokter = $this->input->post('namadokter');
	$jadwal = $this->input->post('jadwal');
 
	$data = array(
		'poliklinik' => $poliklinik,
		'namadokter' => $namadokter,
		'jadwal' => $jadwal
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->model->update_data($where,$data,'dokter');
	redirect('tubes/tampildokter');
	}

// ======================================================================================

	public function tambah_aksi(){
		$id = $this->input->post('id');
		$poliklinik = $this->input->post('poliklinik');
		$namadokter = $this->input->post('namadokter');
		$jadwal = $this->input->post('jadwal');
 
		$data = array(
			'poliklinik' => $poliklinik,
			'namadokter' => $namadokter,
			'jadwal' => $jadwal
			);
		$this->model->input_databaru($data,'dokter');
		redirect('tubes/tampildokter');
	}

	public function tambah()
	{
		$this->load->view('pages/tambah');
	}

// ======================================================================================
			

}

/* End of file tubes.php */
/* Location: ./application/controllers/tubes.php */
?>