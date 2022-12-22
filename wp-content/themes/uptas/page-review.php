<?php
/*
Template Name: Review
*/
get_header();  ?>

<!-- Banner Start -->
<?php get_template_part('inner-banner'); ?>
<!-- Banner Wrapper End -->
<!-- we are secion -->
<div class="review_top py-4 text-center">
    <h2>WHY WE ARE BEST AT TEACHING</h2>
</div>
<div class="sign_up">
    <a href="<?php the_field('sign_up_button'); ?>" class="btn btn-primary">Sign Up</a>
</div>
<div class="review section">
    <div class="container">
        <?php echo do_shortcode('[grw id="417"]'); ?>
    </div>
</div>


<?php get_footer(); ?>