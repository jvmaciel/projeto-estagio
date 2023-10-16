<?php

include 'pdo.php';

$contato = json_decode(file_get_contents('php://input'));

$stmt = $pdo->prepare("INSERT INTO lista.lista_telefonica (nome, telefone, operadora) VALUES (:nome, :telefone, :operadora) RETURNING *");
$stmt->bindValue(':nome', $contato->nome);
$stmt->bindValue(':telefone', $contato->telefone);
$stmt->bindValue(':operadora', $contato->operadora);


$stmt->execute();

$contato = $stmt->fetch(PDO::FETCH_COLUMN);

echo json_encode($contato);