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
        <div class="ie-module-10">  
            <div class="form">
                <div class="form-contant relative">
                    <div class="container form-fields">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="span6">
                                    <img src="images/student.png">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="span6">
                                    <div class="student-form">
                                        <div class="header">
                                            <h2>Student Form</h2>
                                            <p>Learn how to build websites &amp; apps, write code or start a business.</p>
                                        </div>
                                        <div class="form-data">
                                            <ul>
                                                <div class="input">
                                                    <li><input type="text" placeholder="Name"></li>
                                                    <li><input type="text" placeholder="Email ID"></li>
                                                    <li><input type="text" placeholder="Phone Number"></li>
                                                    <li><input type="text" placeholder="Select Course"></li>
                                                </div>
                                                <li>
                                                    <div class="gender">
                                                        <span>
                                                            <input name="gender" type="radio" value="" id="male">
                                                            <label for="male">Male</label>
                                                        </span>
                                                        <span>
                                                            <input name="gender" type="radio" value="" id="female">
                                                            <label for="female">Female</label>
                                                        </span>
                                                    </div>
                                                    <button>Submit</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="bg1" class="skrollable"></div>
                    <div id="bg2" class="skrollable"></div>
                    <div id="bg3" class="skrollable"</div>
                </div>
            </div>
        </div>
    </body>
</html>