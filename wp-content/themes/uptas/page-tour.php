<?php
/*
Template Name: Tour
*/
get_header();  ?>

<!-- we are secion -->
<div class="tour_sec">
    <div class="container">
        <div class="frm my-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="img_sec py-4">
                        <img class="img-fluid w-100 hover-fade" src="<?php the_field('hero_section_image'); ?>" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="top_form">
                        <div class="form">
                            <h2><?php the_field('form_title'); ?></h2>
                            <p class="py-3">
                                <?php the_field('form_description'); ?>
                            </p>

                            <?php echo do_shortcode('[contact-form-7 id="130" title="Get a Free Session!"]'); ?>
                            <p class="last-des">
                                I consent to the prossing of pertinal data and agree with the user agreement and privacy policy.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mid_sec">
            <div class="row section">
                <div class="col-md-8 bg-purple">
                    <div class="p-4">
                        <h2 class="text-light mb-3 fw-bold"><?php the_field('element_1_title'); ?></h2>
                        <h5 class="text-light fw-bold">
                            <?php the_field('element_1_caption'); ?>
                        </h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <img class="img-fluid" src="<?php the_field('element_1_image'); ?>" alt="">
                </div>
            </div>
            <div class="row mt-3 section">
                <div class="col-md-4">
                    <img class="img-fluid" src="<?php the_field('element_2_image'); ?>" alt="">
                </div>
                <div class="col-md-8 bg-purple">
                    <div class="p-4">
                        <h2 class="text-light mb-3 fw-bold"><?php the_field('element_2_title'); ?></h2>
                        <h5 class="text-light fw-bold"><?php the_field('element_2_caption'); ?> </h5>
                    </div>
                </div>
            </div>
            <div class="row section">
                <?php if (have_rows('tour_cards')) : ?>
                    <?php while (have_rows('tour_cards')) : the_row(); ?>
                        <div class="col-sm-6 mt-4">
                            <div class="tour_card p-3">
                                <img class="img-fluid w-100 hover-fade" src="<?php the_sub_field('image'); ?>" alt="">
                                <h5 class="py-2 fw-bold"><?php the_sub_field('title'); ?></h5>
                                <p><?php the_sub_field('caption'); ?>
                                </p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="row mt-5 section">
                <div class="col-md-8 bg-purple p-4">
                    <h2 class="text-light mb-3 fw-bold"><?php the_field('element_3_title'); ?></h2>
                    <h5 class="text-light fw-bold"><?php the_field('element_3_caption'); ?></h5>
                </div>
                <div class="col-md-4">
                    <img class="img-fluid" src="<?php the_field('element_3_image'); ?>" alt="">
                </div>
            </div>
            <div class="row mt-5 section">
                <div class="col-md-4">
                    <img class="img-fluid" src="<?php the_field('element_4_image'); ?>" alt="">
                </div>
                <div class="col-md-8 bg-purple p-4">
                    <h2 class="text-light mb-3 fw-bold"><?php the_field('element_4_title'); ?></h2>
                    <h5 class="text-light fw-bold"><?php the_field('element_4_caption'); ?></h5>
                </div>

            </div>
            <div class="row mt-4 section">
                <div class="col-sm-6">
                    <img class="img-fluid w-100" src="<?php the_field('element_5_image'); ?>" alt="">
                </div>
                <div class="col-sm-6 p-4">
                    <h2 class="text-purple mb-3 fw-bold"><?php the_field('element_5_title'); ?></h2>
                    <p>
                        <?php the_field('element_5_caption'); ?>
                    </p>
                </div>
            </div>
            <div class="row mt-4 section">
                <div class="col-sm-6 p-4">
                    <h2 class="text-purple mb-3 fw-bold"><?php the_field('element_6_title'); ?></h2>
                    <p>
                        <?php the_field('element_6_caption'); ?>
                    </p>
                </div>
                <div class="col-sm-6">
                    <img class="img-fluid w-100" src="<?php the_field('element_6_image'); ?>" alt="">
                </div>
            </div>
            <div class="row mt-4 section">
                <div class="col-sm-6">
                    <img class="img-fluid w-100 mb-3" src="<?php the_field('element_7_image'); ?>" alt="">
                    <img class="img-fluid w-100 mb-3" src="<?php the_field('element_7_image_2'); ?>" alt="">
                </div>
                <div class="col-sm-6 p-4">
                    <h2 class="text-purple mb-3 fw-bold"><?php the_field('element_7_title'); ?></h2>
                    <p>
                        <?php the_field('element_7_caption'); ?>
                    </p>
                </div>
            </div>
            <div class="row mt-4 section">
                <?php if (have_rows('tour_posts')) : ?>
                    <?php while (have_rows('tour_posts')) : the_row(); ?>
                        <div class="col-sm-6">
                            <img class="img-fluid w-100 mb-3 hover-fade" src="<?php the_sub_field('image'); ?>" alt="">
                            <h2 class="text-purple mb-3 fw-bold"><?php the_sub_field('title'); ?></h2>
                            <p><?php the_sub_field('caption'); ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <!-- TESTIMONIALS section -->
            <?php get_template_part('testimonials'); ?>
            <!-- TESTIMONIALS section -->

            <!--form section  -->

        </div>
    </div>
    <div class="bg-purple section">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="top_form">
                    <div class="form">
                        <h2><?php the_field('form_title'); ?></h2>
                        <p class="py-3">
                            <?php the_field('form_description'); ?>
                        </p>
                        <?php echo do_shortcode('[contact-form-7 id="130" title="Get a Free Session!"]'); ?>
                        <p class="last-des">
                            I consent to the prossing of pertinal data and agree with the user agreement and privacy policy.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>