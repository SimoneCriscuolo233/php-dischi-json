<?php
require_once './functions.php';

$disks = readDisks();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Disks</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    >
</head>
<body class="bg-light">

<div class="container py-5">

    <h1 class="text-center mb-5">Music Disks</h1>

    <div class="row g-4">
        <?php foreach ($disks as $disk): ?>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="<?= $disk['cover'] ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?= $disk['title'] ?></h5>
                        <p><strong>Artist:</strong> <?= $disk['artist'] ?></p>
                        <p><strong>Year:</strong> <?= $disk['year'] ?></p>
                        <p><strong>Genre:</strong> <?= $disk['genre'] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
