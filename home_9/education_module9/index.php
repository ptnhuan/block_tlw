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
        <div class="ie-module-9">

            <div class="container testimonial-contant">
                <div class="sec-header">
                    <h2>Read Our Testimonials</h2>
                    <p>What Students say</p>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div id="main_area">
                    <!-- Slider -->
                    <div class="row">
                        <div class="" id="slider">
                            <!-- Top part of the slider -->
                            <div class="row">
                                <div class="testimonial-data" id="carousel-bounding-box">
                                    <div class="carousel slide" id="myCarousel">
                                        <!-- Carousel items -->
                                        <div class="carousel-inner">
                                            <div class="active item" data-slide-number="0">
                                                <div class="testimonial-text">
                                                    <p>Nunc ullamcorper massa eu magna varius commodo. Praesent nec enim eu quam suscipit tincidunt at sed tortor. Quisque quis massa faucibus leo egestas rhoncus. Cras pretium rhoncus urna nec accumsan. Proin vehicula ante non pulvinar dignissim. Curabitur in urna volutpat, suscipit metus at, consectetur ipsum. </p>
                                                    <a href="#">Naiana Ansa</a>
                                                </div>
                                            </div>

                                            <div class="item" data-slide-number="1">
                                                <div class="testimonial-text">
                                                    <p>Nunc ullamcorper massa eu magna varius commodo. Praesent nec enim eu quam suscipit tincidunt at sed tortor. Quisque quis massa faucibus leo egestas rhoncus. Cras pretium rhoncus urna nec accumsan. Proin vehicula ante non pulvinar dignissim. Curabitur in urna volutpat, suscipit metus at, consectetur ipsum. </p>
                                                    <a href="#">Naiana Ansa</a>
                                                </div>
                                            </div>

                                            <div class="item" data-slide-number="2">
                                                <div class="item" data-slide-number="1">
                                                    <div class="testimonial-text">
                                                        <p>Nunc ullamcorper massa eu magna varius commodo. Praesent nec enim eu quam suscipit tincidunt at sed tortor. Quisque quis massa faucibus leo egestas rhoncus. Cras pretium rhoncus urna nec accumsan. Proin vehicula ante non pulvinar dignissim. Curabitur in urna volutpat, suscipit metus at, consectetur ipsum. </p>
                                                        <a href="#">Naiana Ansa</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item" data-slide-number="3">
                                                <div class="item" data-slide-number="1">
                                                    <div class="testimonial-text">
                                                        <p>Nunc ullamcorper massa eu magna varius commodo. Praesent nec enim eu quam suscipit tincidunt at sed tortor. Quisque quis massa faucibus leo egestas rhoncus. Cras pretium rhoncus urna nec accumsan. Proin vehicula ante non pulvinar dignissim. Curabitur in urna volutpat, suscipit metus at, consectetur ipsum. </p>
                                                        <a href="#">Naiana Ansa</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item" data-slide-number="4">
                                                <div class="item" data-slide-number="1">
                                                    <div class="testimonial-text">
                                                        <p>Nunc ullamcorper massa eu magna varius commodo. Praesent nec enim eu quam suscipit tincidunt at sed tortor. Quisque quis massa faucibus leo egestas rhoncus. Cras pretium rhoncus urna nec accumsan. Proin vehicula ante non pulvinar dignissim. Curabitur in urna volutpat, suscipit metus at, consectetur ipsum. </p>
                                                        <a href="#">Naiana Ansa</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item" data-slide-number="5">
                                                <div class="item" data-slide-number="1">
                                                    <div class="testimonial-text">
                                                        <p>Nunc ullamcorper massa eu magna varius commodo. Praesent nec enim eu quam suscipit tincidunt at sed tortor. Quisque quis massa faucibus leo egestas rhoncus. Cras pretium rhoncus urna nec accumsan. Proin vehicula ante non pulvinar dignissim. Curabitur in urna volutpat, suscipit metus at, consectetur ipsum. </p>
                                                        <a href="#">Naiana Ansa</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- Carousel nav -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/Slider-->
                </div>
                <div class="testimonial-data">
                    <div id="bx-pager">
                        <a id="carousel-selector-0">
                            <div class="thumb">
                                <img src="images/student-testi1.jpg" alt="">
                            </div>
                            <p>Naiana Ansa</p>
                            <p class="color">guitarist</p>
                        </a>
                        <a id="carousel-selector-1" class="">
                            <div class="thumb">
                                <img src="images/student-testi2.jpg" alt="">
                            </div>
                            <p>Jasmine Dou</p>
                            <p class="color">student</p>
                        </a>
                        <a id="carousel-selector-2">
                            <div class="thumb">
                                <img src="images/student-testi3.jpg" alt="">
                            </div>
                            <p>David john</p>
                            <p class="color">student</p>
                        </a>
                        <a id="carousel-selector-3" class="">
                            <div class="thumb">
                                <img src="images/student-testi4.jpg" alt="">
                            </div>
                            <p>Roth Brown</p>
                            <p class="color">Artist</p>
                        </a>
                        <a id="carousel-selector-4" class="">
                            <div class="thumb">
                                <img src="images/student-testi5.jpg" alt="">
                            </div>
                            <p>Timothy Smith</p>
                            <p class="color">Smithies</p>
                        </a>
                    </div>
                </div>
                <div class="side-imgage"><img src="images/testimonials-bg2.png" alt=""></div>
            </div>
            <div class="ie-pg">

            </div>
        </div>
    </body>
</html>