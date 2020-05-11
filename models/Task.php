<?php 
class Tasks extends Dbconnect {
    private $idTask;
    private $description;
    private $deadline;
    private $userid;

    function getIdTask(): int {
        return $this->idTask;
    }

    function getDescription(): string {
        return $this->description;
    }

    function getDeadline(): DateTime {
        return $this->deadLine;
    }

    function getuserId(): int {
        return $this->userid;
    }

    function setIdTask(int $id) {
        $this->idTask= $id;
    }

    function setDescription(string $desc) {
        $this->description = $desc;
    }

    function setIdTask(DateTime $dd) {
        $this->deadline = $dd;
    }

    function setUserId(int $id) {
        $this->userid = $id;
    }

    function insert() {

    }

    function update() {

    }

    function delete() {

    }

    function selectAll() {
        
    } 

    function select() {

    } 
}