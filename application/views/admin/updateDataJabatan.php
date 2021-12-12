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
                <label for="kode_jabatan" class="form-label">Kode Jabatan</label>
                <input type="text" class="form-control" name="kode_jabatan" id="kode_jabatan">
            </div>
            <div class="mb-3">
                <label for="nama_jabatan" class="form-label">Nama Jabatan</label>
                <input type="text" class="form-control" name="nama_jabatan" id="nama_jabatan">
            </div>
            <div class="mb-3">
                <label for="gaji_pokok" class="form-label">Gaji Pokok</label>
                <input type="text" class="form-control" name="gaji_pokok" id="gaji_pokok">
            </div>
                <div class="mb-3">
                <label for="Tunjangan" class="form-label">Tunjangan</label>
                <input type="text" class="form-control" name="Tunjangan" id="Tunjangan">
            </div>
            <button name="tambah" type="submit" class="btn btn-primary">Update Data</button>
        </form>
        </div>
    </div>
</div>