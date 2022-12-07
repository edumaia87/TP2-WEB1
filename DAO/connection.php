<?php
class Connection {
    private static $dsn = 'mysql:host=127.0.0.1;dbname=bookstore;port=3306';
    private static $user = 'root';
    private static $password = 'root';
    private static $connection = null;

    public static function getConnection() : PDO {
        if(Connection::$connection == null) {
            try {
                Connection::$connection = new PDO(Connection::$dsn, Connection::$user, Connection::$password);
            } catch(PDOException $ex) {
                echo $ex->getMessage();
            }
        }
        return Connection::$connection;
    }

    public static function getPreparedStatement($sql) : PDOStatement {
        $pst = null;
        if(Connection::getConnection() != null) {
            try {
                $pst = Connection::$connection->prepare($sql);
            } catch(PDOException $ex) {
                echo $ex->getMessage();
            }
        }
        return $pst;
    }
}

$con = Connection::getConnection();