<?php

namespace Model;

// function dbConnexion()
// {
//     //variable qui doit stocker notre instance de conexion a la base de données
//     $connexionDb = null;
//     //try essaye de se connecter a la de données
//     try{
//     $connexionDb = new \PDO("mysql:host=localhost;dbname=aesthetink", "root","");
//     //si ces faux il releve une erreur
// }   catch(\PDOException $e){
//    echo $connexionDb = $e;
// }
// //retour de l'objet de conexion ou un erreur
// return $connexionDb;
// }

class Database
{

    public static function dbConnexion()
    {
        try {
            $conn = new \PDO("mysql:host=localhost;dbname=aesthetink", "root", "");
            // Set the PDO error mode to exception
            $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (\PDOException $e) {
            // Log the error or throw an exception
            error_log("Database connection error: " . $e->getMessage());
            throw new \Exception("Database connection failed. Please try again later.");
        }
    }
}
