<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<h1 class="text-center mb-3">Halaman Ubah Mahasiswa</h1>

<form class="row g-3" method="post" action="/mahasiswa/update/<?= $mahasiswa['id_mahasiswa']; ?>">

    <div class="col-md-4">
        <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
        <input type="text" class="form-control <?= validation_show_error('nama') ? 'is-invalid' : ''; ?>" id="nama" name="nama" required value="<?= $mahasiswa['nama']; ?>">
        <div class="invalid-feedback">
            <?= validation_show_error('nama'); ?>
        </div>
    </div>
    <div class="col-md-4">
        <label for="nim" class="form-label">NIM <span class="text-danger">*</span></label>
        <input type="text" class="form-control <?= validation_show_error('nim') ? 'is-invalid' : ''; ?>" id="nim" name="nim" required value="<?= $mahasiswa['nim']; ?>">
        <div class="invalid-feedback">
            <?= validation_show_error('nim'); ?>
        </div>
    </div>
    <div class="col-md-4">
        <label for="gender" class="form-label">Jenis Kelamin <span class="text-danger">*</span></label>
        <select class="form-select <?= validation_show_error('gender') ? 'is-invalid' : ''; ?>" id="gender" name="gender" required>
            <option value="">-- Pilih Jenis Kelamin --</option>
            <option value="1" <?= $mahasiswa['gender'] == 1 ? 'selected' : ''; ?>>Laki-Laki</option>
            <option value="0" <?= $mahasiswa['gender'] == 0 ? 'selected' : ''; ?>>Perempuan</option>
        </select>
        <div class="invalid-feedback">
            <?= validation_show_error('gender'); ?>
        </div>
    </div>
    <div class="col-12">
        <label for="alamat" class="form-label">Alamat <span class="text-danger">*</span></label>
        <textarea class="form-control <?= validation_show_error('alamat') ? 'is-invalid' : ''; ?>" id="alamat" name="alamat" required cols="30" rows="2"><?= $mahasiswa['alamat']; ?></textarea>
        <div class="invalid-feedback">
            <?= validation_show_error('alamat'); ?>
        </div>
    </div>

    <div class="text-end">
        <a href="/mahasiswa" class="btn btn-danger">Cancel</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
<?= $this->endSection(); ?>