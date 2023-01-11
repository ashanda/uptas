<?php
/*
Template Name: Home
*/
get_header();  ?>

<!-- Banner Slider Start -->
<div class="top_slider">
  <div class="row ">
    <div class="col-lg-3 form_col">
      <div class="top_form">
        <div class="form">
          <h2><?php the_field('section_05_form_title'); ?></h2>
          <p class="py-3">
            <?php the_field('section_05_form_description'); ?>
          </p>

          <?php echo do_shortcode('[contact-form-7 id="130" title="Get a Free Session!"]'); ?>
          <p class="last-des">
            <?php the_field('section_05_form_agree_text'); ?>
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-9 slider_col">
      <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <?php if (have_rows('home_banner')) :
            $i = 0;
            $active;
          ?>

            <?php while (have_rows('home_banner')) : the_row();
              $image = get_sub_field('banner_image');
              if ($i == 0) {
                $active = 'active';
              } else {
                $active = '';
              }
            ?>
              <div class="carousel-item <?php echo $active; ?>" style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('<?php echo $image['url']; ?>')">
                <img src="<?php echo $image['url']; ?>" class="d-block" alt="..." />
                <div class="carousel-caption d-block container">
                  <h6><?php the_sub_field('sub_title'); ?></h6>
                  <h1><?php the_sub_field('main_title'); ?></h1>
                  <p><?php the_sub_field('description'); ?></p>
                </div>
              </div>
            <?php
              $i++;
            endwhile; ?>

          <?php endif; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>


  <!-- Slider -->
</div>
<!-- Banner Slider End -->

<!-- Card section start -->
<div class="card-item section" id="card-item">
  <div class="container">
    <div class="card-set">
      <div class="row justify-content-center">
        <?php if (have_rows('banner_bottom_cards')) :
          $i = 1;
        ?>
          <?php while (have_rows('banner_bottom_cards')) : the_row(); ?>
            <div class="card card<?php echo $i; ?>">
              <div class="card-body">
                <h5 class="card-title"><?php the_sub_field('title'); ?></h5>
                <p class="card-text">
                  <?php the_sub_field('caption'); ?>
                </p>
              </div>
            </div>

          <?php $i++;
          endwhile; ?>

        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<!-- Card section end -->

<!-- Learning-stream section start -->
<div class="learning section" id="learning">
  <div class="container">
    <div class="learning-heading text-center">
      <h4><?php the_field('section_01_sub_title'); ?></h4>
      <h2><?php the_field('section_01_title'); ?></h2>
      <div id="borderLeft"></div>
    </div>
    <div class="row">
      <?php if (have_rows('section_01_blocks')) :
        $i = 1;
      ?>
        <?php while (have_rows('section_01_blocks')) : the_row(); ?>
          <div class="col-md-3 col-sm-3">
            <div class="learning-content">
              <h2>
                <!-- 0<?php echo $i; ?>.  -->
                <span><?php the_sub_field('title'); ?></span>
              </h2>
            </div>
            <p class="sub-content">
              <?php the_sub_field('caption'); ?>
            </p>
          </div>
        <?php
          $i++;
        endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="tour_btn mt-2 mb-4 text-center">
      <a class="tbtn text-light py-2 mx-4" href="<?php echo get_home_url(); ?>/tour">Visit Tour Page</a>
    </div>
  </div>
</div>
<!-- Learning-stream section end -->

<!-- work section start -->
<div class="work section d-none" id="work">
  <div class="container">
    <div class="row mt-4">
      <div class="col-sm-6">
        <div class="work-details">
          <h4><?php the_field('section_01_sub_section_sub_title'); ?></h4>
          <h2><?php the_field('section_01_sub_section_title'); ?></h2>
          <p>
            <?php the_field('section_01_sub_section_caption'); ?>
          </p>
        </div>

        <div class="row mt-3">
          <div class="col-sm-6">
            <div class="individuals">
              <p class="ind_title"><?php the_field('section_01_sub_section_left_title'); ?>:</p>
              <?php if (have_rows('key_points_left')) : ?>
                <?php while (have_rows('key_points_left')) : the_row(); ?>
                  <div class="work-list">
                    <i class="fa fa-check"></i>
                    <p><?php the_sub_field('points'); ?></p>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="group">
              <p class="ind_title"><?php the_field('section_01_sub_section_right_title'); ?>:</p>
              <?php if (have_rows('key_points_right')) : ?>
                <?php while (have_rows('key_points_right')) : the_row(); ?>
                  <div class="work-list">
                    <i class="fa fa-check"></i>
                    <p><?php the_sub_field('points'); ?></p>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="work-img text-center">
          <?php if (get_field('section_01_sub_section_right_image')) : ?>
            <img class="img-fluid blue_shadow" src="<?php the_field('section_01_sub_section_right_image'); ?>" alt="malestudent" />
          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- work section end -->
