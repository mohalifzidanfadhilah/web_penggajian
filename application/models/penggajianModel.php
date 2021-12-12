<?php

class penggajianModel extends CI_model{
    public function getAllJabatan ()
    {
        return $this->db->get('jabatan')->result_array();
    }

    public function getJabatan($limit,$start){
        return $this->db->get('jabatan',$limit,$start)->result_array();
    }
    public function countAllJabatan(){
        return $this->db->get('jabatan')->num_rows();
    }
    public function tambahDataJabatan(){
        $data = array(
            'kode_jabatan' => $this->input->post('kode_jabatan',true),
            'nama_jabatan' => $this->input->post('nama_jabatan',true),
            'gaji_pokok' => $this->input->post('gaji_pokok',true),
            'Tunjangan' => $this->input->post('Tunjangan',true),
        );
        $this->db->insert('jabatan', $data);
    }

    public function hapusDataJabatan($id){
        $this->db->where('kode_jabatan', $id);
        $this->db->delete('jabatan');
    } 

    public function getJabatanById($id){
        return $this->db->get_where('jabatan',['kode_jabatan'=>$id]) ->row_array();
    }


    public function updateDataJabatan(){
        $data = array(
            'kode_jabatan' => $this->input->post('kode_jabatan',true),
            'nama_jabatan' => $this->input->post('nama_jabatan',true),
            'gaji_pokok' => $this->input->post('gaji_pokok',true),
            'Tunjangan' => $this->input->post('Tunjangan',true),

        );

        $this->db->where('kode_jabatan', $this->input->post('kode_jabatan'));
        $this->db->update('jabatan', $data);
    }
###############################

public function getAllGaji ()
{
    return $this->db->get('gaji')->result_array();
}

public function getGaji($limit,$start){
    return $this->db->get('gaji',$limit,$start)->result_array();
}
public function countAllGaji(){
    return $this->db->get('gaji')->num_rows();
}
public function tambahDataGaji(){
    $data = array(
        'kode_gaji' => $this->input->post('kode_gaji',true),
        'potongan' => $this->input->post('potongan',true),
    );
    $this->db->insert('gaji', $data);
}

public function hapusDataGaji($id){
    $this->db->where('kode_gaji', $id);
    $this->db->delete('gaji');
} 

public function getGajiById($id){
    return $this->db->get_where('gaji',['kode_gaji'=>$id]) ->row_array();
}


public function updateDataGaji(){
    $data = array(
        'kode_gaji' => $this->input->post('kode_gaji',true),
        'potongan' => $this->input->post('potongan',true),

    );

    $this->db->where('kode_gaji', $this->input->post('kode_gaji'));
    $this->db->update('gaji', $data);
}
###############################
    public function getAllKaryawan()
    {
        return $this->db->get('karyawan')->result_array();
    }

    public function getKaryawan($limit,$start){
        return $this->db->get('karyawan',$limit,$start)->result_array();
    }
    public function countAllKaryawan(){
        return $this->db->get('karyawan')->num_rows();
    }
    public function tambahDataKaryawan(){
        $data = array(
            'nip' => $this->input->post('nip',true),
            'kode_jabatan' => $this->input->post('kode_jabatan',true),
            'kode_gaji' => $this->input->post('kode_gaji',true),
            'nama' => $this->input->post('nama',true),
            'jenis_kelamin' => $this->input->post('jenis_kelamin',true),
            'agama' => $this->input->post('agama',true),
            'alamat' => $this->input->post('alamat',true),
            'no_telepon' => $this->input->post('no_telepon',true),
        );
        $this->db->insert('karyawan', $data);
    }

    public function hapusDataKaryawan($id){
        $this->db->where('nip', $id);
        $this->db->delete('karyawan');
    } 

    public function getKaryawanById($id){
        return $this->db->get_where('karyawan',['nip'=>$id]) ->row_array();
    }


    public function updateDataKaryawan(){
        $data = array(
            'nip' => $this->input->post('nip',true),
            'kode_jabatan' => $this->input->post('kode_jabatan',true),
            'kode_gaji' => $this->input->post('kode_gaji',true),
            'nama' => $this->input->post('nama',true),
            'jenis_kelamin' => $this->input->post('jenis_kelamin',true),
            'agama' => $this->input->post('agama',true),
            'alamat' => $this->input->post('alamat',true),
            'no_telepon' => $this->input->post('no_telepon',true),

        );

        $this->db->where('nip', $this->input->post('nip'));
        $this->db->update('karyawan', $data);
    }
##################################
    public function getAllAbsensi ()
    {
        return $this->db->get('absensi')->result_array();
    }

    public function getAbsensi($limit,$start){
        return $this->db->get('absensi',$limit,$start)->result_array();
    }
    public function countAllAbsensi(){
        return $this->db->get('absensi')->num_rows();
    }
    public function tambahDataAbsensi(){
        $data = array(
            'id_absensi' => $this->input->post('id_absensi',true),
            'nip' => $this->input->post('nip',true),
            'jam_masuk' => $this->input->post('jam_masuk',true),
            'jam_keluar' => $this->input->post('jam_keluar',true),
            'status' => $this->input->post('status',true),
            'keterangan' => $this->input->post('keterangan',true),
        );
        $this->db->insert('absensi', $data);
    }

    public function hapusDataAbensi($id){
        $this->db->where('id_absensi', $id);
        $this->db->delete('absensi');
    } 

    public function getAbsensiById($id){
        return $this->db->get_where('absensi',['id_absensi'=>$id]) ->row_array();
    }


    public function updateDataAbsensi(){
        $data = array(
            'id_absensi' => $this->input->post('id_absensi',true),
            'nip' => $this->input->post('nip',true),
            'jam_masuk' => $this->input->post('jam_masuk',true),
            'jam_keluar' => $this->input->post('jam_keluar',true),
            'status' => $this->input->post('status',true),
            'keterangan' => $this->input->post('keterangan',true),        
        );

        $this->db->where('id_absensi', $this->input->post('id_absensi'));
        $this->db->update('absensi', $data);
    }
########################################
    public function tiga(){
        $this->db->select('*');
        $this->db->from('karyawan');
        $this->db->join('gaji','gaji.kode_gaji=karyawan.kode_gaji');
        $this->db->join('jabatan','jabatan.kode_jabatan=karyawan.kode_jabatan');
        return $this->db->get('');
            
    }
}