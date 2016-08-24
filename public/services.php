<?php
$script_js = array('main.js');
require_once 'assets/common/header.inc';
?>

    <div class="jumbotron cover_img service_img">
        <div class="container" style="position: relative;">
            <?php
            require_once 'assets/common/nav.inc';
            ?>
        </div>
    </div>

    <div class="well-lg notice">
        <div class="container"><h4>..."Client Focused"... in all our markets...</h4></div>
    </div>
    <section class="well sevices">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <?php
                    require_once 'assets/common/sidebar.inc';
                    ?>
                </div>
                <div class="col-sm-9 faq">
                    <?php
                        $q_service = "SELECT * FROM services WHERE url=:url";
                        $r_service = $dbo->prepare($q_service);
                        $r_service->execute(array(':url'=>$_GET['page']));
                        $service = $r_service->fetch(PDO::FETCH_ASSOC);
                        echo $service['content'];
                    ?>
                </div>
            </div>
        </div>
    </section>


<?php
require_once 'assets/common/footer.inc';
?>