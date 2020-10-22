<?php

get_header();
the_post();

?>

<div id="homeContent">
    <div class="container">
        <div class="landing-div">
            <h2 class="animate__animated animate__fadeInLeft">LEADING CHANGE</h2>
            <h1 class="animate__animated animate__fadeInLeft animate__delay-1s">JOIN OUR <span>COMMUNITY</span></h1>
            <p class="animate__animated animate__fadeInLeft animate__delay-2s">Bringing our community together during this uncertain time. We host community based events and gaming nights. Everyone is welcome.</p>
            <h3 class="landing-gap text-center">COLLABORATING WITH THESE AMAZING PEOPLE:</h3>
        </div>
    </div>
    <div class="jumbotron text-center">
        <div class="row align-items-center">
            <div class="col-sm">
                <img src="https://letslead.yourlocaldev.com/wp-content/uploads/2020/10/fake-logo1.png" style="width:200px;">
            </div>
            <div class="col-sm">
                <img src="https://letslead.yourlocaldev.com/wp-content/uploads/2020/10/fake-logo2.png" style="width:200px;">
            </div>
            <div class="col-sm">
                <img src="https://letslead.yourlocaldev.com/wp-content/uploads/2020/10/fake-logo3.png" style="width:200px;">
            </div>
            <div class="col-sm">
                <img src="https://letslead.yourlocaldev.com/wp-content/uploads/2020/10/fake-logo4.png" style="width:200px;">
            </div>
            <div class="col-sm">
                <img src="https://letslead.yourlocaldev.com/wp-content/uploads/2020/10/fake-logo5.png" style="width:200px;">
            </div>
            </div>
    </div>
    <div class="about-div text-center">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="about-header">
                    <img id="homeLogo" src="https://letslead.yourlocaldev.com/wp-content/uploads/2020/10/logo.png" style="width:300px" class="">
                    <h1 class="mb-5"><span>WHO</span> ARE WE?</h1>
                    <h5>We are a collective of people from all parts of the world who has something in common. We all love games. Our goal is to create a
                    community that is welcome to all.</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 px-3">
                    <div class="row-content">
                        <div class="">
                            <i class="fa fa-calendar fa-4x mb-2" aria-hidden="true"></i>
                            <h4 class="text-center">Host Events</h4>
                        </div>
                        <hr>
                        <p>We host events every day, they can include film nights, gaming events and livestreams.</p>
                    </div>
                </div>
                <div class="col-lg-4 px-4">
                    <div class="row-content">
                        <div class="">
                            <i class="fa fa-trophy fa-4x mb-2" aria-hidden="true"></i>
                            <h4 class="text-center">eSports Tournaments</h4>
                        </div>
                        <hr>
                        <p>Ever wanted to take part in a eSport Tournament? Look no further. We host fortnightly eSports Tournaments in all the leading eSports titles.</p>
                    </div>
                </div>
                <div class="col-lg-4 px-4">
                    <div class="row-content">
                        <div class="">
                            <i class="fa fa-gamepad fa-4x mb-2" aria-hidden="true"></i>
                            <h4 class="text-center">Game Nights</h4>
                        </div>
                        <hr>
                        <p>Looking for something more casual? We host daily game nights for all variety of games.</p>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="about-footer">
                    <h5>Still not sure? Or want to learn more about us?</h5>
                    <a class="info-button" href="/about">FIND OUT MORE HERE</a>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron text-center">
        <h1>OUR <span>EVENTS</span></h1>
    </div>
    <div class="container pb-4">
        <div class="events-div">
            <div class="row text-center">
                <?php

                $args = array(
                    'post_type' => 'mec-events',
                    'post_per_page' => 3,
                );

                $the_query = new WP_Query( $args );

                while ($the_query->have_posts()) : $the_query->the_post();

                    $date = get_post_meta( get_the_ID(), 'mec_start_date', true );
                    $date = date('jS F Y', strtotime($date));
                    $start_time_mins = get_post_meta( get_the_ID(), 'mec_start_time_minutes', true);
                    if ( strlen($start_time_mins) <= 1 ) {
                        $start_time_mins = "0" . $start_time_mins . get_post_meta( get_the_ID(), 'mec_start_time_ampm', true);
                    }
                    $start_time = get_post_meta( get_the_ID(), 'mec_start_time_hour', true) . ":" . $start_time_mins;

                ?>
                <div class="col-sm-4 mb-2 mt-2">
                    <div class="card p-2">
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo $date ?> @ <?php echo $start_time ?></p>
                        <div class="img-card">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" style="width: 100%; height: auto;" class="pb-2">
                        </div>
                        <a class="info-button" href="<?php echo get_post_permalink(); ?>">VIEW HERE</a>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
    <div class="jumbotron text-center">
        <h1><span>JOIN</span> TODAY</h1>
    </div>
    <div class="join-div text-center">
        <div class="container">
            <h2>ITS SIMPLE</h2>
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <div class="d-flex justify-content-center mb-2">
                        <div class="join-card">
                            <i class="fa fa-headphones fa-4x p-5" aria-hidden="true"></i>
                        </div>
                    </div>
                    <h5>JOIN OUR DISCORD</h5>
                    <p>Simple <span>Join Our Discord</span></p>
                </div>
                <div class="col-sm-4">
                    <div class="d-flex justify-content-center mb-2">
                        <div class="join-card">
                            <i class="fa fa-thumbs-up fa-4x p-5" aria-hidden="true"></i>
                        </div>
                    </div>
                    <h5>GET APPROVED BY OUR MOD TEAM</h5>
                    <p>Click <span>#Access Channel</span> and <span>Accept Our Rules</span></p>
                </div>
                <div class="col-sm-4">
                    <div class="d-flex justify-content-center mb-2">
                        <div class="join-card">
                            <i class="fa fa-check fa-4x p-5" aria-hidden="true"></i>
                        </div>
                    </div>
                    <h5>JOIN IN AND CONNECT</h5>
                    <p>You are now a <span>LetsLead Member</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

get_footer();
wp_reset_postdata();
