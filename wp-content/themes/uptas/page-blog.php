<?php
/*
Template Name: Blog Page
*/
get_header();  ?>
<!-- Banner Start -->

<div class="sample-banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/inc/img/banner.jpg');">
  <div class="container text-center">
    <div class="banner-maintext">
      <h2 class="main-heading">Uptas Blog</h2>
    </div>
    <div class="d-flex flex-md-row flex-wrap justify-content-center">
      <div class="page-links pa-links" style="color: white;font-weight: 500;font-size: 15px;letter-spacing: 3px;">
       <?php get_breadcrumb();?>
      </div>
    </div>
  </div>
</div>
<!-- Banner Wrapper End -->

<!--Body Content Wrapper Start-->
<section class="section-card section">
  <div class="container p-0">
    <div class="cards">
      <div class="row mt-4 pl-4">
      <?php
          $args = array(
              'post_type' => 'post'
          );

          $post_query = new WP_Query($args);

          if($post_query->have_posts() ) {
              while($post_query->have_posts() ) {
                  $post_query->the_post();
                  $featured_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                  $cats = get_the_category($post->ID);
                  ?>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="card new-card">
                        <div class="image-area text-center" style="background-image: url('<?php echo $featured_img_url; ?>');">
                          <div class="date-time">
                            <p class="date-number"><?php the_date('d'); ?></p>
                            <p class="month-name"><?php the_time( 'M' ); ?></p>
                          </div>
                          <div class="exper">
                            <p class="experiment text-center"><?php echo $cats[0]->name;?></p>
                          </div>

                        </div>
                        <div class="card-body text-center">
                          <h5 class="card-title"><?php the_title();?></h5>

                          <div class="other-links d-flex flex-md-row flex-wrap justify-content-center">
                            <p class="post-by pr-2">post by</p>
                            <p class="circle"><i class="fa fa-solid fa-circle"></i></p>
                            <?php if( get_field('author_name') ){ ?>
                              <p class="chathuranga"><?php the_field('author_name'); ?></p>
                            <?php }else{ ?>
                              <p class="chathuranga"><?php the_author(); ?></p>
                            <?php } ?>
                            
                            <p class="comment"><a href=""><i class="fa fa-light fa-message"></i></a></p>
                            <p class="share"><a href=""><i class="fa fa-solid fa-share-nodes"></i></a></p>
                          </div>
                          <div class="card-description">
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <a href="<?php echo get_permalink( $post->ID ); ?>" class="des">continue reading</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php
                  }
              }
      ?>
        

        
      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>