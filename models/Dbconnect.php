<?php 
abstract class DbConnect implements Crud {
    abstract function insert();
    abstract function update();
    abstract function delete();
    abstract function selectAll();
    abstract function select();

    protected $pdo;
    protected $id;
    function __construct() {
        $this->pdo = new PDO (DATABASE, LOGIN, PASSWORD);
        
    }
    function getId (): ?int {
        return $this->id;
    }
}