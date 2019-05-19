<?php
    defined('BASEPATH') OR exit ('No direct script acces allowwed');

    class Front extends CI_Controller{
        

        public function __construct(){
            parent::__construct();
            $this->load->model('M_sensor');
        }

        public function index(){
            $this->load->view('front/home');
        } 

        public function getData(){
            $data=$this->M_sensor->get_data();
            echo json_encode($data);
        }

        public function get_where(){
            $tanggal=$this->input->get('tanggal');
            $data=$this->M_sensor->get_where($tanggal);
            echo json_encode($data);
        }
    }
?>