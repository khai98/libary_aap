<?php
require_once __DIR__ . "/../../category/class/Category.php";
require_once __DIR__ . "/../class/Book.php";

if (isset($_GET['id'])) {
    $idBook = $_GET['id'];

    $book = new  Book();
    $currentBook = $book->getById($idBook);

    $category = new Category();
    $categories = $category->getAll();

}
?>
<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Welcome</h3>
            <p> Let's go, Update name you want ! </p>
        </div>
        <div class="col-md-9 register-right">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading"> Add New Book</h3>
                    <form method="post">
                        <div class="row register-form">
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
<!--                            <div class="form-group">-->
<!--                                <label for="exampleFormControlSelect1">name</label>-->
<!--                                <input type="text" name="name" class="form-control"/>-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <label for="exampleFormControlSelect1">pulishyear</label>-->
<!--                                <input type="text" name="pulishyear" class="form-control"/>-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <label for="exampleFormControlSelect1">pulishsing</label>-->
<!--                                <input type="text" name="pulishsing" class="form-control"/>-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <label for="exampleFormControlSelect1">pulishnumber</label>-->
<!--                                <input type="text" name="pulishnumber" class="form-control"/>-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <label for="exampleFormControlSelect1">price</label>-->
<!--                                <input type="text" name="price" class="form-control"/>-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <label for="exampleFormControlSelect1">auther</label>-->
<!--                                <input type="text" name="auther" class="form-control"/>-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <input type="submit" name="btnSubmit" class="btnContact" value="add"/>-->
<!--                            </div>-->

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
</div>