<?php
$script_js = array('main.js');
require_once 'assets/common/header.inc';
?>

<div class="jumbotron cover_img news_img">
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
                <h4 style="border-bottom:1px dotted #CCC; margin:10px 0;">Downloads</h4>
            </div>
            <div class="col-sm-9">
                <?php

                    $getNews = "SELECT news_id, news_title, news_details, create_date FROM news ";
                    if(!$_GET['page'] && $_GET['news']){
                        $getNews .= " WHERE news_id = ".$_GET['news'];
                        $q_getNews=$dbo->query($getNews);
                        $r_getNews = $q_getNews->fetch(PDO::FETCH_ASSOC);

                        if(count($r_getNews)>0){
                            $news = "<h3>{$r_getNews['news_title']}</h3>";
                            $news .= "{$r_getNews['news_details']}";
                        }else{
                            $news = "There is a problem loading news item. Please contact admin.";
                        }
                        echo $news;
                    }else{
                        $getNews .= " ORDER BY news_id DESC";
                        $getNews_c = $dbo->query("SELECT COUNT(*) count from news")->fetchColumn();

                        // How many items to list per page
                        $limit = 2;
                        // How many pages will there be
                        $pages = ceil($getNews_c / $limit);
                        // What page are we currently on?
                        $page = min($pages, filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT, array(
                            'options' => array(
                                'default'   => 1,
                                'min_range' => 1,
                            ),
                        )));
                        // Calculate the offset for the query
                        $offset = ($page - 1)  * $limit;
                        // Some information to display to the user
                        $start = $offset + 1;
                        $end = min(($offset + $limit), $getNews_c);
                        // The "back" link
                        $prevlink = ($page > 1) ? '<a href="?page=1" title="First page">&laquo;</a> <a href="?page=' . ($page - 1) . '" title="Previous page">&lsaquo;</a>' : '<span class="disabled">&laquo;</span> <span class="disabled">&lsaquo;</span>';
                        // The "forward" link
                        $nextlink = ($page < $pages) ? '<a href="?page=' . ($page + 1) . '" title="Next page">&rsaquo;</a> <a href="?page=' . $pages . '" title="Last page">&raquo;</a>' : '<span class="disabled">&rsaquo;</span> <span class="disabled">&raquo;</span>';

                        // Display the paging information
                        echo '<div id="paging"><p>', $prevlink, ' Page ', $page, ' of ', $pages, ' pages, displaying ', $start, '-', $end, ' of ', $getNews_c, ' results ', $nextlink, ' </p></div>';
                        // Prepare the paged query
                         ;
                        $stmt = $dbo->prepare($getNews.' LIMIT :limit OFFSET :offset');

                        // Bind the query params
                        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
                        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
                        $stmt->execute();

                        // Do we have any results?
                        if ($stmt->rowCount() > 0) {
                            // Define how we want to fetch the results
                            $stmt->setFetchMode(PDO::FETCH_ASSOC);
                            $iterator = new IteratorIterator($stmt);
                            // Display the results
                            $news = "<ul id=\"newsLists\">";
                            foreach ($iterator as $details) {
                                $readMoreLink = "<a href=\"" . WEB_ROOT . "/news-and-events/{$details['news_id']}\" id=\"{$details['news_id']}\">";
                                $newsLink = $fxns->_readMore(strip_tags(html_entity_decode($details['news_details'])), 45, $readMoreLink);
                                $news .= "<li>{$readMoreLink}";
                                $news .= "<img src=\"" . (!empty($details['image']) ? $details['image'] : WEB_ROOT.'/images/img_not_available.png') . "\" class=\"img-responsive img-thumbnail\" />";
                                $news .= "{$details['news_title']}</a><br /><span>{$newsLink}</span></li>";
                            }
                            $news .= "</ul>";
                            echo $news;

                        } else {
                            echo '<p>No results could be displayed.</p>';
                        }

                    }
                ?>
            </div>
        </div>
    </div>
</section>


<?php
require_once 'assets/common/footer.inc';
?>