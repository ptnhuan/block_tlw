<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>


        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <link href="css/style.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('./less/style.less', './css/style.css');
        ?>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/js.js" type="text/javascript"></script>
    <body>
        <div class="all">
            <div class="clearfix"></div>
            <div class="contant"> 
                <section class="gray-bg">
                    <div class="container">

                        <div class="sec-header">
                            <h2>Latest Courses</h2>
                            <p>Check Our Featured Courses</p>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                        <div class="type-f-slider">
                            <div class="container">
                                <div class="row1">
                                    <a class="left carousel-control next" href="#carousel123" data-slide="prev">
                                        <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                    <a class="right carousel-control prev" href="#carousel123" data-slide="next">
                                        <i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="carousel carousel-showsixmoveone slide" id="carousel123">
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <div class="  col-md-2">
                                                            <div class="course ">
                                                                <div class="thumb">
                                                                    <a href="#"><img src="images/course1.jpg" alt=""></a>
                                                                    <div class="price"><span>$</span>9</div>
                                                                </div>
                                                                <div class="text">
                                                                    <div class="header">
                                                                        <h4>Management</h4>
                                                                        <div class="rating">
                                                                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="course-name">
                                                                        <p>Build a Business Plan</p>
                                                                        <span>$800</span>
                                                                    </div>
                                                                    <div class="course-detail-btn">
                                                                        <a href="#">Subscribe</a>
                                                                        <a href="#">Detail</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="  col-md-2">
                                                            <div class="course ">
                                                                <div class="thumb">
                                                                    <a href="#"><img src="images/course1.jpg" alt=""></a>
                                                                    <div class="price"><span>$</span>9</div>
                                                                </div>
                                                                <div class="text">
                                                                    <div class="header">
                                                                        <h4>Management</h4>
                                                                        <div class="rating">
                                                                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="course-name">
                                                                        <p>Build a Business Plan</p>
                                                                        <span>$800</span>
                                                                    </div>
                                                                    <div class="course-detail-btn">
                                                                        <a href="#">Subscribe</a>
                                                                        <a href="#">Detail</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="  col-md-2">
                                                            <div class="course ">
                                                                <div class="thumb">
                                                                    <a href="#"><img src="images/course1.jpg" alt=""></a>
                                                                    <div class="price"><span>$</span>9</div>
                                                                </div>
                                                                <div class="text">
                                                                    <div class="header">
                                                                        <h4>Management</h4>
                                                                        <div class="rating">
                                                                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="course-name">
                                                                        <p>Build a Business Plan</p>
                                                                        <span>$800</span>
                                                                    </div>
                                                                    <div class="course-detail-btn">
                                                                        <a href="#">Subscribe</a>
                                                                        <a href="#">Detail</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </body>
</html>