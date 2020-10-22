<?php

get_header();
the_post();

$start_time_mins = get_post_meta( get_the_ID(), 'mec_start_time_minutes', true);
if ( strlen($start_time_mins) <= 1 ) {
    $start_time_mins = "0" . $start_time_mins . get_post_meta( get_the_ID(), 'mec_start_time_ampm', true);
}
$end_time_mins = get_post_meta( get_the_ID(), 'mec_end_time_minutes', true);
if ( strlen($end_time_mins) <= 1 ) {
    $end_time_mins = "0" . $end_time_mins . get_post_meta( get_the_ID(), 'mec_end_time_ampm', true);
}

$start_time = get_post_meta( get_the_ID(), 'mec_start_time_hour', true) . ":" . $start_time_mins;
$end_time = get_post_meta( get_the_ID(), 'mec_end_time_hour', true) . ":" . $end_time_mins;

$date = get_post_meta( get_the_ID(), 'mec_start_date', true );
$date = date('jS F Y', strtotime($date));

$category = implode(",", get_terms(array('taxonomy' => 'mec_category','hide_empty' => false,)));

?>
<div class="jumbotron text-center">
    <h1><?php the_title(); ?></h1>
</div>
<div class="container pb-5">
    <hr>
    <div class="event_thumbnail">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>">
    </div>
    <hr>
    <div class="row text-center">
        <div class="col-sm-3">
            <h5>DATE</h5>
            <i class="fa fa-calendar fa-2x" aria-hidden="true"></i>
            <p><?php echo $date ?></p>
        </div>
        <div class="col-sm-3">
            <h5>START TIME</h5>
            <i class="fa fa-clock-o fa-2x" aria-hidden="true"></i>
            <p><?php echo $start_time ?></p>
        </div>
        <div class="col-sm-3">
            <h5>END TIME</h5>
            <i class="fa fa-clock-o fa-2x" aria-hidden="true"></i>
            <p><?php echo $end_time ?></p>
        </div>
        <div class="col-sm-3">
            <h5>CATEGORY</h5>
            <i class="fa fa-flag-o fa-2x" aria-hidden="true"></i>
            <p><?php echo $category ?> </p>
        </div>
    </div>
    <hr>
    <p><?php the_content(); ?></p>
    <hr>
    <div class="text-center">
        <h3>Event Hosted on Discord</h3>
        <a href="#"><img class="text-center" src="http://letslead.yourlocaldev.com/wp-content/uploads/2020/10/discord.png" style="width: 200px;"></a>
        <p>Join by clicking above!</p>
    </div>
    <hr>
</div>

<?php

get_footer();
wp_reset_postdata();

