<?php
    if (strpos($_SERVER["REQUEST_URI"], 'news-and-events') === false) {
        echo "<h4 style=\"border-bottom:1px dotted #CCC; margin:10px 0;\">Latest news</h4>";

        $getNews = "SELECT news_id, news_title, news_details, create_date FROM news ORDER BY news_id DESC LIMIT 5";
        $getNews = $fxns->_execQuery($getNews);
        $news = "<ul id=\"ticker\">";
        foreach ($getNews as $assocKey => $details) {
            $readMoreLink = "<a href=\"" . WEB_ROOT . "/news-and-events/{$details['news_id']}\" id=\"{$details['news_id']}\">";
            $newsLink = $fxns->_readMore(strip_tags(html_entity_decode($details['news_details'])), 45, $readMoreLink);
            $news .= "<li>{$readMoreLink}";
            $news .= "<img src=\"" . (!empty($details['image']) ? $details['image'] : WEB_ROOT.'/images/img_not_available.png') . "\" class=\"img-responsive img-thumbnail\" />";
            $news .= "{$details['news_title']}</a><br /><span>{$newsLink}</span></li>";
        }
        $news .= "</ul>";
        echo $news;
    }
?>
<h4 style="border-bottom:1px dotted #CCC; margin:20px 0;">Downloads</h4>
<ul>
    <li><a href="/assets/downloads/subscription.jpg">Subscription form</a></li>
</ul>
<h4 style="border-bottom:1px dotted #CCC; margin:20px 0;">Feeds</h4>
<!--https://developers.facebook.com/docs/plugins/page-plugin-->
<div class="fb-page" data-href="https://www.facebook.com/moart-company-ltd-312563375747434" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/moart-company-ltd-312563375747434" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/moart-company-ltd-312563375747434">MOART Company Ltd.</a></blockquote></div>

