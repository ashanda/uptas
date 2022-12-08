<?php
/*
Template Name: Home
*/
 get_header();  ?>

  <!-- Banner Slider Start -->
  <div class="top_slider" style="background-image: url('<?php echo get_template_directory_uri(); ?>/inc/img/carosel_back.png')">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner container">
      <?php if( have_rows('home_banner') ): 
        $i=0;
        $active;
        ?>
          
          <?php while( have_rows('home_banner') ): the_row(); 
              $image = get_sub_field('banner_image');
              if($i==0){
                $active = 'active';
              }else{
                $active = '';
              }
              ?>
              <div class="carousel-item <?php echo $active;?>">
                <img src="<?php echo $image['url'];?>" class="d-block" alt="..." />
                <div class="carousel-caption d-block">
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
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- Slider -->
  </div>
  <!-- Banner Slider End -->

  <!-- Card section start -->
  <div class="card-item section" id="card-item">
    <div class="container">
      <div class="card-set">
        <div class="row justify-content-center">
        <?php if( have_rows('banner_bottom_cards') ):
          $i=1;
           ?>
            <?php while( have_rows('banner_bottom_cards') ): the_row(); ?>
                  <div class="card card<?php echo $i;?>">
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
        <h4><?php the_field('section_01_sub_title');?></h4>
        <h2><?php the_field('section_01_title');?></h2>
        <div id="borderLeft"></div>
      </div>
      <div class="row">
      <?php if( have_rows('section_01_blocks') ): 
        $i=1;
        ?>
        <?php while( have_rows('section_01_blocks') ): the_row(); ?>
        <div class="col-md-3 col-sm-3">
          <div class="learning-content">
            <h2>0<?php echo $i;?>. <span><?php the_sub_field('title'); ?></span></h2>
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
    </div>
  </div>
  <!-- Learning-stream section end -->

  <!-- work section start -->
  <div class="work section" id="work">
    <div class="container">
      <div class="row mt-4">
        <div class="col-sm-6">
          <div class="work-details">
            <h4><?php the_field('section_01_sub_section_sub_title');?></h4>
            <h2><?php the_field('section_01_sub_section_title');?></h2>
            <p>
            <?php the_field('section_01_sub_section_caption');?>
            </p>
          </div>

          <div class="row mt-3">
            <div class="col-sm-6">
              <div class="individuals">
                <p class="ind_title"><?php the_field('section_01_sub_section_left_title');?>:</p>
                <?php if( have_rows('key_points_left') ): ?>
                    <?php while( have_rows('key_points_left') ): the_row();?>
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
                <p class="ind_title"><?php the_field('section_01_sub_section_right_title');?>:</p>
                <?php if( have_rows('key_points_right') ): ?>
                    <?php while( have_rows('key_points_right') ): the_row();?>
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
          <?php if( get_field('section_01_sub_section_right_image') ): ?>
              <img class="img-fluid blue_shadow" src="<?php the_field('section_01_sub_section_right_image'); ?>" alt="malestudent" />
          <?php endif; ?>
           
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- work section end -->
  <!-- TESTIMONIALS section start -->


  <!-- TESTIMONIALS section end -->
  <div class="testi section" id="testi">
    <div class="container">
      <div class="testi-heading text-center">
        <h4>LEARNING STREAMS</h4>
        <h2>We Work in Such Directions</h2>
        <p>They have already used our services.</p>
        <div id="borderbottom"></div>
      </div>
      <div class="testi-content py-3">
        <div class="owl-carousel owl-theme">
          <div class="item">
            <div class="content">
              <table>
                <tr>
                  <td class="p-3">
                    <img class="owl_img" src="<?php echo get_template_directory_uri(); ?>/inc/img/owl_img.png" alt="" />
                  </td>
                  <td class="p-3">
                    <span class="owl_cap">Sally (TKGS, VJC) 1</span>
                    <span>&#11088;</span><span>&#11088;</span><span>&#11088;</span><span>&#11088;</span><span>&#11088;</span>
                  </td>
                </tr>
              </table>
              <div class="owl_text">
                Lessons in Uptas are interesting and engaging as the tutors
                tries his best to simplify chemistry concepts..
              </div>
            </div>
          </div>
          <div class="item">
            <div class="content">
              <table>
                <tr>
                  <td class="p-3">
                    <img class="owl_img" src="<?php echo get_template_directory_uri(); ?>/inc/img/owl_img.png" alt="" />
                  </td>
                  <td class="p-3">
                    <span class="owl_cap">Sally (TKGS, VJC)</span>
                    <span>&#11088;</span><span>&#11088;</span><span>&#11088;</span><span>&#11088;</span><span>&#11088;</span>
                  </td>
                </tr>
              </table>
              <div class="owl_text">
                Lessons in Uptas are interesting and engaging as the tutors
                tries his best to simplify chemistry concepts..
              </div>
            </div>
          </div>
          <div class="item">
            <div class="content">
              <table>
                <tr>
                  <td class="p-3">
                    <img class="owl_img" src="<?php echo get_template_directory_uri(); ?>/inc/img/owl_img.png" alt="" />
                  </td>
                  <td class="p-3">
                    <span class="owl_cap">Sally (TKGS, VJC)</span>
                    <span>&#11088;</span><span>&#11088;</span><span>&#11088;</span><span>&#11088;</span><span>&#11088;</span>
                  </td>
                </tr>
              </table>
              <div class="owl_text">
                Lessons in Uptas are interesting and engaging as the tutors
                tries his best to simplify chemistry concepts..
              </div>
            </div>
          </div>
          <div class="item">
            <div class="content">
              <table>
                <tr>
                  <td class="p-3">
                    <img class="owl_img" src="<?php echo get_template_directory_uri(); ?>/inc/img/owl_img.png" alt="" />
                  </td>
                  <td class="p-3">
                    <span class="owl_cap">Sally (TKGS, VJC)</span>
                    <span>&#11088;</span><span>&#11088;</span><span>&#11088;</span><span>&#11088;</span><span>&#11088;</span>
                  </td>
                </tr>
              </table>
              <div class="owl_text">
                Lessons in Uptas are interesting and engaging as the tutors
                tries his best to simplify chemistry concepts..
              </div>
            </div>
          </div>
          <div class="item">
            <div class="content">
              <table>
                <tr>
                  <td class="p-3">
                    <img class="owl_img" src="<?php echo get_template_directory_uri(); ?>/inc/img/owl_img.png" alt="" />
                  </td>
                  <td class="p-3">
                    <span class="owl_cap">Sally (TKGS, VJC)</span>
                    <span>&#11088;</span><span>&#11088;</span><span>&#11088;</span><span>&#11088;</span><span>&#11088;</span>
                  </td>
                </tr>
              </table>
              <div class="owl_text">
                Lessons in Uptas are interesting and engaging as the tutors
                tries his best to simplify chemistry concepts..
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- qualities secttion start -->
  <div class="qualities section" id="qualities">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="qualities-left mt-3 px-1">
            <h1 class="title pb-3">
            <?php the_field('section_02_title');?>
            </h1>
            <p class="description">
            <?php the_field('section_02_descriptions');?>
            </p>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="qualities-right mt-4">
          <?php if( have_rows('qulities') ): ?>
              <?php while( have_rows('qulities') ): the_row(); 
                  $image = get_sub_field('image');
                  ?>
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
              <h2>Are There Any Other Questions?</h2>
              <p>Lorem ipsum Lorem ipsum dolor sit amet, consectetuer</p>
            </div>
            <div class="col-sm-5">
              <form class="mt-3">
                <div class="row">
                  <div class="col-7">
                    <input type="text" class="form-control" />
                  </div>
                  <div class="col-5">
                    <button type="submit" class="btn btn-primary mb-2">
                      GET CONSULT
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- other question form area end -->

  <!-- tutor specialist area start -->
  <div class="tutor section" id="tutor">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="tutor-des">
            <h3>RESULTS REDEFINED</h3>
            <h5>We Are a Team of Highly Professional Tutor Specialists</h5>
            <div id="borderbottom"></div>
            <p>
              In publishing and graphic design, Lorem ipsum is a placeholder
              text commonly used to demonstrate the visual form of a document
              or a typeface without relying on meaningful content.
            </p>
            <a class="btn btn-primary mt-2" href=""> LEARN MORE </a>
          </div>
        </div>

        <div class="col-sm-6 justify-content-center">
          <div class="image">
            <img class="img-fluid blue_shadow" src="<?php echo get_template_directory_uri(); ?>/inc/img/draw_teaching.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- tutor specialist area end -->

  <!-- form_sec area start -->
  <div class="form_sec section" id="form_sec">
    <div class="container">
      <div class="row achie mt-4">
        <div class="col-sm-5">
          <div class="form_sec-description">
            <div class="form_sec-content">
              <h2>A Guarantee of Achieving the Desired Result!</h2>
              <p class="description text-dark">
                The specialists of our institute will provide you with expert
                advice on any issue that interests you.
              </p>
            </div>

            <div class="form_sec-list">
              <div class="list mt-4">
                <p>
                  <span class="bl_num">1.</span>
                  <span class="bl_txt">PhD Doctorate Scholar Super Tutor Chemistry Lab</span>
                </p>
                <p>
                  <span class="bl_num">2.</span>
                  <span class="bl_txt">Adaptive Learning Smart Learning System (AI LMS)</span>
                </p>
                <p>
                  <span class="bl_num">3.</span>
                  <span class="bl_txt">We are ready to answer right now! Sign up for a free
                    session.</span>
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-7">
          <div class="form_sec-right">
            <div class="row">
              <div class="col-sm-5">
                <div class="img-form_sec">
                  <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/Singapore-Chemistry-Academy- Dr-1.png" alt="" />
                </div>
              </div>
              <div class="col-sm-7">
                <div class="form">
                  <h2>Get a Free Session!</h2>
                  <p class="py-3">
                    We are ready to answer right now! Sign up for a free
                    session.
                  </p>

                  <div class="form-group">
                    <input type="fname" class="form-control" id="firstName" placeholder="First Name" />
                  </div>
                  <div class="form-group">
                    <input type="lname" class="form-control" id="lastName" placeholder="Last Name" />
                  </div>
                  <div class="form-group">
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Your phone number" />
                  </div>

                  <button type="submit" class="">BOOK SESSION</button>
                  <p class="last-des">
                    I consent to the prossing of pertinal data and agree with
                    the user agreement and privacy policy.
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