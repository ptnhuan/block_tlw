<!DOCTYPE html>
<html>

    <head>
        <title>SlideShow</title>
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
        <div class="ie-module-6">
            <div class="row">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="images/banner1.jpg">
                        </div>
                        <!-- End Item -->
                        <div class="item">
                            <img src="images/banner2.jpg">
                        </div>
                        <!-- End Item -->
                        <div class="item">
                            <img src="images/banner3.jpg">
                        </div>
                        <!-- End Item -->
                        <div class="item">
                            <img src="images/banner4.jpg">
                        </div>
                        <!-- End Item -->
                    </div>
                    <!-- End Carousel Inner -->
                    <div class="color-nav" style="background: #eee;">
                        <div class="container">
                            <div class="row">
                                <div class="nav nav-pills nav-justified ie-padding col-md-4 col-md-push-4 col-sm-4 col-sm-push-4 col-xs-4 col-xs-push-4" >
                                    <div data-target="#myCarousel" data-slide-to="0" class=" active"><a href="#">-</a></div>
                                    <div data-target="#myCarousel" data-slide-to="1"><a href="#">-</a></div>
                                    <div data-target="#myCarousel" data-slide-to="2"><a href="#">-</a></div>
                                    <div data-target="#myCarousel" data-slide-to="3"><a href="#">-</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="newsletters">
                    <h1>Start 30-Day free trial today.</h1>
                    <h4>Search for online courses on Web development, Yoga, Guitar lessons, or anything else.</h4>
                    <div class="subscribe">
                        <input type="text" class="input-block-level ie-text">
                        <input type="button" class="ie-btn" value="Subscribe">
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>