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

    </head> 

    <body> 
        <div class="zaro">
            <div class="contant">
                <section class="gray-bg">
                    <div class="container ie-fix-container">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="box">
                                    <h2><strong>Event Gallery</strong></h2>
                                    <ul class="event-galley">

                                        <li>
                                            <div class="thumb">
                                                <a href="#"><img alt="" src="images/event1.png"></a>
                                            </div>
                                            <div class="text">
                                                <p>21-04-2012</p>
                                                <h4>most popular courses </h4>
                                                <a href="#" class="tags">Equipment</a>
                                                <a href="#" class="tags">tips</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <a href="#"><img alt="" src="images/event1.png" class="img-responsive"></a>
                                            </div>
                                            <div class="text">
                                                <p>21-04-2012</p>
                                                <h4>most popular courses </h4>
                                                <a href="#" class="tags">Equipment</a>
                                                <a href="#" class="tags">tips</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <a href="#"><img alt="" src="images/event1.png" class="img-responsive"></a>
                                            </div>
                                            <div class="text">
                                                <p>21-04-2012</p>
                                                <h4>most popular courses </h4>
                                                <a href="#" class="tags">Equipment</a>
                                                <a href="#" class="tags">tips</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <a href="#"><img alt="" src="images/event1.png" class="img-responsive"></a>
                                            </div>
                                            <div class="text">
                                                <p>21-04-2012</p>
                                                <h4>most popular courses </h4>
                                                <a href="#" class="tags">Equipment</a>
                                                <a href="#" class="tags">tips</a>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="box lesson">
                                    <h2><strong>About Trial Lessons</strong></h2>
                                    <iframe src="http://player.vimeo.com/video/89700179?badge=0"></iframe>
                                    <div class="text">
                                        <h3 class="pull-left">Learn Photography </h3>
                                        <span class="pull-right">$6 Per Hour</span>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="box">
                                    <h2><strong>Our Next Courses</strong></h2>
                                    <ul class="event-galley">

                                        <li>
                                            <div class="thumb">
                                                <a href="#"><img alt="" src="images/event1.png" class="img-responsive"></a>
                                            </div>
                                            <div class="text">
                                                <p>21-04-2012</p>
                                                <h4>most popular courses </h4>
                                                <a href="#" class="tags">Equipment</a>
                                                <a href="#" class="tags">tips</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <a href="#"><img alt="" src="images/event1.png" class="img-responsive"></a>
                                            </div>
                                            <div class="text">
                                                <p>21-04-2012</p>
                                                <h4>most popular courses </h4>
                                                <a href="#" class="tags">Equipment</a>
                                                <a href="#" class="tags">tips</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <a href="#"><img alt="" src="images/event1.png" class="img-responsive"></a>
                                            </div>
                                            <div class="text">
                                                <p>21-04-2012</p>
                                                <h4>most popular courses </h4>
                                                <a href="#" class="tags">Equipment</a>
                                                <a href="#" class="tags">tips</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <a href="#"><img alt="" src="images/event1.png" class="img-responsive"></a>
                                            </div>
                                            <div class="text">
                                                <p>21-04-2012</p>
                                                <h4>most popular courses </h4>
                                                <a href="#" class="tags">Equipment</a>
                                                <a href="#" class="tags">tips</a>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </script>

</body>


</html>