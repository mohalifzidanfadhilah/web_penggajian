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
                <label for="id_absensi" class="form-label">Id Absensi</label>
                <input type="text" class="form-control" name="id_absensi" id="id_absensi">
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">NIP</label>
                <input type="text" class="form-control" name="nip" id="nip">
            </div>
            <div class="mb-3">
                <label for="jam_masuk" class="form-label">Jam Masuk</label>
                <input type="text" class="form-control" name="jam_masuk" id="jam_masuk">
            </div>
                <div class="mb-3">
                <label for="jam_keluar" class="form-label">Jam Keluar</label>
                <input type="text" class="form-control" name="jam_keluar" id="jam_keluar">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control" name="status" id="status">
            </div>
                <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <input type="text" class="form-control" name="keterangan" id="keterangan">
            </div>
            <button name="tambah" type="submit" class="btn btn-primary" style="margin-bottom: 100px">Update Data</button>
        </form>
        </div>
    </div>
</div>