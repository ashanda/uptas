<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uptas
 */

?>
<!-- Footer start -->
<div class="container">
    <div class="row last-row my-3">
      <div class="col-sm-6">
        <div class="footer_logo">
          <img src="<?php echo get_template_directory_uri(); ?>/inc/img/uptas logo.svg" alt="" />
        </div>
      </div>
      <div class="col-sm-6">
        <p class="text-capt">
          Copyright © <?php echo date("Y"); ?>. Designed & Developed by
          <a target="_blank" href="https://mozita.digital">Mozita Digital.</a>
        </p>
      </div>
    </div>
  </div>
  <!-- footer end -->
  <!-- Main wrapper end -->
  <!-- Boostrap js -->

  <script>
    AOS.init();
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/inc/script/script.js"></script>
  <?php wp_footer(); ?>
</body>

</html>


