<?php
/*
Template Name: Contact Us
*/
get_header();  ?>
<!-- Banner Start -->
<!--Google map-->
<div class="google_map">

  <div id="map-container-google-1" class="z-depth-1-half map-container">
    <?php the_field('google_map'); ?>
  </div>
  <?php if (get_field('google_map_2')) : ?>
    <div id="map-container-google-1" class="z-depth-1-half map-container mt-3">
      <?php the_field('google_map_2'); ?>
    </div>
  <?php endif; ?>
  <div class="contact_sec section">
    <div class="container">
      <div class="row">
        <!-- <div class="col-sm-12 col-md-6">
          <div class="left_sec">
            <p class="sub_head">
              faqs
            </p>
            <h3 class="head pb-3">Frequently Asked Questions</h3>

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
        </div> -->
        <div class="col-sm-12">
          <div class="right_sec mt-5 mt-sm-0">
            <p class="sub_head">
              Contact Us
            </p>
            <h3 class="head pb-3">Contact Us For Any Questions</h3>
            <div class="contform_sec mt-3">
              <?php echo do_shortcode('[contact-form-7 id="322" title="Contact Form"]'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<!--Google Maps-->
<?php get_footer(); ?>