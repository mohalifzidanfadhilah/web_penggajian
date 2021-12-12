<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanGaji extends CI_controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('penggajianModel', '',TRUE);
        $this->load->helper(array('form','url'));
    }

    public function index(){
        $data['title'] = "Laporan Gaji";
        $data['join'] = $this->penggajianModel->tiga();
        $this->load->view('admin/laporanGaji',$data);
    }
}