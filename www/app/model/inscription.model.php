<?php

require_once 'app/model/model.php';

function getUserByEmail($email): array
{
    $db = getDatabaseConnexion();
    $stmt = $db->prepare("SELECT * From utilisateur where email=:email");
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch();
}

function createUser($email, $password, $nom, $prenom)
{
    $db = getDatabaseConnexion();
    $stmt = $db->prepare("INSERT INTO utilisateur (email, mdp, nom, prenom) VALUES (:email, :mdp, :nom, :prenom)");
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':mdp', $password, PDO::PARAM_STR);
    $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
    $stmt->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $stmt->execute();
}
