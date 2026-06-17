<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="card shadow">

    <div class="card-header bg-warning">
        Edit Karyawan
    </div>

    <div class="card-body">

        <form action="<?= base_url('karyawan/update/'.$karyawan['id']) ?>"
              method="post">

            <div class="mb-3">

                <label>Nama</label>

                <input type="text"
                       name="nama"
                       class="form-control"
                       value="<?= $karyawan['nama'] ?>">

            </div>

            <div class="mb-3">

                <label>Jabatan</label>

                <input type="text"
                       name="jabatan"
                       class="form-control"
                       value="<?= $karyawan['jabatan'] ?>">

            </div>

            <div class="mb-3">

                <label>Gaji</label>

                <input type="number"
                       name="gaji"
                       class="form-control"
                       value="<?= $karyawan['gaji'] ?>">

            </div>

            <button class="btn btn-success">
                Update
            </button>

            <a href="<?= base_url('karyawan') ?>"
               class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>

</div>

<?= $this->endSection() ?>