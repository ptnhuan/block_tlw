<!DOCTYPE html>
<html>

    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?>  
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head> 

    <body> 
        <div class="our-teachers">
            <div class="contant">
                <section class="gray-bg">
                    <div class="container">
                        <div class="sec-header">
                            <h3><strong>Our Teachers</strong></h3>
                            <p>Discover courses by topic</p>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-3  col-sm-3 col-xs-12  ">
                                    <div class="teachers">
                                        <div class="social-icons">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-flickr"></i></a>
                                            <a href="#"><i class="fa fa-dribbble"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-vimeo-square"></i></a>
                                        </div>
                                        <div class="thumb">
                                            <a href="#"><img src="images/teachers4.jpg" class="img-responsive" alt=""></a>
                                        </div>
                                        <div class="text">
                                            <h2><a href="#">Mickey Rorey</a></h2>
                                            <p>Science Teacher</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-3 col-xs-12  ">
                                    <div class="teachers">
                                        <div class="social-icons">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-flickr"></i></a>
                                            <a href="#"><i class="fa fa-dribbble"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-vimeo-square"></i></a>
                                        </div>
                                        <div class="thumb">
                                            <a href="#"><img src="images/teachers4.jpg" alt=""></a>
                                        </div>
                                        <div class="text">
                                            <h2><a href="#">Mickey Rorey</a></h2>
                                            <p>Science Teacher</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-3 col-xs-12  ">
                                    <div class="teachers">
                                        <div class="social-icons">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-flickr"></i></a>
                                            <a href="#"><i class="fa fa-dribbble"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-vimeo-square"></i></a>
                                        </div>
                                        <div class="thumb">
                                            <a href="#"><img src="images/teachers4.jpg" alt=""></a>
                                        </div>
                                        <div class="text">
                                            <h2><a href="#">Mickey Rorey</a></h2>
                                            <p>Science Teacher</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3  col-sm-3 col-xs-12  ">
                                    <div class="teachers">
                                        <div class="social-icons">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-flickr"></i></a>
                                            <a href="#"><i class="fa fa-dribbble"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-vimeo-square"></i></a>
                                        </div>
                                        <div class="thumb">
                                            <a href="#"><img src="images/teachers4.jpg" alt=""></a>
                                        </div>
                                        <div class="text">
                                            <h2><a href="#">Mickey Rorey</a></h2>
                                            <p>Science Teacher</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </body>
</html>