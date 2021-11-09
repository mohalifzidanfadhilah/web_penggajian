<?php

class DataKaryawaan extends CI_controller{
    public function index()
    {
        $data = $this->db->query("select * from karyawan")->result();
        var_dump($data);
    }
}

?>