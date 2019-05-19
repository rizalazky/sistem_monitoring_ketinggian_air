<?php
class M_sensor extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	public function get_data(){
		$query=$this->db->get('sensor_gas');
		return $query->result();
	}
	public function grafik(){
		$query=$this->db->get('sensor_gas');
		return $query->result_array();
	}

	public function get_where($tanggal){
		$this->db->like('waktu',$tanggal);
		$query=$this->db->get('sensor_gas');
		return $query->result();
	}
}
?>