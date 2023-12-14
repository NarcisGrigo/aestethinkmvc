<?php

namespace Model;

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
