<?php

/**
 * Created by PhpStorm.
 * User: daniela
 * Date: 10.8.18
 * Time: 11:09
 */
class Connection
{
    public static function getConnection()
    {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=logIn", 'root', 'root');
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die();
        }
    }

}