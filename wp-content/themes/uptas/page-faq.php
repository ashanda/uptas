<?php
/*
Template Name: FAQ
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
<div class="default_banner" style="background-image: url(<?php echo $bannerUrl; ?>);">
  <?php get_template_part('inner-banner'); ?>
</div>
<!-- Banner Wrapper End -->

<!--Body Content Wrapper Start-->
<div class="section">
  <div class="container">
    <div class="Question-page">
      <div class="faq-area">
        <h5 class="heading-questioner">CLASS INFORMATION</h5>
        <div class="space">
        </div>
        <div class="accordion" id="accordionExample">
          <?php
          $args = array(
            'post_type' => 'faqs',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'ASC',
          );

          $loop = new WP_Query($args);
          $i = 0;
          $collaps;
          $expand;
          while ($loop->have_posts()) : $loop->the_post();
            if ($i == 0) {
              $collaps = 'show';
              $expand = 'true';
              $collapsed = '';
            } else {
              $collaps = '';
              $expand = 'false';
              $collapsed = 'collapsed';
            }
          ?>

            <div class="accordion-item">
              <h2 class="accordion-header" id="heading<?php echo $i; ?>">
                <button class="accordion-button <?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i; ?>" aria-expanded="<?php echo $expand; ?>" aria-controls="collapse<?php echo $i; ?>">
                  <?php the_title(); ?>
                </button>
              </h2>
              <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse <?php echo $collaps; ?>" aria-labelledby="heading<?php echo $i; ?>" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>

          <?php
            $i++;
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