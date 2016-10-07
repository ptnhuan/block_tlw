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
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head> 

    <body> 
        <div class="ie-module-2">
            <div class="navbar navbar-default ie-fix-bottom" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <hr class="ie-tophr">
                <div class="top-strip">
                    <div class="container">
                        <div class="account">
                            <ul>
                                <li><a href="#">Subscribe</a></li>
                                <li><a href="#">Sign Out</a></li>
                                <li>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" id="account" role="button" data-toggle="dropdown" data-target="#" href="/page.html">
                                            My Account
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="account">
                                            <li><a href="#">Profile</a></li>
                                            <li><a href="#">Account Setting</a></li>
                                            <li><a href="#">Privacy Setting</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr class="ie-fix-border" >
                </div>

                <div class="ie-nav">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="logo ">
                                    <a href="#">
                                        <img src="images/logo.png"  >
                                    </a>
                                </div>
                                <div class="navbar-header ">

                                    <button type="button" class="navbar-toggle " data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </div>

                            <div class="col-md-8 col-sm-8">
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse navbar-ex1-collapse ">
                                    <div class="navbar ">
                                        <div class="navbar-inner ">
                                            <div class="nav navbar-nav ">
                                                <div class="ie-nav-fix">
                                                    <ul>
                                                        <li>
                                                            <div class="dropdown">
                                                                <a class="dropbtn" id="account" role="button" data-toggle="dropdown" data-target="#" href="/">
                                                                    Home
                                                                </a>
                                                                <ul class="dropdown-menu" role="menu" aria-labelledby="account">
                                                                    <li><a href="#">Profile</a></li>
                                                                    <li><a href="#">Account Setting</a></li>
                                                                    <li><a href="#">Privacy Setting</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li><a href="#">Blog</a>
                                                            <!--                                        <ul>
                                                                                                        <li><a href="blog.html">Blog</a></li>
                                                                                                        <li><a href="blog-detail.html">Blog Detail</a></li>
                                                                                                    </ul>-->
                                                        </li>
                                                        <li><a href="#">Services</a></li>
                                                        <li><a href="#">Events</a>
                                                            <!--                                        <ul>
                                                                                                        <li><a href="events.html">Events</a></li>
                                                                                                        <li><a href="events-detail.html">Event Detail</a></li>
                                                                                                    </ul>-->
                                                        </li>
                                                        <li><a href="#">Courses</a>
                                                            <!--                                        <ul>
                                                                                                        <li><a href="courses.html">Courses</a></li>
                                                                                                        <li><a href="courses-detail.html">Course Detail</a></li>
                                                                                                    </ul>-->
                                                        </li>
                                                        <li><a href="javascript:void(0)">Pages</a>
                                                            <!--                                        <ul>
                                                                                                        <li><a href="about-us.html">About us</a></li>
                                                                                                        <li><a href="404.html">Error 404</a></li>
                                                                                                        <li><a href="faq.html">FAQs</a></li>
                                                                                                        <li><a href="gallery.html">Gallery</a></li>
                                                                                                        <li><a href="news.html">News</a></li>
                                                                                                        <li><a href="our-lessons.html">Our Lessons</a></li>
                                                                                                        <li><a href="search-result.html">Search Result</a></li>
                                                                                                        <li><a href="signin.html">Sign In</a></li>
                                                                                                        <li><a href="student-login.html">Student Login</a></li>
                                                                                                        <li><a href="student-profile.html">Student Profile</a></li>
                                                                                                        <li><a href="teacher-profile.html">Teacher Profile</a></li>
                                                                                                        <li><a href="team.html">Our Team</a></li>
                                                                                                        <li><a href="edit-profile.html">Edit Your Profile</a></li>
                                                                                                    </ul>-->
                                                        </li>
                                                        <li><a href="#">Contact Us</a></li>
                                                    </ul>
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