<?php
interface TableInterface{
    public function save(array $data);
}
interface LogInterface{
    public function log($message);
}
class Table implements TableInterface,LogInterface {

    public function save(array $data)
    {
        echo 'foo';
    }

    public function log($message)
    {
        echo $message;
    }
}

echo (new Table())->save([]);
echo (new Table())->log(' Interfaces are awesome')."\n";
