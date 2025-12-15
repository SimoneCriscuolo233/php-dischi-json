<?php
require_once './functions.php';

$disks = readDisks();

$newDisk = [
    'title'  => $_POST['title'],
    'artist' => $_POST['artist'],
    'cover'  => $_POST['cover'],
    'year'   => $_POST['year'],
    'genre'  => $_POST['genre']
];

$disks[] = $newDisk;

saveDisks($disks);

header('Location: index.php');
