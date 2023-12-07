<?php

use Model\Database;
session_start();
require_once("../Model/Database.php");

if (isset($_POST["submit"])) {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    $role = htmlspecialchars($_POST["role"]);

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $dbConnexion = Database::dbConnexion();
    $request = $dbConnexion->prepare("INSERT INTO user (name, email, password, role) VALUES (?, ?, ?, ?)");
    try {
        $request->execute(array($name, $email, $passwordHash, $role));
        header("Location: http://localhost/aestethinkmvc/views/login.html.php");
        exit;
    } catch (PDOException $e) {
        error_log("SQL Error: " . $e->getMessage());
        echo "An error occurred. Please try again later.";
    }

}