<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataJabatan extends CI_controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('penggajianModel');
        $this->load->library('form_validation');
    }

    function index()
    {
        $data['judul']="Data Jabatan";
        $data['jabatan']=$this->penggajianModel->getAllJabatan();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dataJabatan',$data);
        $this->load->view('templates_admin/footer');
    }

    function tambah()
    {
        $data['judul']="Tambah Data Jabatan";
        $this->form_validation->set_rules('kode_jabatan', 'kode Jabatan');
        $this->form_validation->set_rules('nama_jabatan', 'Nama Jabatan', 'required');
        $this->form_validation->set_rules('gaji_pokok', 'Gaji Pokok', 'required');
        $this->form_validation->set_rules('Tunjangan', 'Tunjangan', 'required');
        if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('templates_admin/header',$data);
                $this->load->view('templates_admin/sidebar');
                $this->load->view('admin/tambahDataJabatan');
                $this->load->view('templates_admin/footer');
            }
            else
            {
                $this->penggajianModel->tambahDataJabatan();
                $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data berhasil ditambah!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('admin/dataJabatan');
            }
    }

    public function hapus($id){
    $this->penggajianModel->hapusDataJabatan($id);
    $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data berhasil dihapus!</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>');
    redirect('admin/dataJabatan');
    }

    public function update($id){
        $data['judul']="Update Data Jabatan";
        $data['jabatan']=$this->penggajianModel->getJabatanById($id);
        $this->form_validation->set_rules('Kode_Jabatan', 'kode Jabatan');
        $this->form_validation->set_rules('nama_jabatan', 'Nama Jabatan', 'required');
        $this->form_validation->set_rules('gaji_pokok', 'Gaji Pokok', 'required|numeric');
        $this->form_validation->set_rules('Tunjangan', 'Tunjangan', 'required|numeric');

        if ($this->form_validation->run() == FALSE)

            {
                $this->load->view('templates_admin/header',$data);
                $this->load->view('templates_admin/sidebar');
                $this->load->view('admin/updateDataJabatan',$data);
                $this->load->view('templates_admin/footer');
            }
            else
            {
                $this->penggajianModel->updateDataJabatan();
                $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data berhasil diupdate!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('admin/dataJabatan');
            }
    }
    
}