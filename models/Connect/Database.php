<?php

class Database
{
    public function getConnection()
    {
        try {
            $pdo = new PDO("mysql:dbname=sisa;host=localhost", "root", "");
            return $pdo;
        } catch (PDOException $err) {

        }
    }
}