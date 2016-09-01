<?php
$script_js = array('bootstrap/bootstrap-select/1.11.0/bootstrap-select.min.js','ticker.js','main.js');
$style_css = array('bootstrap-select/1.11.0/bootstrap-select.min.css','ticker.css');


require_once 'assets/common/header.inc';
?>
<style>
    /* CUSTOMIZE THE NAVBAR FOR THE INDEX -> http://www.bootply.com/93060
    -------------------------------------------------- */
    /* Special class on .container surrounding .navbar, used for positioning it into place. */
    .navbar-wrapper {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        z-index: 10;
    }
    .carousel-control.left, .carousel-control.right{
        background: none !important;
        filter: progid:none !important;
    }
</style>
<div class="navbar-wrapper">
    <div class="container">
        <?php
        require_once 'assets/common/nav.inc';
        ?>
    </div>
</div>
<!--  Carousel Begins  -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
<!--   <img src="http://placehold.it/1920x600/02809E/18D18F" class="img-responsive" width="100%" alt="Chania">    -->
                <img src="/images/carousel/1.jpg" class="img-responsive" width="100%" height="451" alt="Chania">
                <div class="carousel-caption">
                    <h3>Affordable Homes</h3>
                    <p style="color:rgba(24, 153, 213, 1); font-size:1.5em;">The philosophy driving us is helping you to own that dream home you've always desired. <br>MOART HOMES, is as much a passion as it is a business. That’s why we have continually led the industry in offering high quality real estate services to our clients. </p>
                </div>
            </div>
            <div class="item">
                <img src="/images/carousel/3.jpg" class="img-responsive" width="100%" height="451"  alt="Chania">
            </div>

            <div class="item">
                <img src="/images/carousel/4.jpg" class="img-responsive" width="100%" height="451"  alt="Chania">
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
<!--  Carousel Ends  -->

    <div class="well notice">
        <div class="container"><h4 style="color:#FFF;">Be the best by discussing with the proffessionals...</h4></div>
    </div>
    <section class="well sevices">
        <div class="container">
            <div class="row">
                <?php
                // Source: http://www.jqueryscript.net/animation/Mobile-friendly-News-Ticker-with-jQuery-CSS3-Responsive-Ticker.html
                    $q_getNews = "SELECT * FROM news ORDER BY news_id DESC LIMIT 5";
                    $r_getNews = $dbo->prepare($q_getNews);
                    $r_getNews->execute(array());
                    echo "<div class=\"ticker-container\"><div class=\"ticker-caption\"><p>Latest News</p></div><ul>";
                    while ($news = $r_getNews->fetch(PDO::FETCH_ASSOC)) {
                        echo "<div><li class=\"news-item\"><span><a href=\"" . WEB_ROOT . "/news-and-events/{$news['news_id']}\">{$news['news_title']}</a></span></li></div>";
                    }
                    echo "</ul>";
                ?>
            </div>
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
            <hr class="style">
            <div class="row text-center">
                <article class="col-sm-3">
                    <img src="images/estates/new/1.jpg" class="img-thumbnail img-responsive">
                </article>
                <article class="col-sm-3">
                    <img src="images/estates/new/2.jpg" class="img-thumbnail img-responsive" style="width:300px; max-height: 200px;">
                </article>
                <article class="col-sm-3">
                    <img src="images/estates/new/3.jpg" class="img-thumbnail img-responsive">
                </article>
                <article class="col-sm-3">
                    <img src="images/estates/new/4.jpg" class="img-thumbnail img-responsive">
                </article>
            </div>
        </div>
    </section>
    <section class="featured-seller">
        <div class="container text-center">
            <div class="row">
                <div class="featured-seller-img col-lg-3"><img src="<?php echo WEB_ROOT; ?>/images/clients/chevron.png" class="img-responsive"></div>
                <div class="featured-seller-img col-lg-3"><img src="<?php echo WEB_ROOT; ?>/images/clients/firstBank.png" class="img-responsive"></div>
                <div class="featured-seller-img col-lg-3"><img src="<?php echo WEB_ROOT; ?>/images/clients/kpmg.png" class="img-responsive"></div>
                <div class="featured-seller-img col-lg-3"><img src="<?php echo WEB_ROOT; ?>/images/clients/unionBank.png" class="img-responsive"></div>
            </div>
        </div>
    </section>
    <section class="feedback">
        <div class="container text-center">
            <h2 style="color: #000;">What our customers say</h2>
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
                        <h4 style="color: #000;">"This company is the best real estate company I've seen. They make the whole thing so easy!"<br><span style="font-style:normal;">Emeka Anyaokwu, Vice President, Levante Box</span></h4>
                    </div>
                    <div class="item">
                        <h4 style="color: #000;">"One word... WOW!!"<br><span style="font-style:normal;">Simon Dalong, Salesman, Beverly Crane Nig. Ltd.</span></h4>
                    </div>
                    <div class="item">
                        <h4 style="color: #000;">"Could I... BE any more happy with this company? They make the construction of my home so stressless"<br><span style="font-style:normal;">Abimbola Hassan, Application developer, QuickAdverts</span></h4>
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
<?php
require_once 'assets/common/footer.inc';
?>

