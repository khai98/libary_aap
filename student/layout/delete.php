<?php
/**
 * Created by PhpStorm.
 * User: hoangkhai
 * Date: 9/21/18
 * Time: 8:57 AM
 */

require __DIR__ . '/../class/Student.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete = new Student();
    $delete->delete('student',$id);

  header('Location: list.php');
}





