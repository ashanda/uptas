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
              <?php if( get_field('inner_banner_circle_image','option') ): ?>
                  <img class="img-fluid" src="<?php the_field('inner_banner_circle_image','option'); ?>" alt="uptas" />
              <?php endif; ?>
            </div>
          </td>
          <td class="db_right">
            <div class="right_sd">
              <h1 class="bnr_title"> <?php the_field('inner_banner_title','option'); ?></h1>
              <span class="bnr_subtitle"> <?php the_field('inner_banner_sub_title','option'); ?></span>
              <p class="bnr_p">
              <?php the_field('inner_banner_description','option'); ?>
              </p>
              
              <span><a href="<?php the_field('inner_banner_button_link','option'); ?>" class="btn btn-light"><?php the_field('inner_banner_button_text','option'); ?></a></span>
              <?php if( have_rows('social_media','option') ): ?>
                  <?php while( have_rows('social_media','option') ): the_row(); 
                      $image = get_sub_field('social_icon');
                      ?>
                          <span><a href="<?php the_sub_field('social_link'); ?>"><img class="so_icon" src="<?php echo $image['url']; ?>" alt=""></a></span>
                  <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </div>
  
