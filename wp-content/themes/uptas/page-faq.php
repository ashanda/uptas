<?php
/*
Template Name: FAQ
*/
 get_header();  ?>
<!-- Banner Start -->
<?php get_template_part('inner-banner');?>
    <!-- Banner Wrapper End -->

    <!--Body Content Wrapper Start-->
    <div class="section">
        <div class="container">
            <div class="Question-page">
                <div class="faq-area">
                    <h5 class="heading-questioner">CLASS INFORMATION</h5>
                    <div class="space">       
                    </div>
                    <div class="row mt-3">
                    <?php 
                        $args = array(  
                                'post_type' => 'faqs',
                                'post_status' => 'publish',
                                'posts_per_page' => -1, 
                                'orderby' => 'date', 
                                'order' => 'ASC', 
                            );
                            $loop = new WP_Query( $args ); 
                        while ( $loop->have_posts() ) : $loop->the_post();
                    
                    ?>
                        <div class="col-sm-6 content">
                            <h6 class="title"><?php the_title();?></h6>
                            <?php the_content();?>
                        </div>
                        <?php 
                        endwhile;
                        wp_reset_postdata(); 
                        ?> 
                    </div>
            
                </div>
            </div>
        </div>
    </div>


    <!--Body Content Wrapper End-->



<?php get_footer(); ?>