<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataGaji extends CI_controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('penggajianModel');
        $this->load->library('form_validation');
    }

    function index()
    {
        $data['judul']="Data Gaji";
        $data['gaji']=$this->penggajianModel->getAllGaji();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dataGaji',$data);
        $this->load->view('templates_admin/footer');
    }

    function tambah()
    {
        $data['judul']="Tambah Data Gaji";
        $this->form_validation->set_rules('kode_gaji', 'kode Gaji');
        $this->form_validation->set_rules('potongan', 'Potongan', 'required');
        if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('templates_admin/header',$data);
                $this->load->view('templates_admin/sidebar');
                $this->load->view('admin/tambahDataGaji');
                $this->load->view('templates_admin/footer');
            }
            else
            {
                $this->penggajianModel->tambahDataGaji();
                $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data berhasil ditambah!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('admin/dataGaji');
            }
    }

    public function hapus($id){
    $this->penggajianModel->hapusDataGaji($id);
    $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data berhasil dihapus!</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>');
    redirect('admin/dataGaji');
    }

    public function update($id){
        $data['judul']="Update Data Gaji";
        $data['gaji']=$this->penggajianModel->getGajiById($id);
        $this->form_validation->set_rules('Kode_gaji', 'kode Gaji');
        $this->form_validation->set_rules('potongan', 'Potongan', 'required');
        if ($this->form_validation->run() == FALSE)

            {
                $this->load->view('templates_admin/header',$data);
                $this->load->view('templates_admin/sidebar');
                $this->load->view('admin/updateDataGaji',$data);
                $this->load->view('templates_admin/footer');
            }
            else
            {
                $this->penggajianModel->updateDataGaji();
                $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data berhasil diupdate!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('admin/dataGaji');
            }
    }
    
}