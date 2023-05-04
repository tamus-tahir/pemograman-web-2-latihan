<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<h1 class="text-center mb-3">Halaman Mahasiswa</h1>

<?php if (session()->getFlashdata('success')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('success'); ?>
    </div>
<?php endif ?>

<a class="btn btn-primary mb-3" href="/mahasiswa/new" role="button">Tambah</a>

<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Gender</th>
            <th scope="col">Alamat</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1 ?>
        <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['nim']; ?></td>
                <td><?= $row['gender'] == 1 ? 'Laki-Laki' : 'Perempuan'; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td>
                    <a href="/mahasiswa/edit/<?= $row['id_mahasiswa']; ?>" class="btn btn-warning">Ubah</a>
                    <a href="/mahasiswa/delete/<?= $row['id_mahasiswa']; ?>" class="btn btn-danger" onclick="alert('Anda yakin? ')">Hapus</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection(); ?>