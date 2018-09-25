<?php

require_once __DIR__ . "/../../category/class/Category.php";
require_once __DIR__ . "/../class/Book.php";

if (isset($_GET['id'])) {
    $idBook = $_GET['id'];

    $book = new  Book();
    $currentBook = $book->getById($idBook);

    $category = new Category();
    $categories = $category->getAll();

    if (isset($_POST['btnSubmit'])) {
        $name = $_POST['name'];
        $pulishyear = $_POST['pulishyear'];
        $pulishsing = $_POST['pulishsing'];
        $pulishnumber = $_POST['pulishnumber'];
        $price = $_POST['price'];
        $auther = $_POST['auther'];

        $updateBook = $book->updateBook($idBook, $name, $pulishyear, $pulishsing, $pulishnumber, $price, $auther);
        header('Location: listbook.php');
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"
          id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container">
    <div class="container contact-form">
        <div class="contact-image">
            <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
        </div>
        <form method="post">
            <h3> Choose a category to update</h3>
            <div class="row" style="text-align: center">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $currentBook['name'] ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">pulishyear</label>
                        <input type="text" name="pulishyear" class="form-control"
                               value="<?php echo $currentBook['pulishyear'] ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">pulishsing</label>
                        <input type="text" name="pulishsing" class="form-control"
                               value="<?php echo $currentBook['pulishsing'] ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">pulishnumber</label>
                        <input type="text" name="pulishnumber" class="form-control"
                               value="<?php echo $currentBook['pulishnumber'] ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">price</label>
                        <input type="text" name="price" class="form-control"
                               value="<?php echo $currentBook['price'] ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">price</label>
                        <input type="text" name="auther" class="form-control"
                               value="<?php echo $currentBook['auther'] ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Categories select</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="category_id">

                            <?php foreach ($categories as $category): ?>

                                <option value="<?php echo $category['id'] ?>"
                                    <?php if ($category['id'] == $currentBook['id_category']) { ?>
                                        selected
                                    <?php } ?>
                                >

                                    <?php echo $category['name'] ?>
                                </option>

                            <?php endforeach ?>
                        </select>

                    </div>
                    <div class="form-group">
                        <input type="submit" name="btnSubmit" class="btnContact" value="Send Message"/>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>