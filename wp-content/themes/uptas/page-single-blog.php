<?php
/*
Template Name: Single Blog Page
*/
get_header();  ?>
<!-- Banner Start -->

<div class="sample-banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/inc/img/banner.jpg');">
  <div class="container text-center">
    <div class="banner-maintext">
      <h2 class="main-heading">Uptas Blog</h2>
    </div>
    <div class="d-flex flex-md-row flex-wrap justify-content-center">
      <div class="page-links">
        <a href="Home" class="pa-links">Home/</a>
        <a href="Home" class="pa-links">Chemical Reactions</a>
      </div>
    </div>
  </div>
</div>
<!-- Banner Wrapper End -->

<!--Body Content Wrapper Start-->
<div class="sb_sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <div class="sb_top text-center">
          <span>Chemica Reactions</span>
          <h3 class="mat-4">Chemica Reactions For Fun</h3>
          <div class="other-links d-flex flex-md-row flex-wrap justify-content-center">
                <p class="post-by pr-2">post by</p>
                <p class="circle"><a href=""><i class="fa fa-solid fa-circle"></i></a></p>
                <p class="chathuranga">d.chathuranga</p>
                <p class="comment"><a href=""><i class="fa fa-light fa-message"></i></a></p>
                <p class="share"><a href=""><i class="fa fa-solid fa-share-nodes"></i></a></p>
              </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>