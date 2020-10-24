<?php

get_header();
the_post();

?>

<div class="contact-form">
    <div class="container text-center">
        <h1>CONTACT US</h1>
        <p>If you need to get in touch, enter your message here or message us in the Discord Group.</p>
        <form>
            <div class="form-group">
                <input type="text" class="form-control" id="nameInput" placeholder="Your Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="discordID" placeholder="Your Discord ID">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="messageInput" placeholder="Your Message">
            </div>
        </form>
        <a class="send-button">SEND</a>
    </div>
</div>

<?php

get_footer();
wp_reset_postdata();
