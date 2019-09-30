<?php

class Connection
{

    public static function connect()
    {
        $servername = "localhost";
        $dbname = "lara_api_pass";
        $username = "njaure";
        $password = "xul200nj";

        try {
            return new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
