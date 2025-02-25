<?php
class DB
{
    static $db = null;
    private static function getDB()
    {
        if (!self::$db) {
            $conn = new PDO("mysql:host=localhost;dbname=homework;charset=utf8mb4", "mysql", "", [19 => 5, 3 => 2]);
            self::$db = $conn;
        }
        return self::$db;
    }
    // update, delete, create
    static function exec($query, $params = [])
    {
        $stmt = self::getDB()->prepare($query);
        $stmt->execute($params);
        return true;
    }
    // 한개 select (객체)
    static function fetch($query, $params = [])
    {
        $stmt = self::getDB()->prepare($query);
        $stmt->execute($params);
        return $stmt->fetch();
    }
    // 다 select (배열)
    static function fetchAll($query, $params = [])
    {
        $stmt = self::getDB()->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchAll();
    }
}
function Select($query, $params = []) {
    return DB::fetch($query, $params);
}
function SelectAll($query, $params = []) {
    return DB::fetchAll($query, $params);
}

function Insert($query, $params = []) {
    return DB::exec($query, $params);
}

function Update($query, $param = []) {
    return DB::exec($query, $param);
}

function Delete($query, $param = []) {
    return DB::exec($query, $param);
}