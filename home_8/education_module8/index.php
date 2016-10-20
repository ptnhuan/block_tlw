<!DOCTYPE html>
<html>

    <head>
        <title>Tab</title>
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
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head> 

    <body> 
        <div class="ie-module-8">
            <div class="ie-pg">
                <div class="container post-contant">
                    <div class="sec-header">
                        <h2>Popular Posts</h2>
                        <p>Latest From Blog</p>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12 ie-mg">
                            <div class="post">
                                <div class="thumb">
                                    <img src="images/post.png" alt="">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </div>

                                <div class="header">

                                    <div class="post-date">
                                        <p>May<span>11</span>2014</p>
                                    </div>

                                    <div class="icons">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-heart-o"></i></a><span class="notification">25</span></li>
                                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                                            <li><a href="#"><i class="fa fa-comments-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="text">
                                    <h2>A Post With Everything In It</h2>
                                    <h5>Writer David / Poetry course</h5>
                                    <p>Vel ut quas utroque placerat, kasd utinam epicuri at est, hendrerit argumentum dissentias ei nec. Vel ut quas utroque placerat, kasd utinam epicuri at est, hendrerit argumentum dissentias ei nec. </p>
                                    <a href="#" class="more">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 ie-mg">
                            <div class="post">
                                <div class="thumb">
                                    <img src="images/post.png" alt="">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </div>

                                <div class="header">

                                    <div class="post-date">
                                        <p>May<span>11</span>2014</p>
                                    </div>

                                    <div class="icons">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-heart-o"></i></a><span class="notification">25</span></li>
                                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                                            <li><a href="#"><i class="fa fa-comments-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="text">
                                    <h2>A Post With Everything In It</h2>
                                    <h5>Writer David / Poetry course</h5>
                                    <p>Vel ut quas utroque placerat, kasd utinam epicuri at est, hendrerit argumentum dissentias ei nec. Vel ut quas utroque placerat, kasd utinam epicuri at est, hendrerit argumentum dissentias ei nec. </p>
                                    <a href="#" class="more">Read More</a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>