<!-- TESTIMONIALS section start -->

<?php get_template_part('testimonials'); ?>
<!-- qualities secttion start -->
<div class="qualities section" id="qualities">
  <div class="container">
    <div class="qua_head text-center mb-4">
      <h1 class="title pb-2">
        <?php the_field('section_02_title'); ?>
      </h1>
      <p class="description">
        <?php the_field('section_02_descriptions'); ?>
      </p>
    </div>
    <div class="row">

      <div class="qualities-right mt-4">
        <div class="row">
        <?php if (have_rows('qulities')) : ?>
          <?php while (have_rows('qulities')) : the_row();
            $image = get_sub_field('image');
          ?>
          
            <div class="col-sm-12 col-md-6">
            <div class="sub-content pb-4">
              <div class="row">
                <div class="col-sm-3">
                  <div class="image text-center">
                    <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="" />
                  </div>
                </div>
                <div class="col-sm-9">
                  <div class="details">
                    <h4><?php the_sub_field('title'); ?></h4>
                    <p>
                      <?php the_sub_field('caption'); ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            </div>      
            
          <?php endwhile; ?>
        <?php endif; ?>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- qualities section end -->

<!-- other questions form area start -->
<div class="question section" id="question">
  <div class="container">
    <div class="row ques">
      <div class="question-area">
        <div class="row">
          <div class="col-sm-7">
            <h2><?php the_field('section_03_title'); ?></h2>
            <p><?php the_field('section_03_description'); ?></p>
          </div>
          <div class="col-sm-5">
            <?php echo do_shortcode('[contact-form-7 id="109" title="GET CONSULT"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- other question form area end -->

<!-- tutor specialist area start -->
<div class="tutor section d-none" id="tutor">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="tutor-des">
          <h3><?php the_field('section_04_sub_title'); ?></h3>
          <h5><?php the_field('section_04_title'); ?></h5>
          <div id="borderbottom"></div>
          <p>
            <?php the_field('section_04_description'); ?>
          </p>
          <a class="btn btn-primary mt-2" href="<?php the_field('section_04_button_link'); ?>"> <?php the_field('section_04_button_text'); ?> </a>
        </div>
      </div>

      <div class="col-sm-6 justify-content-center">
        <div class="image">
          <?php if (get_field('section_04_image')) : ?>
            <img class="img-fluid blue_shadow" src="<?php the_field('section_04_image'); ?>" alt="uptas" />
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- tutor specialist area end -->

<!-- form_sec area start -->
<div class="form_sec section d-none" id="form_sec">
  <div class="container">
    <div class="row achie mt-4">
      <div class="col-sm-5">
        <div class="form_sec-description">
          <div class="form_sec-content">
            <h2><?php the_field('section_05_title'); ?></h2>
            <p class="description text-dark">
              <?php the_field('section_05_description'); ?>
            </p>
          </div>

          <div class="form_sec-list">
            <div class="list mt-4">
              <?php if (have_rows('key')) :
                $i = 1;
              ?>
                <?php while (have_rows('key')) : the_row(); ?>
                  <p>
                    <span class="bl_num"><?php echo $i; ?>.</span>
                    <span class="bl_txt"><?php the_sub_field('points'); ?></span>
                  </p>
                <?php
                  $i++;
                endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-7">
        <div class="form_sec-right">
          <div class="row">
            <div class="col-sm-5">
              <div class="img-form_sec">
                <?php if (get_field('section_05_image')) : ?>
                  <img class="img-fluid" src="<?php the_field('section_05_image'); ?>" alt="uptas" />
                <?php endif; ?>
              </div>
            </div>
            <div class="col-sm-7">
              <div class="form">
                <h2><?php the_field('section_05_form_title'); ?></h2>
                <p class="py-3">
                  <?php the_field('section_05_form_description'); ?>
                </p>

                <?php echo do_shortcode('[contact-form-7 id="130" title="Get a Free Session!"]'); ?>
                <p class="last-des">
                  <?php the_field('section_05_form_agree_text'); ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- form_sec area end -->

<?php get_footer(); ?>