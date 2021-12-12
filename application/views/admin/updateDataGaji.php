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
                <label for="kode_gaji" class="form-label">Kode Gaji</label>
                <input type="text" class="form-control" name="kode_gaji" id="kode_gaji">
            </div>
            <div class="mb-3">
                <label for="potongan" class="form-label">Potongan</label>
                <input type="text" class="form-control" name="potongan" id="potongan">
            </div>
            <button name="tambah" type="submit" class="btn btn-primary">Update Data</button>
        </form>
        </div>
    </div>
</div>