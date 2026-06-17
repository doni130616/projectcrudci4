<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="card shadow">

    <div class="card-header bg-primary text-white">
        Tambah Karyawan
    </div>

    <div class="card-body">

        <form action="<?= base_url('karyawan/store') ?>"
              method="post">

            <div class="mb-3">

                <label>Nama</label>

                <input type="text"
                       name="nama"
                       class="form-control"
                       required>

            </div>

            <div class="mb-3">

                <label>Jabatan</label>

                <input type="text"
                       name="jabatan"
                       class="form-control"
                       required>

            </div>

            <div class="mb-3">

                <label>Gaji</label>

                <input type="number"
                       name="gaji"
                       class="form-control"
                       required>

            </div>

            <button class="btn btn-success">
                Simpan
            </button>

            <a href="<?= base_url('karyawan') ?>"
               class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>

</div>

<?= $this->endSection() ?>