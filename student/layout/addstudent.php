<?php
require __DIR__ . '/../class/Student.php';

if (isset($_POST['name'])) {
    $name = $_POST['name'];

    if (isset($_POST['id'])) {
        $id = $_POST['id'];
    }
    if (isset($_POST['phone'])) {
        $phone = $_POST['phone'];
    }
    if (isset($_POST['address'])) {
        $address = $_POST['address'];
    }
    if (isset($_POST['birthday'])) {
        $birthday = $_POST['birthday'];
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    }

    $addNew = new Student();
    $student = $addNew->addStudents('student', $name, $email, $birthday, $address, $phone);

    header('Location: list.php');
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
            <p> Let's go, Update name you want ! </p>
        </div>
        <div class="col-md-9 register-right">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading"> Add New Student</h3>
                    <form method="post">
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> ID</label>
                                    <input type="text" name="id" class="form-control"
                                           placeholder="Không cần nhập nhé! "/>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> Phone</label>
                                    <input type="text" name="phone" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> Email </label>
                                    <input type="text" name="email" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Name</label>
                                    <input type="text" name="name" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> Birthday</label>
                                    <input type="text" name="birthday" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> Address</label>
                                    <input type="text" name="address" class="form-control"/>
                                </div>
                                <input type="submit" class="btnRegister" value="Add New"/>
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
