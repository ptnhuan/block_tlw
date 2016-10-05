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
    </head> 

    <body> 
        <div class="zaro">
    
            <div class="contant"> 
                <section>
                    <div class="container">

                        <div class="sec-header">
                            <h3>Our Services</h3>
                            <p>Take a look at what we have are doing</p>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                        <div class="row">

                            <div class="span4">
                                <div class="services">
                                    <div class="header">
                                        <i class="fa fa-tablet"></i>
                                        <i class="fa fa-user inner-icon"></i>
                                    </div>
                                    <div class="text">
                                        <h3><a href="#">Expert teachers</a></h3>
                                        <p>UI improvements were the one aspect of WordPress's future that everyone I spoke to seemed to agree on: </p>
                                    </div>
                                </div>
                            </div>


                            <div class="span4">
                                <div class="services">
                                    <div class="header">
                                        <i class="fa fa-tablet"></i>
                                        <i class="fa fa-list-alt inner-icon"></i>
                                    </div>
                                    <div class="text">
                                        <h3><a href="#">Trusted certifications</a></h3>
                                        <p>UI improvements were the one aspect of WordPress's future that everyone I spoke to seemed to agree on: </p>
                                    </div>
                                </div>
                            </div>


                            <div class="span4">
                                <div class="services">
                                    <div class="header">
                                        <i class="fa fa-tablet"></i>
                                        <i class="fa fa-cogs inner-icon"></i>
                                    </div>
                                    <div class="text">
                                        <h3><a href="#">Start Learning</a></h3>
                                        <p>UI improvements were the one aspect of WordPress's future that everyone I spoke to seemed to agree on: </p>
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