<?php
require_once 'core/init.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Moart</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="scripts/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="styles/main.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="jumbotron main_img">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo WEB_ROOT; ?>"><img src="images/logo2.jpg" class="logo" /> </a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#band">About Us</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Our Services<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Real Estate</a></li>
                                <li><a href="#">Agriculture</a></li>
                                <li><a href="#">Construction</a></li>
                            </ul>
                        </li>
                        <li><a href="#tour">Contact us</a></li>

                        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
<!--   <img src="images/bg.jpg" class="bg_img" />   -->

    </div>
    <div class="well-lg notice">
        <div class="container"><h4>Be the best by discussing with the proffessionals...</h4></div>
    </div>
    <section class="well sevices">
        <div class="container">
            <div class="row text-center">
                <article class="col-sm-4">
                    <div class="img-circle img-responsive"><img src="images/houseSearch.png" width="70" height="70"  /></div>
                    <h3>Real Estate</h3>
                    <p class="text-justify">Searching for the perfect property is now made easy, whether for residential or commercial purposes, a house, a flat, a plot of land, commercial space, or properties for development, Moart Has got you all covered</p>
                </article>
                <article class="col-sm-4">
                    <div class="img-circle img-responsive"><img src="images/agric.png" width="70" height="70"  /></div>
                    <h3>Agriculture</h3>
                    <p class="text-justify">MOART is a major player in the federal government's drive to enhance local content and improve the agricultural sector in Nigeria. We have therefore invested in the last few years in livestock, vegetable farming and horticulture </p>
                </article>
                <article class="col-sm-4">
                    <div class="img-circle img-responsive"><img src="images/construction.png" width="70" height="70"  /></div>
                    <h3>Construction Support</h3>
                    <p class="text-justify">Moart is your one stop shop for construction related materials. From providing building materials to supplies of construction equipments. Moart is the A-Z of all your construction needs </p>
                </article>
            </div>
        </div>
    </section>
    <section class="feedback">
        <div class="container text-center">
            <h2>What our customers say</h2>
            <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <h4>"This company is the best real estate company I've seen. They make the whole thing so easy!"<br><span style="font-style:normal;">Emeka Anyaokwu, Vice President, Levante Box</span></h4>
                    </div>
                    <div class="item">
                        <h4>"One word... WOW!!"<br><span style="font-style:normal;">Simon Dalong, Salesman, Beverly Crane Nig. Ltd.</span></h4>
                    </div>
                    <div class="item">
                        <h4>"Could I... BE any more happy with this company? They make the construction of my home so stressless"<br><span style="font-style:normal;">Abimbola Hassan, Application developer, QuickAdverts</span></h4>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row" style="padding-top:20px;">
                <div class="pull-right">
                    <a class="fa fa-facebook fa-3 text-muted" href=""></a>
                    <a class="fa fa-twitter fa-3 text-muted" href=""></a>
                </div>
                <div>
                    <a class="text-muted" href="/">Home</a>
                    <a class="text-muted" href="contact.php">Contact Us</a>
                </div>
            </div>
            <hr>
            <p class="pull-right">© 2016 infinitizon. All rights reserved</p>
            <p>Privacy</p>
        </div>
    </footer>
    <script src="scripts/jquery-ui/1.12.0/external/jquery/jquery.js" type="text/javascript"></script>
    <script src="scripts/bootstrap/3.3.7/js/bootstrap.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui/1.12.0/jquery-ui.js" type="text/javascript"></script>
</body>
</html>
