<?php

class Dashboard extends CI_controller{
    public function index()
    {
        $data['title'] = "dashboard";
        $karyawan = $this->db->query("select * from karyawan");
        $admin = $this->db->query("select * from admin");
        $jabatan = $this->db->query("select * from jabatan");
        $absensi = $this->db->query("select * from absensi");
        $data['karyawan']=$karyawan->num_rows();
        $data['admin']=$admin->num_rows();
        $data['jabatan']=$jabatan->num_rows();
        $data['absensi']=$absensi->num_rows();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('templates_admin/topbar');
        $this->load->view('admin/dashboard',$data);
        $this->load->view('templates_admin/footer');
    }
}

?>