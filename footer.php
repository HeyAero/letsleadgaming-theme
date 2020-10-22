<footer>
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-4">
                <img src="https://letslead.yourlocaldev.com/wp-content/uploads/2020/10/logo.png" style="width:100px">
                <p>Lets Lead Gaming - A Community Promoting Diversity & is Welcome to All.</p>
            </div>
            <div class="col-sm-4">
                <h5>Useful Links</h5>
                <hr>
                <ul>
                    <li><a href="/home">Homepage</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/events">Events</a></li>
                    <li><a href="/contact">Contact Us</a></li>
                    <li><a href="#">Our Discord</a></li>
                </ul>
            </div>
            <div class="col-sm-4">
                <h5>Events</h5>
                <hr>
                <ul>
                <?php

                    $args = array(
                        'post_type' => 'mec-events',
                        'post_per_page' => 3,
                    );

                    $the_query = new WP_Query( $args );

                    while ($the_query->have_posts()) : $the_query->the_post();

                        $date = get_post_meta( get_the_ID(), 'mec_start_date', true );
                        $date = date('jS M', strtotime($date));
                        $start_time_mins = get_post_meta( get_the_ID(), 'mec_start_time_minutes', true);
                        if ( strlen($start_time_mins) <= 1 ) {
                            $start_time_mins = "0" . $start_time_mins . get_post_meta( get_the_ID(), 'mec_start_time_ampm', true);
                        }
                        $start_time = get_post_meta( get_the_ID(), 'mec_start_time_hour', true) . ":" . $start_time_mins;
                        $footer_link = get_the_title() . " - " . $date . ' @ ' . $start_time;
                ?>
                        <li><a href="<?php echo get_post_permalink(); ?>"><?php echo $footer_link; ?></a></li>
                <?php
                    endwhile;
                    wp_reset_postdata();
                ?>
                </ul>
            </div>
        </div>
        <div class="d-flex justify-content-around align-items-center">
            <div class="social-links">
                <a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitch fa-2x" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-phone fa-2x" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>

    <?php wp_footer(); ?>

</footer>
</body>
</html>