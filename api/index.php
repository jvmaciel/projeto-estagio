<?php

include 'pdo.php';

$stmt = $pdo->prepare('SELECT * FROM lista.lista_telefonica');
$stmt->execute();
$row = $stmt->fetchAll();


echo json_encode($row);
