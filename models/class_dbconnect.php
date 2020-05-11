<?php 
class DbConnect implements Crud {
protected $pdo;
protected $id;
function __construct($id) {
    $this->PDO = new PDO ();
    $this->$id;
    }
    function getId (): ?int {
        return $this->id;
    }
}