<?php 
	if (wp_get_attachment_url( get_post_thumbnail_id($post->ID) ))
	{
		$bannerUrl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	}else{
        $bannerUrl = get_field('default_inner_banner', 'option');
	}
?>
<div class="default_banner" style="background-image: url(<?php echo $bannerUrl; ?>);">
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
  
