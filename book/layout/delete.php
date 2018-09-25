<?php
/**
 * Created by PhpStorm.
 * User: hoangkhai
 * Date: 9/21/18
 * Time: 8:57 AM
 */

require '../class/Book.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete = new Book();
    $delete->delete('Book',$id);

  header('Location: listbook.php');
}





