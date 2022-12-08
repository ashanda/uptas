<?php
/*
Template Name: About
*/
 get_header();  ?>

<!-- Banner Start -->
<?php get_template_part('inner-banner');?>
  <!-- Banner Wrapper End -->
  <!-- we are secion -->
  <div class="we_are section">
    <div class="container">
      <span class="blue"><?php the_field('sub_title');?></span>
      <h1><?php the_field('title');?></h1>
      <p><?php the_field('descriptions');?></p>

      <div class="row">
      <?php if( have_rows('cards') ): ?>
            <?php while( have_rows('cards') ): the_row(); ?>
                <div class="col-sm-6 col-md-6 col-lg-3 px-3">
                  <div class="box">
                    <h1 class="num"><?php the_sub_field('count_number'); ?></h1>
                    <span class="fw-bold"><?php the_sub_field('title'); ?> </span>
                    <p class="pt-2"><?php the_sub_field('caption'); ?></p>
                  </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
      </div>

    </div>
  </div>

  <!-- Caption section -->
  <div class="capt_section section">
    <div class="container">
      <div class="row mt-5 cpt">
        <div class="col-sm-8">
          <div class="capt">
          <?php the_field('section_description');?>
          </div>
        </div>
        <div class="col-sm-4">
        <?php if( get_field('image_01') ): ?>
           <div class="capt_img mob-pad" style="background-image: url(<?php the_field('image_01'); ?>);">
        <?php endif; ?>
          
          </div>
        </div>
      </div>
      <div class="row mt-5 cpt">
        <div class="col-sm-4">
        <?php if( get_field('image_02') ): ?>
           <div class="capt_img" style="background-image: url(<?php the_field('image_02'); ?>);">
        <?php endif; ?>
          
          </div>
        </div>
        <div class="col-sm-8">
        <?php if( get_field('image_03') ): ?>
          <div class="capt_img mob-pad" style="background-image: url(<?php the_field('image_03'); ?>);">
        <?php endif; ?>
          
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- TESTIMONIALS section end -->
  <?php get_template_part('testimonials');?>

  <!-- Bottom Banner -->
  <div class="bot_banner section">
    <div class="container">
    <?php if( get_field('bottom_image') ): ?>
      <div class="bot_ban_img text-center" style="background-image: url(<?php the_field('bottom_image'); ?>);">
        <?php endif; ?>
      
        <div class="bot_ban_capt">
          <h2 class="mb-3"><?php the_field('bottom_section_title');?></h2>
          <span><?php the_field('bottom_section_sub_title');?></span>
          <br>
          <a href="<?php the_field('bottom_section_button_link');?>" class="btn btn-primary mt-5"><?php the_field('bottom_section_button_text');?></a>
        </div>
      </div>
    </div>
  </div>



<?php get_footer(); ?>