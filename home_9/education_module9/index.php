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

                <div class="testimonial-data">
                    <div class="bx-wrapper" style="max-width: 100%;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 272px;"><ul class="bxslider2" style="width: auto; position: relative;">
                                <li style="float: none; list-style: none; position: absolute; display: none; width: 680px; z-index: 0;">
                                    <div class="testimonial-text">
                                        <p>Nunc ullamcorper massa eu magna varius commodo. Praesent nec enim eu quam suscipit tincidunt at sed tortor. Quisque quis massa faucibus leo egestas rhoncus. Cras pretium rhoncus urna nec accumsan. Proin vehicula ante non pulvinar dignissim. Curabitur in urna volutpat, suscipit metus at, consectetur ipsum. </p>
                                        <a href="#">Naiana Ansa</a>
                                    </div>
                                </li>
                                <li style="float: none; list-style: none; position: absolute; display: none; width: 680px; z-index: 0;">
                                    <div class="testimonial-text">
                                        <p>Praesent nec enim eu quam suscipit tincidunt at sed tortor. Quisque quis massa faucibus leo egestas rhoncus. Cras pretium rhoncus urna nec accumsan. Proin vehicula ante non pulvinar dignissim. Curabitur in urna volutpat, suscipit metus at, consectetur ipsum. </p>
                                        <a href="#">Jasmine Dou</a>
                                    </div>
                                </li>
                                <li style="float: none; list-style: none; position: absolute; display: list-item; width: 680px; z-index: 50;">
                                    <div class="testimonial-text">
                                        <p>Nunc ullamcorper massa eu magna varius commodo. Praesent nec enim eu quam suscipit tincidunt at sed tortor. Quisque quis massa faucibus leo egestas rhoncus. Cras pretium rhoncus urna nec accumsan. Proin vehicula ante non pulvinar dignissim. </p>
                                        <a href="#">David john</a>
                                    </div>
                                </li>
                                <li style="float: none; list-style: none; position: absolute; display: none; width: 680px; z-index: 0;">
                                    <div class="testimonial-text">
                                        <p>Nunc ullamcorper massa eu magna varius commodo. Praesent nec enim eu quam suscipit tincidunt at sed tortor. Quisque quis massa faucibus leo egestas rhoncus. Cras pretium rhoncus urna nec accumsan. Proin vehicula ante non pulvinar dignissim. Curabitur in urna volutpat, suscipit metus at, consectetur ipsum. </p>
                                        <a href="#">Roth Brown</a>
                                    </div>
                                </li>
                                <li style="float: none; list-style: none; position: absolute; display: none; width: 680px; z-index: 0;">
                                    <div class="testimonial-text">
                                        <p>Praesent nec enim eu quam suscipit tincidunt at sed tortor. Quisque quis massa faucibus leo egestas rhoncus. Cras pretium rhoncus urna nec accumsan. Proin vehicula ante non pulvinar dignissim. Curabitur in urna volutpat, suscipit metus at, consectetur ipsum. </p>
                                        <a href="#">Timothy Smith</a>
                                    </div>
                                </li>
                            </ul></div><div class="bx-controls bx-has-controls-direction"><div class="bx-controls-direction"><a class="bx-prev" href=""></a><a class="bx-next" href=""></a></div></div></div>
                    <div id="bx-pager">
                        <a data-slide-index="0" href="" class="">
                            <div class="thumb">
                                <img src="images/student-testi1.jpg" alt="">
                            </div>
                            <p>Naiana Ansa</p>
                            <p class="color">guitarist</p>
                        </a>
                        <a data-slide-index="1" href="" class="">
                            <div class="thumb">
                                <img src="images/student-testi2.jpg" alt="">
                            </div>
                            <p>Jasmine Dou</p>
                            <p class="color">student</p>
                        </a>
                        <a data-slide-index="2" href="" class="active">
                            <div class="thumb">
                                <img src="images/student-testi3.jpg" alt="">
                            </div>
                            <p>David john</p>
                            <p class="color">student</p>
                        </a>
                        <a data-slide-index="3" href="" class="">
                            <div class="thumb">
                                <img src="images/student-testi4.jpg" alt="">
                            </div>
                            <p>Roth Brown</p>
                            <p class="color">Artist</p>
                        </a>
                        <a data-slide-index="4" href="" class="">
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