<?php
$pdo = new PDO('mysql:dbname=star_repertory;host=127.0.0.1', 'root', 'root', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
]);