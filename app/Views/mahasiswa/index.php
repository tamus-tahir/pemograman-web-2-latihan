<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<h1 class="text-center mb-3">Halaman Mahasiswa</h1>

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
                <td></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection(); ?>