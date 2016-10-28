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

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <script src="script/bootstrap.min.js" type="text/javascript"></script>
        <script src="script/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="script/carousel.js" type="text/javascript"></script>
    </head> 

    <body> 

        <div class="ie-module-11">
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

                        <div class="customNavigation">
                            <a class="btn prev"><i class="fa fa-angle-left"></i></a>
                            <a class="btn next"><i class="fa fa-angle-right"></i></a>
                        </div>

                        <div id="zaro-carousel" class="zaro-carousel" style="display: block; opacity: 1;">
                            <div class="zaro-wrapper-outer">
                                <div class="zaro-wrapper" style="width: 7032px; left: 0px; display: block;">
                                    <div class="zaro-item" style="width: 293px;">
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
                                    <div class="zaro-item" style="width: 293px;">
                                        <div class="course">
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
                                    <div class="zaro-item" style="width: 293px;">
                                        <div class="course">
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
                                    <div class="zaro-item" style="width: 293px;">
                                        <div class="course">
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
                                    <div class="zaro-item" style="width: 293px;">
                                        <div class="course">
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

                            <div class="zaro-controls clickable">
                                <div class="zaro-pagination">
                                    <div class="zaro-page active"><span class=""></span></div>
                                    <div class="zaro-page"><span class=""></span></div>
                                    <div class="zaro-page"><span class=""></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </body>
</html>