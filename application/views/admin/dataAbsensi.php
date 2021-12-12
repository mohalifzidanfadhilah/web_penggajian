<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-3">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $judul ?></h1>
    </div>

    
    <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/dataAbsensi/tambah') ?>"><i class="fas fa-plus"></i>Tambah Data</a>
    <?php echo $this->session->Flashdata('pesan') ?>
    <table class="table table-bordered table-striped mt-2">
        <tr>
            <th class="text-center">Id Absensi</th>
            <th class="text-center">NIP</th>
            <th class="text-center">Jam Masuk</th>
            <th class="text-center">Jam Keluar</th>
            <th class="text-center">Status</th>
            <th class="text-center">Keterangan</th>
            <th class="text-center">Action</th>
        </tr>

        <tr>
            <?php foreach ($absensi as $j): ?>
            <td><?= $j['id_absensi'];?></td>
            <td><?= $j['nip'];?></td>
            <td><?= $j['jam_masuk'];?></td>
            <td><?= $j['jam_keluar'];?></td>
            <td><?= $j['status'];?></td>
            <td><?= $j['keterangan'];?></td>

            <td>
                <center>
                    <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataAbsensi/update/'. $j['id_absensi']) ?>"><i class="fas fa-edit"></i></a>
                    <a onclick="return confirm('Yakin Hapus')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/dataAbsensi/hapus/'. $j['id_absensi']); ?>"><i class="fas fa-trash"></i></a>
                </center>
            </tr>
            <?php endforeach ?>
        </tr>
    </table>                



</div>