<div class="container">
    
    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-3">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $judul ?></h1>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <?php if (validation_errors() ):?>
            <div class="alert alert-primary" role="alert">
                <?= validation_errors(); ?>
            </div>
        <?php endif; ?>
        <form action="" method="post">
            <div class="mb-3">
                <label for="nip" class="form-label">NIP</label>
                <input type="text" class="form-control" name="nip" id="nip">
            </div>
            <div class="mb-3">
                <label for="kode_jabatan" class="form-label">Kode Jabatan</label>
                <input type="text" class="form-control" name="kode_jabatan" id="kode_jabatan">
            </div>
            <div class="mb-3">
                <label for="kode_gaji" class="form-label">Kode Gaji</label>
                <input type="text" class="form-control" name="kode_gaji" id="kode_gaji">
            </div>
                <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama">
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin">
            </div>
            <div class="mb-3">
                <label for="agama" class="form-label">Agama</label>
                <input type="text" class="form-control" name="agama" id="agama">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat">
            </div>
                <div class="mb-3">
                <label for="no_telepon" class="form-label">No Telepon</label>
                <input type="text" class="form-control" name="no_telepon" id="no_telepon">
            </div>
            <button name="tambah" type="submit" class="btn btn-primary" style="margin-bottom: 100px">Update Data</button>
        </form>
        </div>
    </div>
</div>