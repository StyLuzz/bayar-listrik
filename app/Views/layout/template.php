<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap-zephyr.min.css') ?>">

    <!-- My Css -->
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">

    <!-- title -->
    <title><?= $title; ?></title>
</head>

<body>
    <!-- import navbar from layout/navbar.php -->
    <?= $this->include('layout/navbar'); ?>

    <!-- import content from pages -->
    <?= $this->renderSection('content'); ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <!-- My JS -->
    <script src="../js/script.js"></script>
</body>

<!-- Footer -->
<?= $this->include('layout/footer'); ?>

</html>