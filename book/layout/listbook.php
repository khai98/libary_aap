<?php
require __DIR__ . '/../class/Book.php';
$displayTables = new Book();

//ten bien sai xem lai
$displayCategories = $displayTables->getAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Khai Design</title>
</head>
<body>
<div class="container">
    <link rel="stylesheet" href="../css/style.css">
    <div class="col-md-12">
        <!-- menu-->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li ><a href="../../book/layout/listbook.php">Book</a></li>
                    <li ><a href="../../category/layout/category.php">Categories List</a></li>
                    <li ><a href="../../student/layout/list.php">Student</a></li>
                    <li ><a href="#">BorrowOrder</a></li>
                    <li> <a href="../../index.php"> Index</a></li>
                </ul>
            </div>
        </nav>
        <div class="container" style="margin: 25px auto;">
            <div class="caption">Book</div>
            <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th class="dark-row">Id</th>
                    <th>Name</th>
                    <th class="dark-row">Pulishyear</th>
                    <th>Pulishsing</th>
                    <th class="dark-row">Pulishnumber</th>
                    <th>Price</th>
                    <th class="dark-row">Auther</th>
                    <th>Update</th>
                    <th class="dark-row">Delete</th>
                    <th>Add </th>

                </tr>
                <?php foreach ($displayCategories as $displayCategory) : ?>
                    <tr>
                        <td class="dark-row"> <?php echo $displayCategory['id'] ?></td>
                        <td class="light-row"> <?php echo $displayCategory['name'] ?></td>
                        <td class="dark-row"> <?php echo $displayCategory['pulishyear'] ?></td>
                        <td class="light-row"> <?php echo $displayCategory['pulishsing'] ?></td>
                        <td class="dark-row"> <?php echo $displayCategory['pulishnumber'] ?></td>
                        <td class="light-row"> <?php echo $displayCategory['price'] ?></td>
                        <td class="dark-row"> <?php echo $displayCategory['auther'] ?></td>
                        <td class="light-row" ><a href="update.php?id=<?php echo $displayCategory['id'] ?>" class='btn btn-info btn-xs'<span class="glyphicon glyphicon-edit"></span> Update</a></td>
                        <td class="dark-row"  ><a onclick="return confirm('bạn có muốn xóa không ? có thì OK không thì cancel ! ')" href="delete.php?id=<?php echo $displayCategory['id'] ?> " class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-remove"></span> Delete</a></td>
                        <td class="light-row" ><a class='btn btn-info btn-xs' href="addbook.php?id=<?php echo $displayCategory['id'] ?>"><span class="glyphicon glyphicon-edit"></span>Add</a></td>
                    </tr>
                <?php endforeach; ?>
                </thead>
            </table>
        </div>
    </div>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</body>
</html>