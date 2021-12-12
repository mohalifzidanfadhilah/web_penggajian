<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataKaryawan extends CI_controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('penggajianModel');
        $this->load->library('form_validation');
    }

    function index()
    {
        $data['judul']="Data Karyawan";
        $data['karyawan']=$this->penggajianModel->getAllKaryawan();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dataKaryawan',$data);
        $this->load->view('templates_admin/footer');
    }

    function tambah()
    {
        $data['judul']="Tambah Data Karyawan";
        $this->form_validation->set_rules('nip', 'NIP');
        $this->form_validation->set_rules('kode_jabatan', 'Kode Jabatan');
        $this->form_validation->set_rules('kode_gaji', 'Kode Gaji', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'required');
        $this->form_validation->set_rules('agama', 'agama', 'required');
        $this->form_validation->set_rules('alamat', 'alamat');
        $this->form_validation->set_rules('no_telepon', 'No Telepon', 'required');
        if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('templates_admin/header',$data);
                $this->load->view('templates_admin/sidebar');
                $this->load->view('admin/tambahDataKaryawan');
                $this->load->view('templates_admin/footer');
            }
            else
            {
                $this->penggajianModel->tambahDataKaryawan();
                $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data berhasil ditambah!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('admin/dataKaryawan');
            }
    }

    public function hapus($id){
    $this->penggajianModel->hapusDataKaryawan($id);
    $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data berhasil dihapus!</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>');
    redirect('admin/dataKaryawan');
    }

    public function update($id){
        $data['judul']="Update Data Karyawan";
        $data['karyawan']=$this->penggajianModel->getkaryawanById($id);
        $this->form_validation->set_rules('nip', 'NIP');
        $this->form_validation->set_rules('kode_jabatan', 'Kode Jabatan',);
        $this->form_validation->set_rules('kode_gaji', 'Kode Gaji', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis Kelamin', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('alamat', 'alamat');
        $this->form_validation->set_rules('no_telepon', 'No Telepon', 'required');
        if ($this->form_validation->run() == FALSE)

            {
                $this->load->view('templates_admin/header',$data);
                $this->load->view('templates_admin/sidebar');
                $this->load->view('admin/updateDataKaryawan',$data);
                $this->load->view('templates_admin/footer');
            }
            else
            {
                $this->penggajianModel->updateDataKaryawan();
                $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data berhasil diupdate!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('admin/dataKaryawan');
            }
    }
    
}