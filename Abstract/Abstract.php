<?php
abstract class Database {
    abstract public function connect();
    public function disconnect(){
        // disconnecting from database
        echo "disconnect from database";
    }
}

class Mysql extends Database{

    public function connect()
    {
        echo "connect to mysql";
    }
}

$db = new Mysql();
$db->disconnect();