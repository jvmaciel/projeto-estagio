<?php

$pdo = new PDO('pgsql:host=localhost;dbname=lista_telefonica', 'postgres', '123456');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
