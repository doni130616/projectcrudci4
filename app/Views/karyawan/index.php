<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="card shadow">

    <div class="card-header bg-success text-white">
        <h4>Data Karyawan</h4>
    </div>

    <div class="card-body">

        <a href="<?= base_url('karyawan/create') ?>"
           class="btn btn-primary mb-3">
            + Tambah Data
        </a>

        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Gaji</th>
                    <th width="180">Aksi</th>
                </tr>
            </thead>

            <tbody>

            <?php $no=1; ?>

            <?php foreach($karyawan as $row): ?>

            <tr>

                <td><?= $no++ ?></td>

                <td><?= $row['nama'] ?></td>

                <td><?= $row['jabatan'] ?></td>

                <td>
                    Rp <?= number_format($row['gaji'],0,',','.') ?>
                </td>

                <td>

                    <a href="<?= base_url('karyawan/edit/'.$row['id']) ?>"
                       class="btn btn-warning btn-sm">
                       Edit
                    </a>

                    <a href="<?= base_url('karyawan/delete/'.$row['id']) ?>"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin hapus data?')">
                       Hapus
                    </a>

                </td>

            </tr>

            <?php endforeach ?>

            </tbody>

        </table>

    </div>

</div>

<?= $this->endSection() ?>