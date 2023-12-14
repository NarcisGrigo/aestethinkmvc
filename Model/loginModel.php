<?php

use Model\Database;

session_start();
require_once("../Model/Database.php");

if (isset($_POST['submit'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $dbConnexion = Database::dbConnexion();
    $request = $dbConnexion->prepare("SELECT * FROM user WHERE email  = ?");

    try {
        $request->execute(array($email));
        $userInfo = $request->fetch(PDO::FETCH_ASSOC);
        if (empty($userInfo)) {
            echo "user unknown";
        } else {
            if (password_verify($password, $userInfo['password'])) {
                if ($userInfo['role'] == "admin") {
                    $_SESSION['role'] = $userInfo['role'];
                    header("Location: admin/");
                } else {
                    $_SESSION['role'] = $userInfo['role'];
                    $_SESSION['id'] = $userInfo['id'];
                    header("Location: http://localhost/aesthetinkmvc/views/collections.php");
                }
            } else {
                echo " Oh, you're being clever !!";
            }
        }
    } catch (PDOException $e) {
        $e->getMessage();
    }
}

?>