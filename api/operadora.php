<?php

$pdo = new PDO('pgsql:host=localhost;dbname=lista_telefonica', 'postgres', '123456');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $pdo->prepare('SELECT * FROM lista.operadoras');
$stmt->execute();
$row = $stmt->fetchAll();


echo json_encode($row);