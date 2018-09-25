<?php
/**
 * Created by PhpStorm.
 * User: hoangkhai
 * Date: 9/21/18
 * Time: 9:15 AM
 */
require __DIR__ . '/../class/Category.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $category = new category();
    $categoriesCurrent = $category->getCategoryById('category',$id);

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $category = new category();
        $category->update('category',$id, $name);


        header('Location: Category.php');
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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Welcome</h3>
            <p> Let's go, Update name you want. </p>
        </div>
        <div class="col-md-9 register-right">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading"> Update Name</h3>
                    <form method="post">
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> ID</label>
                                    <input type="text" name="id" class="form-control"
                                           placeholder=" id = <?php echo $categoriesCurrent[0]['id'] ?>"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">NAME</label>
                                    <input type="text" name="name" class="form-control"
                                           value="<?php echo $categoriesCurrent[0]['name'] ?>"/>
                                </div>
                                <input type="submit" class="btnRegister" value="Update"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

