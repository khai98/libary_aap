<?php
/**
 * Created by PhpStorm.
 * User: hoangkhai
 * Date: 9/22/18
 * Time: 7:04 PM
 */

require_once '../../class/Abstract_class.php';


//ten class phai viet hoa

class Book extends Abstract_class
{
    /**
     * book constructor.
     */

    public function __construct()
    {
        parent::__construct('book');
    }


    public function getById($id)
    {
        $sql = "SELECT * FROM book WHERE id = $id";
        $query = $this->conn->query($sql);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function updateBook($idBook, $name, $pulishyear, $pulishsing, $pulishnumber, $price, $auther)
    {

        $sql = "UPDATE book SET name ='$name', pulishyear = $pulishyear ,pulishsing = '$pulishsing',pulishnumber = '$pulishnumber',price = '$price', `auther` = '$auther' WHERE id = $idBook";
        $this->conn->query($sql);
    }

    public function addNew($table, $name, $pulishyear, $pulishsing, $pulishnumber, $price, $auther)
    {
        $sql = "INSERT INTO $table( name, pulishyear, pulishsing, pulishnumber, price, auther) VALUES ('$name', $pulishyear, '$pulishsing', '$pulishnumber', '$price', '$auther')";
        $result = $this->conn->query($sql);
        return $result;
    }


}