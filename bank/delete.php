<?php
require __DIR__.'/bootstrap.php';
//POST
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_GET['id'] ?? 0;
    $id = (int) $id;
    deleteUser($id);
    header('Location: '.URL);
    die;
}

header('Location: '.URL);
die;