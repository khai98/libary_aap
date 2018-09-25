<?php
/**
 * Created by PhpStorm.
 * User: hoangkhai
 * Date: 9/21/18
 * Time: 8:57 AM
 */

require __DIR__ . '/../class/Category.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete = new category();
    $delete->delete('category',$id);
    header('Location: Category.php');
}





