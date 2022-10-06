<?php

trait Database
{
    private static PDO|null $dbh;

    public static function connect()
    {
        if (!self::$dbh) {
            require_once __DIR__ . "/../config.php";
            try {
                self::$dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS);
                self::$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Exception $exception) {
                die("Error : " . $exception->getMessage());
            }
        }
        return self::$dbh;
    }
}