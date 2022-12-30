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
<div class="container">
    <div class="sign_up">
        <a href="<?php the_field('sign_up_button'); ?>" target="_blank" class="btn btn-primary">Sign Up</a>
    </div>
</div>
<div class="review section">
    <div class="container">
        <?php echo do_shortcode('[grw id="417"]'); ?>
        <!-- new custom fields -->
        <div class="revw_sec p-5">
            <?php if (have_rows('google_reviews')) : ?>
                <?php while (have_rows('google_reviews')) : the_row();  ?>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="img_sec">
                                <img class="img-fluid m-3" src="<?php the_sub_field('image'); ?>" alt="">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="rew_sec">
                                <div class="nme">
                                    <p class="text-secondary fw-bold mb-1"><?php the_sub_field('name'); ?></p>
                                    <div class="row">
                                        <div class="col-10">
                                            <p>“<?php the_sub_field('caption'); ?>”</p>
                                        </div>
                                        <div class="col-2 text-end">
                                            <a class="btn btn-sm text-small" href="<?php echo get_home_url(); ?>/contact-us/#contact_sec"><img src="<?php echo get_template_directory_uri(); ?>/inc/img/sign-up-button-50.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="desc my-3 p-3">
                                        <?php the_sub_field('description'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;


            else :

            endif;
            ?>

        </div>
        <!-- new custom fields -->
    </div>

</div>


<?php get_footer(); ?>