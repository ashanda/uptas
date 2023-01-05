<?php
/*
Template Name: Shedule
*/
 get_header();  ?>
<!-- Banner Start -->
<?php
if (wp_get_attachment_url(get_post_thumbnail_id($post->ID))) {
    $bannerUrl = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
} else {
    $bannerUrl = get_field('inner_banner');
}
?>
<div class="shed_banner" style="background-image: url(<?php echo $bannerUrl; ?>);">
    <div class="container-fluid">
      <div class="shed_ban_cap">
        <?php the_field('main_section');?>
      </div>
    </div>
  </div>
  <!-- Banner Wrapper End -->

  <div class="table_sec">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-lg-6">
          <div class="single-table">
            <?php the_field('class_schedule_table_left_top');?>
          </div>
          <div class="single-table">
          <?php the_field('class_schedule_table_left_middle');?>
            
          </div>
          <div class="single-table">
          <?php the_field('class_schedule_table_left_bottom');?>
          </div>
          <div class="lvl_show d-none d-lg-block mt-2">
            <table>
              <tr>
                <td>
                  <div class="yel_box mr-2"></div>
                </td>
                <td><span class="fw-bold">Junior College Level</span></td>
              </tr>
              <tr>
                <td>
                  <div class="gre_box"></div>
                </td>
                <td><span class="fw-bold">Secondary Level</span></td>
              </tr>
            </table>
          </div>
        </div>
        <div class="col-md-12 col-lg-6">
          <div class="single-table">
          <?php the_field('class_schedule_table_right_top');?>
          </div>
          <div class="single-table">
          <?php the_field('class_schedule_table_right_bottom');?>
            
          </div>
          <div class="lvl_show d-lg-none">
            <table>
              <tr>
                <td>
                  <div class="yel_box mr-2"></div>
                </td>
                <td><span class="fw-bold">Junior College Level</span></td>
              </tr>
              <tr>
                <td>
                  <div class="gre_box"></div>
                </td>
                <td><span class="fw-bold">Secondary Level</span></td>
              </tr>
            </table>
          </div>
          <div class="bot_img mb-2">
            <img src="<?php echo get_template_directory_uri(); ?>/inc/img/lab_img.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>
      <div class="table_bot_sec my-3">
        <div class="caption">
          <span><?php the_field('description');?></span>
        </div>
        <div class="table_bot_points">
        <?php if( have_rows('table_dot_points') ): ?>
            <ul>
            <?php while( have_rows('table_dot_points') ): the_row();?>
                <li>
                   <?php the_sub_field('note'); ?>
                </li>
            <?php endwhile; ?>
            </ul>
        <?php endif; ?>
        </div>
        <div class="table_bot_btn my-4">
          <a class="btn btn-primary" href="<?php the_field('schedule_pdf');?>">Download the Schedule</a>
        </div>
      </div>
    </div>
  </div>




<?php get_footer(); ?>