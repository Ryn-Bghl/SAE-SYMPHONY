<?php

require_once 'app/model/model.php';

function getProductByGenre($genre): array
{
    $db = getDatabaseConnexion();
    // TOCHANGE: nom => description
    $stmt = $db->prepare("SELECT * From biere where genre=:genre");
    $stmt->bindParam(':genre', $genre, PDO::PARAM_STR);
    $stmt->execute();
    $product = $stmt->fetch();
    return $product;
}
