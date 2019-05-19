<?php
	defined('BASEPATH') OR exit('No direct script acces Allowed');

	class Sensor_gas extends CI_Controller{

		public function __construct(){
			parent::__construct();
			if(empty($this->session->userdata('email'))){
				redirect('login','refresh');
			}

			$this->load->model('M_gas');
		}

		public function index(){
			$data['page']='sensor_gas/blank';
			$this->load->view('home',$data,FALSE);
		}
		public function grafik(){
			$data=$this->M_gas->grafik();
			$datas=array();
			$waktu=array();
			foreach ($data as $key) {
				# code...
				array_push($waktu, date('D,w F Y H:m:s',strtotime($key['waktu'])));
				array_push($datas,$key['sensor_gas']);
			}
			$data['data']=json_encode($datas,JSON_NUMERIC_CHECK);
			$data['waktu']=json_encode($waktu);
			$data['title']=json_encode('Grafik Sensor MQ2');
			$data['page']='sensor_gas/grafik';
			$this->load->view('home',$data,FALSE);
		}
		public function grafik2(){
			
			$data['page']='sensor_gas/grafik2';
			$this->load->view('home',$data,FALSE);
		}
		public function tabel(){
			$data['isi']=$this->M_gas->get_data();
			$data['page']='sensor_gas/tabel'; 
			$this->load->view('home',$data,FALSE);	
		}

		function get_data_sensor(){
			$data_tabel=$this->M_gas->get_data();
			echo json_encode($data_tabel);
		}

	}
?>
