<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

	public function inputdata($data,$table)
	{
		$this->db->insert($table,$data);
	}

	public function selectdata($norkm){
		$this->db->where('norkm',$norkm);		
		return $this->db->get('paslam');
	}	

	public function inputdata1($data1,$table)
	{
		$this->db->insert($table,$data1);
	}

	public function tampil_data(){
		return $this->db->get('dokter');
	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	public function input_databaru($data,$table){
		$this->db->insert($table,$data);
	}

}

/* End of file model.php */
/* Location: ./application/models/model.php */
?>