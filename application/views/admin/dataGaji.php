<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-3">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $judul ?></h1>
    </div>

    
    <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/dataGaji/tambah') ?>"><i class="fas fa-plus"></i>Tambah Data</a>
    <?php echo $this->session->Flashdata('pesan') ?>
    <table class="table table-bordered table-striped mt-2">
        <tr>
            <th class="text-center">Kode Gaji</th>
            <th class="text-center">Potongan</th>
            <th class="text-center">Action</th>
        </tr>

        <tr>
            <?php foreach ($gaji as $j): ?>
            <td><?= $j['kode_gaji'];?></td>
            <td><?= $j['potongan'];?></td>

            <td>
                <center>
                    <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataGaji/update/'. $j['kode_gaji']) ?>"><i class="fas fa-edit"></i></a>
                    <a onclick="return confirm('Yakin Hapus')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/dataGaji/hapus/'. $j['kode_gaji']); ?>"><i class="fas fa-trash"></i></a>
                </center>
            </tr>
            <?php endforeach ?>
        </tr>
    </table>                



</div>