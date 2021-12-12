<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataAbsensi extends CI_controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('penggajianModel');
        $this->load->library('form_validation');
    }

    function index()
    {
        $data['judul']="Data Absensi";
        $data['absensi']=$this->penggajianModel->getAllAbsensi();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dataAbsensi',$data);
        $this->load->view('templates_admin/footer');
    }

    function tambah()
    {
        $data['judul']="Tambah Data Absensi";
        $this->form_validation->set_rules('id_absensi', 'Id Absensi');
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('jam_masuk', 'Jam Masuk', 'required');
        $this->form_validation->set_rules('jam_keluar', 'jam_keluar', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('templates_admin/header',$data);
                $this->load->view('templates_admin/sidebar');
                $this->load->view('admin/tambahDataAbsensi');
                $this->load->view('templates_admin/footer');
            }
            else
            {
                $this->penggajianModel->tambahDataAbsensi();
                $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data berhasil ditambah!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('admin/dataAbsensi');
            }
    }

    public function hapus($id){
    $this->penggajianModel->hapusDataAbsensi($id);
    $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data berhasil dihapus!</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>');
    redirect('admin/dataAbsensi');
    }

    public function update($id){
        $data['judul']="Update Data Absensi";
        $data['absensi']=$this->penggajianModel->getAbsensiById($id);
        $this->form_validation->set_rules('id_absensi', 'Id Absensi');
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('jam_masuk', 'Jam Masuk', 'required');
        $this->form_validation->set_rules('jam_keluar', 'jam_keluar', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run() == FALSE)

            {
                $this->load->view('templates_admin/header',$data);
                $this->load->view('templates_admin/sidebar');
                $this->load->view('admin/updateDataAbsensi',$data);
                $this->load->view('templates_admin/footer');
            }
            else
            {
                $this->penggajianModel->updateDataAbsensi();
                $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data berhasil diupdate!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('admin/dataAbsensi');
            }
    }
    
}