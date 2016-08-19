<nav class="navbar navbar-default">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo WEB_ROOT; ?>"><img src="<?php echo WEB_ROOT; ?>/images/logo2.jpg" class="logo" /> </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo WEB_ROOT; ?>">Home</a></li>
            <li><a href="<?php echo WEB_ROOT; ?>/about">About Us</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Our Services<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo WEB_ROOT; ?>/services/estates">Real Estate</a></li>
                    <li><a href="<?php echo WEB_ROOT; ?>/services/agric">Agriculture</a></li>
                    <li><a href="<?php echo WEB_ROOT; ?>/services/construction">Construction</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Media <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo WEB_ROOT; ?>/news-and-events/">News</a></li>
                    <li><a href="#">Downloads</a></li>
                </ul>
            </li>
            <li><a href="<?php echo WEB_ROOT; ?>/contact">Contact us</a></li>
        </ul>
    </div>
</nav>