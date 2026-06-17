<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Data Karyawan' ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('karyawan') ?>">
            <img src="<?= base_url('assets/img/logo2.png') ?>" alt="Logo">SIMPEG 
        </a>
    </div>
</nav>


<div class="container mt-4">

    <?= $this->renderSection('content') ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
<a href="<?= base_url('logout') ?>" class="btn btn-danger">
    Logout
</a>

</body>
</html>