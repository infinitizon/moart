<?php
$script_js = array('jquery.validationEngine.js','jquery.validationEngine-en.js','main.js');
$style_css = array('validationEngine.jquery.css');

require_once 'assets/common/header.inc';
?>

<div class="jumbotron cover_img contact_img">
    <div class="container">
        <?php
        require_once 'assets/common/nav.inc';
        ?>
    </div>
</div>
<div class="well-lg" style="margin-bottom: 0px;">
    <div class="container">
        <form method="post" action="" id="contact-form" name="contact-form" role="form">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name" required>
            </div>
            <div class="form-group">
                <label for="telephone">Telephone:</label>
                <input type="number" class="form-control validate[maxSize[12]]" id="telephone" name="telephone" placeholder="07060000001 - (No dashes, spaces, etc. Only digits)" required>
            </div>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="text" class="form-control validate[custom[email]]" id="email" name="email" placeholder="someone@somewhere.com">
            </div>
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter a subject" required>
            </div>
            <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Contact Us">
        </form>
    </div>
</div>

<div class="well" style="padding:40px; margin-bottom:0;">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6552.997987131354!2d3.427153535652246!3d6.453170055278176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf4cbffffffff%3A0xd825b4789f9221b9!2sibeju+lekki!5e0!3m2!1sen!2sng!4v1471449292515" width="100%" frameborder="0" style="border:0; min-height:400px;" allowfullscreen></iframe>
            </div>
            <div class="col-sm-3">
                <h3><i class="fa fa-phone" aria-hidden="true"></i></h3>  (+234)7059561421, (+234)8150849680<br/><br/>
                <h3><i class="fa fa-envelope-o" aria-hidden="true"></i></h3> info@moartcompany.com, moartcompanyltd@gmail.com<br/><br/>
                <h3><i class="fa fa-home" aria-hidden="true"></i></h3>
                Block B, Suite 33<br/>
                Km 36, Lekki Epe Expressway,<br/>
                Mayfair Shopping Complex,<br/>
                Awoyaya,<br/>Ibeju-lekki,Lagos.
            </div>
        </div>
    </div>
</div>
<?php
require_once 'assets/common/footer.inc';
?>