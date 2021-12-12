<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-3">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $judul ?></h1>
    </div>

    
    <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/dataJabatan/tambah') ?>"><i class="fas fa-plus"></i>Tambah Data</a>
    <?php echo $this->session->Flashdata('pesan') ?>
    <table class="table table-bordered table-striped mt-2">
        <tr>
            <th class="text-center">Kode Jabatan</th>
            <th class="text-center">Nama Jabatan</th>
            <th class="text-center">Gaji Pokok</th>
            <th class="text-center">Tunjangan</th>
            <th class="text-center">Action</th>
        </tr>

        <tr>
            <?php foreach ($jabatan as $j): ?>
            <td><?= $j['kode_jabatan'];?></td>
            <td><?= $j['nama_jabatan'];?></td>
            <td>Rp. <?= $j['gaji_pokok'];?></td>
            <td>Rp. <?= $j['Tunjangan'];?></td>

            <td>
                <center>
                    <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataJabatan/update/'. $j['kode_jabatan']) ?>"><i class="fas fa-edit"></i></a>
                    <a onclick="return confirm('Yakin Hapus')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/dataJabatan/hapus/'. $j['kode_jabatan']); ?>"><i class="fas fa-trash"></i></a>
                </center>
            </tr>
            <?php endforeach ?>
        </tr>
    </table>                



</div>