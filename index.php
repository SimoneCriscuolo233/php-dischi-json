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
    <div class="card mb-5">
    <div class="card-body">
        <h5 class="card-title">Add new disk</h5>

        <form action="server.php" method="POST" class="row g-3">
            <div class="col-md-6">
                <input class="form-control" name="title" placeholder="Title">
            </div>

            <div class="col-md-6">
                <input class="form-control" name="artist" placeholder="Artist">
            </div>

            <div class="col-md-6">
                <input class="form-control" name="cover" placeholder="Cover URL">
            </div>

            <div class="col-md-3">
                <input class="form-control" type="number" name="year" placeholder="Year">
            </div>

            <div class="col-md-3">
                <input class="form-control" name="genre" placeholder="Genre">
            </div>

            <div class="col-12">
                <button class="btn btn-primary">Add Disk</button>
            </div>
        </form>
    </div>
</div>
    <!-- {
        "title": "The Dark Side of the Moon",
        "artist": "Pink Floyd",
        "cover": "https:\/\/picsum.photos\/400\/300?random=3",
        "year": "1973",
        "genre": "Progressive Rock"
    } -->

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
