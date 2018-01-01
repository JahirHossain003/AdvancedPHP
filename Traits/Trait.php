<?php
trait Log{
    protected function log($msg){
        echo "{$msg} \n";
    }
}

class Table{
    use Log;
    public function save(){
        $this->log('Save Start');
    }
}

(new Table())->save();