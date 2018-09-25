<?php
/**
 * Created by PhpStorm.
 * User: hoangkhai
 * Date: 9/20/18
 * Time: 9:47 PM
 */
require '../../class/Abstract_class.php';

class Student extends Abstract_class
{
    /**
     * category constructor.
     */
    public function __construct() {
        parent::__construct('student');
    }

    /**
     * @param $id
     * @param $name
     * @param $email
     * @param $birthday
     * @param $address
     * @param $phone
     * @return int
     */
    public function addStudents($table, $name, $email, $birthday, $address, $phone) {
        $sql = "INSERT INTO " . $table . " ( name, email, brithday, address, phone) VALUES ('$name', '$email', '$birthday', '$address', $phone)";
        $query = $this->conn->query($sql);
        return $query;
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

    public function updateStudent($table, $id,$name, $email, $birthday, $address, $phone ) {
        $sql = "UPDATE ".$table." SET name='".$name."',email ='".$email."' ,brithday = '".$birthday."' ,address = '".$address."',phone= ".$phone." WHERE id = $id";
        $query = $this->conn->query($sql);
        return $query;

    }

    protected function getById($id) {
        // TODO: Implement getById() method.
    }
}