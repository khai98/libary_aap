<?php
/**
 * Created by PhpStorm.
 * User: hoangkhai
 * Date: 9/20/18
 * Time: 9:47 PM
 */
require (__DIR__ . "/../../class/Abstract_class.php");

class Category extends Abstract_class
{
    /**
     * category constructor.
     */
    public $table ="category";

    public function __construct() {
        parent::__construct($this->table);

    }
    /**
     * @param $table
     * @param $id
     * @return array
     */
    public function getCategoryById($table, $id) {
        $sql = "SELECT * FROM 	" . $table . " WHERE id = " . $id;
        $query = $this->conn->query($sql);
        $categories = $query->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    }


    protected function getById($id) {
        // TODO: Implement getById() method.
    }

    public function __destruct() {
        // TODO: Implement __destruct() method.
    }
}