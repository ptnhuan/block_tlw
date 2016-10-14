<!DOCTYPE html>
<html>

    <head>
        <title>Header</title>
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
                            <div class="col-md-4 col-sm-4 col-sm-fix">
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

                            <div class="col-md-8 col-sm-12">
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <nav class="nav-fix">
                                    <div class="collapse navbar-collapse navbar-ex1-collapse ">
                                        <ul>
                                            <div class="row">
                                                <li>
                                                    <div class="dropdown">
                                                        <button class="dropbtn ie-dropbtn">
                                                            <div class=" cat-name">
                                                                <p>Home</p>
                                                            </div>
                                                        </button>
                                                        <div class="dropdown-content">
                                                            <a href="#">Pagesilder layout</a>
                                                            <a href="#">Corporate layout</a>
                                                            <a href="#">New layout</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="dropdown">
                                                        <button class="dropbtn ie-dropbtn">
                                                            <div class=" cat-name">
                                                                <p>Blog</p>
                                                            </div>
                                                        </button>
                                                        <div class="dropdown-content">
                                                            <a href="#">Pagesilder layout</a>
                                                            <a href="#">Corporate layout</a>
                                                            <a href="#">New layout</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="dropdown">
                                                        <button class="dropbtn ie-dropbtn">
                                                            <div class=" cat-name">
                                                                <p>Services</p>
                                                            </div>
                                                        </button>
                                                        <div class="dropdown-content">
                                                            <a href="#">Pagesilder layout</a>
                                                            <a href="#">Corporate layout</a>
                                                            <a href="#">New layout</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="dropdown">
                                                        <button class="dropbtn ie-dropbtn">
                                                            <div class=" cat-name">
                                                                <p>Events</p>
                                                            </div>
                                                        </button>
                                                        <div class="dropdown-content">
                                                            <a href="#">Pagesilder layout</a>
                                                            <a href="#">Corporate layout</a>
                                                            <a href="#">New layout</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="dropdown">
                                                        <button class="dropbtn ie-dropbtn">
                                                            <div class=" cat-name">
                                                                <p>Courses</p>
                                                            </div>
                                                        </button>
                                                        <div class="dropdown-content">
                                                            <a href="#">Pagesilder layout</a>
                                                            <a href="#">Corporate layout</a>
                                                            <a href="#">New layout</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="dropdown">
                                                        <button class="dropbtn ie-dropbtn">
                                                            <div class=" cat-name">
                                                                <p>Pages</p>
                                                            </div>
                                                        </button>
                                                        <div class="dropdown-content">
                                                            <a href="#">Blog</a>
                                                            <a href="#">Blog Detail</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <div class="dropdown">
                                                            <button class="dropbtn ie-dropbtn">
                                                                <div class=" cat-name">
                                                                    <p>Contact Us</p>
                                                                </div>
                                                            </button>
                                                        </div>
                                                    </a>
                                                </li>
                                            </div>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>