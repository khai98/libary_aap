<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="styleindex.css">
    <title> Welcome Library Get Design By Khai </title>
</head>
<body>
<div class="welcome">
    <h1 class="col-sm-12 "> Welcome Library Get Design By Khai</h1>
</div>
<div class="container">
    <div class="col-sm-12" style="padding-bottom: 20px !important;">
        <div class="bs-calltoaction bs-calltoaction-primary">
            <div class="row">
                <div class="col-md-9 cta-contents">
                    <h1 class="cta-title">Book List</h1>
                    <div class="cta-desc">
                        <p>This is book list </p>
                        <p>In here has many book hot</p>
                    </div>
                </div>
                <div class="col-md-3 cta-button">
                    <a href="book/layout/listbook.php" class="btn btn-lg btn-block btn-primary">Go for It!</a>
                </div>
            </div>
        </div>

        <div class="bs-calltoaction bs-calltoaction-info">
            <div class="row">
                <div class="col-md-9 cta-contents">
                    <h1 class="cta-title">Student List</h1>
                    <div class="cta-desc">
                        <p>This is student list</p>
                        <p>In here is table student</p>
                    </div>
                </div>
                <div class="col-md-3 cta-button">
                    <a href="student/layout/list.php" class="btn btn-lg btn-block btn-info">Go for It!</a>
                </div>
            </div>
        </div>

        <div class="bs-calltoaction bs-calltoaction-success">
            <div class="row">
                <div class="col-md-9 cta-contents">
                    <h1 class="cta-title">Category List</h1>
                    <div class="cta-desc">
                        <p>This is category list </p>
                        <p>In here has many book category</p>
                    </div>
                </div>
                <div class="col-md-3 cta-button">
                    <a href="category/layout/category.php" class="btn btn-lg btn-block btn-success">Go for It!</a>
                </div>
            </div>
        </div>

        <div class="bs-calltoaction bs-calltoaction-warning">
            <div class="row">
                <div class="col-md-9 cta-contents">
                    <h1 class="cta-title">Its a Call To Action</h1>
                    <div class="cta-desc">
                        <p>Describe the action here.</p>
                        <p>Describe the action here.</p>
                        <p>Describe the action here.</p>
                    </div>
                </div>
                <div class="col-md-3 cta-button">
                    <a href="#" class="btn btn-lg btn-block btn-warning">Go for It!</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-wrapper" style="padding-top: 65px">

    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p> Freelancer is about sale , marketing , code</p>
                </div>
                <div class="col-lg-4">
                    <p> Freelancer is about sale , marketing , code </p>
                </div>
            </div>
        </div>

    </section>
    <section class="primary" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form name="sentMessage" id="contactForm" novalidate="">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required=""
                                       data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email"
                                       required="" data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required=""
                                       data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required=""
                                          data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="container" style="min-height:130px; background-color:#18bc9c;color:#fff;text-align:center;padding-top:30px;">DESIGN BY KhaiMaGiao © 2018</footer>
</div>
</body>
</html>
