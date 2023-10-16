<?php

include 'pdo.php';

try {

    $idSelecionado = json_decode(file_get_contents('php://input'));
    $sql = "DELETE FROM lista.lista_telefonica WHERE id IN ($idSelecionado)";

    $pdo->exec($sql);
    echo "Record deleted successfully";
    echo json_encode($sql);
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }

  $pdo = null;