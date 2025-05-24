<?php

require_once 'app/model/model.php';

function getBiereDesc($genre): array
{
    $db = getDatabaseConnexion();
    // TOCHANGE: nom => description
    $stmt = $db->prepare("SELECT description From biere where genre=:genre ");
    $stmt->bindParam(':genre', $genre, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetchAll();
}


function getAllBeer(): array
{
    $db = getDatabaseConnexion();
    // TOCHANGE: nom => description
    $stmt = $db->prepare("SELECT * From biere ");
    $stmt->execute();
    return $stmt->fetchAll();
}