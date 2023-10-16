<?php

$message = 'Hello World PHP!!!';

if (!empty($_GET['db'])) {
    $pdo = new PDO('pgsql:host=localhost;dbname=hello_world', 'postgres', '123456');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare('SELECT * FROM hello_world');
    $stmt->execute();
    $row = $stmt->fetch();

    $message = $row->message;
}

echo json_encode(['message' => $message]);
