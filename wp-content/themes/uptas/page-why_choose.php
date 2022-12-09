<?php
/*
Template Name: Why Choose Us
*/
get_header();  ?>
<!-- Banner Start -->

<div class="wc_sec1 section">
  <div class="container">
    <div class="sec_content">
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="sing_sec">
            <span class="blue">
              <?php the_field('sub_title');?>
            </span>
            <h1 class="mt-3"><?php the_field('main_title');?></h1>
          </div>
        </div>
        <?php if( have_rows('top_block') ): ?>
            <?php while( have_rows('top_block') ): the_row();?>
            <div class="col-sm-6 col-md-3">
                <div class="sing_sec">
                  <span class="blue">
                  <?php the_sub_field('title'); ?>
                  </span>
                  <p class="mt-3"><?php the_sub_field('caption'); ?></p>
                </div>
              </div>
            <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<div class="wc_sec2 mt-2 section">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="wc_sec2_left_img">
          <img src="<?php the_field('section_01_image'); ?>" alt="" class="img-fluid">
        </div>
      </div>
      <div class="col-sm-6">
        <div class="wc_sec2_right_capt">
          <span class="blue fw-bold">
          <?php the_field('section_01_sub_title');?>
          </span>
          <h3 class="my-3 fw-bold">
          <?php the_field('section_01_title');?>
          </h3>
          <?php the_field('section_01_description');?>
        </div>
      </div>
    </div>
    <div class="row mt-1 mt-lg-5">
      <div class="col-sm-6">
        <div class="wc_sec2_right_capt">
          <span class="blue fw-bold">
          <?php the_field('section_02_sub_title');?>
          </span>
          <h3 class="my-3 fw-bold">
          <?php the_field('section_02_title');?>
          </h3>
          <?php the_field('section_02_description');?>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="wc_sec2_left_img">
          <img src="<?php the_field('section_02_image'); ?>" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </div>
</div>

<div class="wc_mid_banner section" style="background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url('<?php the_field('section_03_background_image'); ?>')">
  <div class="container">
    <table class="out_table">
      <tr>
        <td class="out_table_td text-center text-sm-start">
          <span class="blue"><?php the_field('section_03_sub_title'); ?></span>
          <h3 class="my-3">
          <?php the_field('section_03_title'); ?>
          </h3>
          <p><?php the_field('section_03_description'); ?></p>
        </td>
        <td class="out_table_td">
          <table class="in_table mt-5 mt-md-0">
            <tr class="border-bottom">
              <td class="border-right">
                <h1><?php the_field('statics_left_top_title_01'); ?></h1>
                <p><?php the_field('statics_left_top_title_02'); ?></p>
              </td>
              <td>
                <h1><?php the_field('statics_left_middle_title_01'); ?></h1>
                <p><?php the_field('statics_left_middle_title_02'); ?></p>
              </td>
            </tr>
            <tr class="border-bottom">
              <td class="border-right">
                <h1 class="mt-2"><?php the_field('statics_left_bottom_title_01'); ?></h1>
                <p><?php the_field('statics_left_bottom_title_02'); ?></p>
              </td>
              <td>
                <h1 class="mt-2"><?php the_field('statics_right_top_title_01'); ?></h1>
                <p><?php the_field('statics_right_top_title_02'); ?></p>
              </td>
            </tr>
            <tr>
              <td class="border-right">
                <h1 class="mt-2"><?php the_field('statics_right_middle_title_01'); ?></h1>
                <p><?php the_field('statics_right_middle_title_02'); ?></p>
              </td>
              <td>
                <h1 class="mt-2"><?php the_field('statics_right_bottom_title_01'); ?></h1>
                <p><?php the_field('statics_right_bottom_title_02'); ?></p>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </div>
</div>
<div class="wc_bot_sec section mb-2 mb-sm-4">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="video_card mb-2">
          <div class="card">
           <?php the_field('section_04_left_video_frame'); ?>
            <div class="card-body">
              <h5 class="card-title"><?php the_field('section_04_left_title'); ?></h5>
              <p class="card-text"><?php the_field('section_04_left_description'); ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="video_card mb-2">
          <div class="card">
          <?php the_field('section_04_right_video_frame'); ?>
            <div class="card-body">
              <h5 class="card-title"><?php the_field('section_04_right_title'); ?></h5>
              <p class="card-text"><?php the_field('section_04_right_description'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>