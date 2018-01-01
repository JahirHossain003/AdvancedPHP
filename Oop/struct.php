<?php
class Database{
    public function __construct($input)
    {
        echo "{$input}\n";
    }
    public function __destruct()
    {
        echo "Destruct\n";
    }
}

$obj = new Database('Construct');