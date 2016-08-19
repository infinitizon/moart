<?php
$script_js = array('main.js');
require_once 'assets/common/header.inc';
?>

<div class="jumbotron cover_img about_img">
    <div class="container">
        <?php
        require_once 'assets/common/nav.inc';
        ?>
    </div>
</div>

    <div class="well-lg notice">
        <div class="container"><h4>...together creating a desired future</h4></div>
    </div>
    <section class="well sevices">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h4 style="border-bottom:1px dotted #CCC; margin-bottom:10px;">Latest news</h4>
                    <?php
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
                    ?>
                    <h4 style="border-bottom:1px dotted #CCC; margin:10px 0;">Downloads</h4>
                </div>
                <div class="col-sm-9">
                    <h1>About Us</h1>
                    Moart Company Limited is a firm incorporated by the Nigerian Corporate Affairs Commission in the year 2009 and has its objects and investment in
                    the areas of:
                    <ul>
                        <li>Real Estate Management</li>
                        <li>Construction Support</li>
                        <li>Agriculture</li>
                    </ul><br/>
                    <p>Moart is a diversified, full service real estate firm active in the marketing, development, and   facilities   management   of   industrial,   agricultural   and
                    retail   properties.   The   firm’s   industrial   and   retail   office   have   been consistent and active in the Ibeju-Lekki, Eti-Osa, Epe and Abeokuta area
                    of Nigeria with consistent growth being achieved each year.</p>
                    <p>Moart believes firmly in aggressive pursuit of the client’s needs. We work continually to interpret and act upon economic forces in the marketplace.
                    And with every transaction, we stress creative problem-solving coupled with judicious application of sound real estate principles.</p>
                    <blockquote><p><em>Moart is a "Client Focused" organization   that represents the best interests of our clients in all markets while maintaining the continuity of a single individual level contact.</em></p></blockquote>
                    <p>We do not loose sight of our "Client" commitment and furthermore, we continually strive to achieve greater client satisfaction by securing client
                    objectives   that   exceed   market norms. The success of our approach is evidenced by our track record of ongoing relationships with clients across the nation</p>
                    The strength of Moart is its people, the concentration of seasoned real estate professionals with diverse specialties, supported by committed staffand cutting edge analytical systems

                    <h3>Vision</h3>
                    To create an enduring legacy for a desired future
                    <h3>Mission Statement</h3>
                    The mission of Moart Company Limited is to create a portfolio of income producing real estate and agricultural assets that is focused at financial
                    independence and ultimately produce supplemental retirement income to our clients the owners.

                    <h3>Culture</h3> Teamwork, Creativity, Courage, Growth
                    <h3>Objectives</h3>
                    The following are the main objectives for Moart Company Limited:
                    <ul>
                        <li>To manage real estate investments from identifying potential properties, to evaluation, to acquisition, and to final sale or disposition.</li>
                        <li>In the area of agriculture,we set up and consult for our clients the are new to this sector.</li>
                        <li>To manage the renovation or rehabilitation activities of newly acquired residential properties.</li>
                        <li>To manage the residential properties that are rented and held for the longer term.</li>
                        <li>To invest in undervalued residential real estate properties for the purpose of renovating or rehabilitation and then immediate resale, or to hold and rent properties, generating monthly income while obtaining market value appreciation over a longer period.</li>
                    </ul>
                    <h3>Values</h3>
                    <ul>
                        <li>Integrity</li>
                        <li>Creativity</li>
                        <li>Quality Service</li>
                        <li>Partnership</li>
                    </ul>
                    <h3>Keys Success</h3>
                    The key successes of Moart Company over the years are:
                    <ul>
                        <li>Acquisition of land</li>
                        <li>Acquisition of agricultural land, set up and management of same</li>
                        <li>Our ability to work out a comfortable payment plan with our clients by ensuring we work with their budgets</li>
                        <li>We   also   undertake   to   help   our   Clients   get   the   requisite   legal documentation for their property with the help of our legal team.</li>
                        <li>Acquisition of undervalued residential properties.</li>
                        <li>Complete the renovation or rehabilitation work within the scheduled time and within the budgeted amount</li>
                        <li>Recognize buying opportunities on specific properties that would provide the option to immediately resell selected renovated or rehabilitated properties upon completion for short term gain.</li>
                    </ul>
                    Real Estates Sector in Nigeria
                    The real estate sector is a critical sector of our economy. It has a huge multiplier effect on the economy and therefore, is a big driver of economic
                    growth.   It   is   the   second-largest   employment-generating   sector   after agriculture. Not only does it generate a high level of direct employment,
                    but it also stimulates the demand in over 250 ancillary industries such as cement, steel, paint, brick, building materials, consumer durables and so on.
                    <h3>The Challenges</h3>
                    The key challenges that the Nigerian real estate industry is facing today are:
                    <ul>
                        <li>Lack of clear land titles</li>
                        <li>Disputes on land matters</li>
                        <li>Absence of title insurance</li>
                        <li>Absence of industry status</li>
                        <li>Lack of adequate funding</li>
                        <li>Inadequate manpower and rising cost of  materials</li>
                        <li>Approvals and procedural difficulties</li>
                    </ul>
                    <h3>Looking Ahead</h3>
                    Notwithstanding these challenges, in the coming years, the opportunities
                    in the real estate sector will attract more global players to Nigeria and hence will help the industry to mature, become more transparent, improve management and adopt advanced construction techniques.
                    Moart, being aware of the current economic move and expansion in the country and with a vision of a new largely industrialized Nigeria, is therefore strategically positioning herself to create the awareness and
                    putting modalities in place that affords every Nigerian, both young and old the opportunity to be part of the growing economy of Nigeria.
                </div>
            </div>
        </div>
    </section>
<?php
require_once 'assets/common/footer.inc';
?>