<div class="testi section" id="testi">
    <div class="container">
        <div class="testi-heading text-center">
            <h4><?php the_field('heading_1'); ?></h4>
            <h2><?php the_field('heading_2'); ?></h2>
            <p><?php the_field('paragraph'); ?></p>
            <div id="borderbottom"></div>
        </div>
        <div class="testi-content py-3">
            <div class="owl-carousel owl-theme">
                <?php
                $args = array(
                    'post_type' => 'testimonials',
                    'post_status' => 'publish',
                    'posts_per_page' => 8,
                    'orderby' => 'rand',
                    'order' => 'ASC',
                );

                $loop = new WP_Query($args);

                while ($loop->have_posts()) : $loop->the_post(); ?>
                    <div class="item">
                        <div class="content">
                            <table>
                                <tr>
                                    <td class="p-3">
                                        <?php if (get_field('customer_image')) : ?>
                                            <img class="owl_img" src="<?php the_field('customer_image'); ?>" alt="" />
                                        <?php endif; ?>

                                    </td>
                                    <td class="p-3">
                                        <span class="owl_cap"><?php the_title(); ?></span>
                                        <?php
                                        $ratingstar = (int) get_field('rating');

                                        if ($ratingstar == 1) {
                                            echo '<span>&#11088;</span>';
                                        } elseif ($ratingstar == 2) {
                                            echo '<span>&#11088;</span><span>&#11088;</span>';
                                        } elseif ($ratingstar == 3) {
                                            echo '<span>&#11088;</span><span>&#11088;</span><span>&#11088;</span>';
                                        } elseif ($ratingstar == 4) {
                                            echo '<span>&#11088;</span><span>&#11088;</span><span>&#11088;</span><span>&#11088;</span>';
                                        } elseif ($ratingstar == 5) {
                                            echo '<span>&#11088;</span><span>&#11088;</span><span>&#11088;</span><span>&#11088;</span><span>&#11088;</span>';
                                        } else {
                                        }
                                        ?>

                                    </td>
                                </tr>
                            </table>
                            <div class="owl_text">
                                <?php the_field('caption'); ?>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;

                wp_reset_postdata();

                ?>


            </div>
        </div>
    </div>
</div>