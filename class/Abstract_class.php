<?php

require_once __DIR__. "/../database/database.php";

abstract class Abstract_class
{
    public $conn;
    private $table;
    /**
     * Abstract_class constructor.
     * @param $table
     */
    public function __construct($table) {
        $database = new Database();
        $this->conn = $database->connect('root', 'root', 'libary_app');
        $this->table = $table;
    }
    /**
     * @return array
     */
    public function getAll() {
        $sql = "SELECT * FROM $this->table";
        $query = $this->conn->query($sql);
        $categories = $query->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    }


    public function get(){

    }
    /**
     * @param $name
     * @return bool|PDOStatement
     */
    public function addCategories($table,$name) {
        $sql = "INSERT INTO  ".$table." (name) VALUES ('$name') ";
        $query = $this->conn->query($sql);
        return $query;
    }
    /**
     * @param $table
     * @param $id
     */

    public function delete($table, $id) {
        $sql = " DELETE FROM ".$table." WHERE id = ".$id;
        $this->conn->query($sql);
    }
    /**
     * @param $table
     * @param $id
     * @param $name
     */
    public function update($table, $id, $name) {
        $sql = " UPDATE ".$table." SET name='".$name."' WHERE id = ".$id ;
        $this->conn->query($sql);
    }


    abstract protected function getById($id);



}