<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistem Karyawan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container">

    <div class="row justify-content-center align-items-center vh-100">

        <div class="col-md-5">

            <div class="card shadow border-0">

                <div class="card-header bg-primary text-white text-center py-3">
                    <h3 class="mb-0">Login Sistem</h3>
                </div>

                <div class="card-body p-4">

                    <?php if(session()->getFlashdata('error')) : ?>

                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?= session()->getFlashdata('error') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>

                    <?php endif; ?>

                    <form action="<?= base_url('cek-login') ?>" method="post">

                        <div class="mb-3">
                            <label class="form-label">Email</label>

                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   placeholder="Masukkan Email"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>

                            <input type="password"
                                   name="password"
                                   class="form-control"
                                   placeholder="Masukkan Password"
                                   required>
                        </div>

                        <div class="d-grid">
                            <button type="submit"
                                    class="btn btn-primary">
                                Login
                            </button>
                        </div>

                    </form>

                </div>

                <div class="card-footer text-center text-muted">
                    Sistem Informasi Karyawan © <?= date('Y') ?>
                </div>

            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>