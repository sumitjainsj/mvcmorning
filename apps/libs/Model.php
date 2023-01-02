<?php
class Model extends mysqli
{
    protected $table,$key= 'id';
    public function __construct($table)
    {
        parent::__construct(HOSTNAME,USERNAME,PASSWORD,DB);
        if(!isset($this->table)){
        $this->table = $table;
        }
    }
    public function save(){
        echo "this will work for store data in database";
    }
    public function update(){
        echo "this will work for update data in database";
    }
    public function showall(){
        // $sql="select * from $this->table ";
    }
    public function show(){
        echo "this is show for single record";
    }
    public function delete(){
        echo "this will delete single record";
    }
}