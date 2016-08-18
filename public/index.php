<?php
require_once 'assets/common/header.inc';
?>
    <div class="jumbotron cover_img main_img">
        <div class="container">
            <?php
            require_once 'assets/common/nav.inc';
            ?>
        </div>
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
    <section class="featured-seller">
        <div class="container text-center">
            <div class="featured-seller-img"><img src="<?php echo WEB_ROOT; ?>/images/clients/chevron.png" class="img-responsive"></div>
            <div class="featured-seller-img"><img src="<?php echo WEB_ROOT; ?>/images/clients/firstBank.png" class="img-responsive"></div>
            <div class="featured-seller-img"><img src="<?php echo WEB_ROOT; ?>/images/clients/kpmg.png" class="img-responsive"></div>
            <div class="featured-seller-img"><img src="<?php echo WEB_ROOT; ?>/images/clients/bollore.jpg" class="img-responsive"></div>
            <div class="featured-seller-img"><img src="<?php echo WEB_ROOT; ?>/images/clients/unionBank.png" class="img-responsive"></div>
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
<?php
require_once 'assets/common/footer.inc';
?>