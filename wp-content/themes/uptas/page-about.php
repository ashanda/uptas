<?php
/*
Template Name: About
*/
 get_header();  ?>

<!-- Banner Start -->
<div class="default_banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/banner.jpg);">
    <div class="container">
      <table class="db">
        <tr>
          <td class="db_left">
            <div class="left_sd">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/bnr_img.png" alt="">
            </div>
          </td>
          <td class="db_right">
            <div class="right_sd">
              <h1 class="bnr_title">Dr. Aw Junxin</h1>
              <span class="bnr_subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt eum</span>
              <p class="bnr_p">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam incidunt velit dolorum neque ratione
                doloremque, fuga similique iste distinctio odit deserunt ullam dignissimos tempora pariatur aliquid
                repudiandae quam! Voluptate, perferendis!
              </p>
              <span><a href="" class="btn btn-light">Contact Us</a></span>
              <span><a href=""><img class="so_icon" src="<?php echo get_template_directory_uri(); ?>/inc/img/facebook.png" alt=""></a></span>
              <span><a href=""><img class="so_icon" src="<?php echo get_template_directory_uri(); ?>/inc/img/twitter.png" alt=""></a></span>
              <span><a href=""><img class="so_icon" src="<?php echo get_template_directory_uri(); ?>/inc/img/pinterest.png" alt=""></a></span>
              <span><a href=""><img class="so_icon" src="<?php echo get_template_directory_uri(); ?>/inc/img/linkedin.png" alt=""></a></span>
              <span><a href=""><img class="so_icon" src="<?php echo get_template_directory_uri(); ?>/inc/img/whatsapp.png" alt=""></a></span>

            </div>
          </td>
        </tr>
      </table>
    </div>
  </div>
  <!-- Banner Wrapper End -->
  <!-- we are secion -->
  <div class="we_are section">
    <div class="container">
      <span class="blue">Some Words About Us</span>
      <h1>We are Uptas</h1>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>

      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-3 px-3">
          <div class="box">
            <h1 class="num">7</h1>
            <span class="fw-bold">Years n this field </span>
            <p class="pt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum sunt quibusdam reprehenderit
              omnis cumque
              quia quam quo.</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 px-3">
          <div class="box">
            <h1 class="num">500+</h1>
            <span class="fw-bold">Students </span>
            <p class="pt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum sunt quibusdam reprehenderit
              omnis cumque
              quia quam quo.</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 px-3">
          <div class="box">
            <h1 class="num">4</h1>
            <span class="fw-bold">Locations </span>
            <p class="pt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum sunt quibusdam reprehenderit
              omnis cumque
              quia quam quo.</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 px-3">
          <div class="box">
            <h1 class="num">2</h1>
            <span class="fw-bold">Instructors </span>
            <p class="pt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum sunt quibusdam reprehenderit
              omnis cumque
              quia quam quo.</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Caption section -->
  <div class="capt_section section">
    <div class="container">
      <div class="row mt-5 cpt">
        <div class="col-sm-8">
          <div class="capt">
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa facere aliquam rem saepe illo
              necessitatibus
              error quaerat vero dolores provident! Et, veritatis deserunt. Amet voluptas nostrum fugiat alias placeat
              dolorem.
            </p>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa facere aliquam rem saepe illo
              necessitatibus
              error quaerat vero dolores provident! Et, veritatis deserunt. Amet voluptas nostrum fugiat alias placeat
              dolorem.
            </p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="capt_img mob-pad" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/chem_child.jpg);">
          </div>
        </div>
      </div>
      <div class="row mt-5 cpt">
        <div class="col-sm-4">
          <div class="capt_img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/chem_child.jpg);">
          </div>
        </div>
        <div class="col-sm-8">
          <div class="capt_img mob-pad" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/banner.jpg);">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- TESTIMONIALS section end -->
  <div class="testi section" id="testi">
    <div class="container">
      <div class="text-center">
        <span class="blue">What our student think about us</span>
        <h1>Reviews From The Students</h1>
        <p class="fw-bold">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
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

  <!-- Bottom Banner -->
  <div class="bot_banner section">
    <div class="container">
      <div class="bot_ban_img text-center" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/banner.jpg);">
        <div class="bot_ban_capt">
          <h2 class="mb-3">We Will Be Glad To Hear From You</h2>
          <span>It Is A Long Establish Fact That A Reader Will Be Distracted By The Readable Content Of A Page When Looking At Its Layout.</span>
          <a href="#" class="btn btn-primary mt-5">CONTACT US</a>
        </div>
      </div>
    </div>
  </div>



<?php get_footer(); ?>