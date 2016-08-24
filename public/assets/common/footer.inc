    <footer>
        <div class="container">
            <div class="row" style="padding-top:20px;">
                <div class="col-sm-4">
                    <ul>
                        <li><a href="<?php echo WEB_ROOT; ?>">Home</a></li>
                        <li><a href="<?php echo WEB_ROOT; ?>/about">About Us</a></li>
                        <li><a href="<?php echo WEB_ROOT; ?>/contact">Contact us</a></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <a class="fa fa-facebook fa-3x" href="https://facebook.com/moart-company-ltd-312563375747434" target="_blank"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="fa fa-twitter fa-3x" href=""></a>
                </div>
                <div class="col-sm-4">
                    <h3 style="margin-bottom: 10px;">Subscribe to our Newsletter</h3>
                    <form role="search" method="post" action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter your email address" name="newsletter" id="newsletter">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit" name="new_newsletter"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <hr>
            <p class="pull-right">&copy; 2016 infinitizon. All rights reserved</p>
            <p>Privacy Policy | <a href="<?php echo WEB_ROOT; ?>/services/faqs">FAQs</a> | <a href="http://webmail.moartcompanyltd.com/">webmail</a> </p>
        </div>
    </footer>
    <script src="<?php echo WEB_ROOT; ?>/scripts/jquery-ui/1.12.0/external/jquery/jquery.js" type="text/javascript"></script>
    <script src="<?php echo WEB_ROOT; ?>/scripts/bootstrap/3.3.7/js/bootstrap.js" type="text/javascript"></script>
    <script src="<?php echo WEB_ROOT; ?>/scripts/jquery-ui/1.12.0/jquery-ui.js" type="text/javascript"></script>
    <?php
    if($script_js){
        foreach ( $script_js as $js ){
    ?>
        <script src="<?php echo WEB_ROOT; ?>/scripts/<?php echo $js; ?>" type="text/javascript"></script>
    <?php
        }
    }
    if($alertMessage){
        echo "<div id=\"dialog-confirm\" title=\"Message\"><p class=\"text-{$alertMessage['type']}\"><span class=\"fa fa-info-circle\"></span> {$alertMessage['message']}</p></div>";
    }
    ?>
</body>
</html>
