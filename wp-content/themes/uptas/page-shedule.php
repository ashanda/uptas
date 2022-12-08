<?php
/*
Template Name: Shedule
*/
 get_header();  ?>
<!-- Banner Start -->

<div class="shed_banner">
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
            <table class="table table-bordered caption-top bg-secondary">
              <caption class="text-center bg-success text-light fw-bold"><?php the_field('class_schedule_table_title_left_top');?>
              </caption>
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Branch</th>
                  <th scope="col">Day</th>
                  <th scope="col">Time</th>
                  <th scope="col">Mode</th>
                </tr>
              </thead>
              <tbody>
              <?php if( have_rows('class_schedule_table_left_top') ): ?>

                    <?php while( have_rows('class_schedule_table_left_top') ): the_row(); ?>
                        <li>
                            <?php echo wp_get_attachment_image( $image, 'full' ); ?>
                            <p><?php the_sub_field('caption'); ?></p>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
                <tr>
                  <td rowspan="3">Pure/Combined</td>
                  <td>Bedok</td>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                  <td>Onsite/Online</td>
                </tr>

                <tr>
                  <td>Bedok</td>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                  <td>Onsite/Online</td>
                </tr>
                <tr>
                  <td>Bedok</td>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                  <td>Onsite/Online</td>
                </tr>
                <tr>
                  <td>IP</td>
                  <td>Bedok</td>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                  <td>Onsite/Online</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="single-table">
            <table class="table table-bordered caption-top bg-secondary">
              <caption class="text-center bg-success text-light fw-bold"><?php the_field('class_schedule_table_title_left_middle');?>
              </caption>
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Branch</th>
                  <th scope="col">Day</th>
                  <th scope="col">Time</th>
                  <th scope="col">Mode</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td rowspan="5">Pure/Combined</td>
                  <td>Bedok</td>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                  <td>Onsite/Online</td>
                </tr>
                <tr>
                  <td>Bedok</td>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                  <td>Onsite/Online</td>
                </tr>
                <tr>
                  <td>Bedok</td>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                  <td>Onsite/Online</td>
                </tr>
                <tr>
                  <td>Bedok</td>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                  <td>Onsite/Online</td>
                </tr>
                <tr>
                  <td>Bedok</td>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                  <td>Onsite/Online</td>
                </tr>
                <tr>
                  <td>Combined</td>
                  <td>Bedok</td>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                  <td>Onsite/Online</td>
                </tr>
                <tr>
                  <td>IP</td>
                  <td>Bedok</td>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                  <td>Onsite/Online</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="single-table">
            <table class="table table-bordered caption-top bg-secondary">
              <caption class="text-center bg-danger text-light fw-bold"><?php the_field('class_schedule_table_title_left_bottom');?>
              </caption>
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Day</th>
                  <th scope="col">Time</th>
                  <th scope="col">Mode</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td rowspan="2">Pure/Combined</td>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                  <td rowspan="11">Onsite/Online</td>
                </tr>
                <tr>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                </tr>
                <tr>
                  <td rowspan="2">Pure/Combined</td>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                </tr>
                <tr>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                </tr>
                <tr>
                  <td rowspan="2">Pure/Combined</td>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                </tr>
                <tr>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                </tr>
                <tr>
                  <td rowspan="5">Pure/Combined</td>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                </tr>
                <tr>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                </tr>
                <tr>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                </tr>
                <tr>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                </tr>
                <tr>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                </tr>
              </tbody>
            </table>
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
            <table class="table table-bordered caption-top bg-secondary">
              <caption class="text-center bg-warning text-light fw-bold"><?php the_field('class_schedule_table_title_right_top');?>
              </caption>
              <thead>
                <tr>

                  <th scope="col">Branch</th>
                  <th scope="col">Day</th>
                  <th scope="col">Time</th>
                  <th scope="col">Mode</th>
                </tr>
              </thead>
              <tbody>
                <tr>

                  <td>Bedok</td>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                  <td>Onsite/Online</td>
                </tr>
                <tr>
                  <td>Bedok</td>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                  <td>Onsite/Online</td>
                </tr>
                <tr>
                  <td>Bedok</td>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                  <td>Onsite/Online</td>
                </tr>
                <tr>
                  <td>Bedok</td>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                  <td>Onsite/Online</td>
                </tr>
                <tr>
                  <td>Bedok</td>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                  <td>Onsite/Online</td>
                </tr>
                <tr>
                  <td>Bedok</td>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                  <td>Onsite/Online</td>
                </tr>
                <tr>
                  <td>Bedok</td>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                  <td>Onsite/Online</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="single-table">
            <table class="table table-bordered caption-top bg-secondary">
              <caption class="text-center bg-warning text-light fw-bold"><?php the_field('class_schedule_table_title_right_bottom');?>
              </caption>
              <thead>
                <tr>

                  <th scope="col">Branch</th>
                  <th scope="col">Day</th>
                  <th scope="col">Time</th>
                  <th scope="col">Mode</th>
                </tr>
              </thead>
              <tbody>
                <tr>

                  <td>Bedok</td>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                  <td>Onsite/Online</td>
                </tr>
                <tr>
                  <td>Bedok</td>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                  <td>Onsite/Online</td>
                </tr>
                <tr>
                  <td>Bedok</td>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                  <td>Onsite/Online</td>
                </tr>
                <tr>
                  <td>Bedok</td>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                  <td>Onsite/Online</td>
                </tr>
                <tr>
                  <td>Bedok</td>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                  <td>Onsite/Online</td>
                </tr>
                <tr>
                  <td>Bedok</td>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                  <td>Onsite/Online</td>
                </tr>
                <tr>
                  <td>Bedok</td>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                  <td>Onsite/Online</td>
                </tr>
                <tr>
                  <td>Bedok</td>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                  <td>Onsite/Online</td>
                </tr>
                <tr>
                  <td>Bedok</td>
                  <td>Monday</td>
                  <td>5.00PM-7.00PM</td>
                  <td>Onsite/Online</td>
                </tr>
              </tbody>
            </table>
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
          <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus cum voluptate iusto commodi dolores
            ducimus, quos laborum, cumque natus odio veniam. Eum tempore excepturi alias animi accusamus cumque
            reiciendis. Numquam.</span>
        </div>
        <div class="table_bot_points">
          <ul>
            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam mollitia, nam rem dolore odio maxime
              voluptatum suscipit saepe maiores autem asperiores recusandae ad, expedita totam amet, quibusdam fugit
              nostrum soluta!</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi in eos vero minus? Fugit beatae minus
              ullam aut quam possimus vel esse suscipit ipsam, odit, ab, exercitationem labore nobis quae?</li>
          </ul>
        </div>
        <div class="table_bot_btn my-4">
          <a class="btn btn-primary" href="">Download the Schedule</a>
        </div>
      </div>
    </div>
  </div>




<?php get_footer(); ?>