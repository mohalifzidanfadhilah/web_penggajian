<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-3">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    
    <table class="test" border="1">
        <thead>
            <th class="text-center">No</th>
            <th class="text-center">NIP</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Jenis Kelamin</th>
            <th class="text-center">Nama Jabatan</th>
            <th class="text-center">Gaji Pokok</th>
            <th class="text-center">Tunjangan</th>
            <th class="text-center">Potongan</th>
        </thead>
        
        <?php $no=1; foreach ($join as $row) : ?>
        
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $row->nip ;?></td>
            <td><?php echo $row->nama ;?></td>
            <td><?php echo $row->jenis_kelamin;?></td>
            <td><?php echo $row->nama_jabatan;?></td>
            <td>Rp. <?php echo $row->gaji_pokok;?></td>
            <td>Rp. <?php echo $row->Tunjangan;?></td>
            <td>Rp. <?php echo $row->potongan;?></td>

        </tr>

        <?php endforeach ?>
    
    </table>                



</div>