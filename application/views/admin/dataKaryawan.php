<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-3">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $judul ?></h1>
    </div>

    
    <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/dataKaryawan/tambah') ?>"><i class="fas fa-plus"></i>Tambah Data</a>
    <?php echo $this->session->Flashdata('pesan') ?>
    <table class="table table-bordered table-striped mt-2">
        <tr>
            <th class="text-center">NIP</th>
            <th class="text-center">Kode Jabatan</th>
            <th class="text-center">Kode Gaji</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Jenis Kelamin</th>
            <th class="text-center">Agama</th>
            <th class="text-center">Alamat</th>
            <th class="text-center">No Telepon</th>
            <th class="text-center">Action</th>
        </tr>

        <tr>
            <?php foreach ($karyawan as $j): ?>
            <td><?= $j['nip'];?></td>
            <td><?= $j['kode_jabatan'];?></td>
            <td><?= $j['kode_gaji'];?></td>
            <td><?= $j['nama'];?></td>
            <td><?= $j['jenis_kelamin'];?></td>
            <td><?= $j['agama'];?></td>
            <td><?= $j['alamat'];?></td>
            <td><?= $j['no_telepon'];?></td>

            <td>
                <center>
                    <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataKaryawan/update/'. $j['nip']) ?>"><i class="fas fa-edit"></i></a>
                    <a onclick="return confirm('Yakin Hapus')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/dataKaryawan/hapus/'. $j['nip']); ?>"><i class="fas fa-trash"></i></a>
                </center>
            </tr>
            <?php endforeach ?>
        </tr>
    </table>                



</div>