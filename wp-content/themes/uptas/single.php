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
	<div class="page-links pa-links" style="color: white;font-weight: 500;font-size: 15px;letter-spacing: 3px;">
       <?php get_breadcrumb();?>
      </div>
      </div>
    </div>
  </div>
</div>
<!-- Banner Wrapper End -->

<!--Body Content Wrapper Start-->
<div class="sb_sec section">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <div class="sb_top text-center">
          <h3><?php the_title();?></h3>
          <div class="other-links d-flex flex-md-row flex-wrap justify-content-center">
            <p class="post-by pr-2">post by</p>
			<?php if( get_field('author_name') ){ ?>
				<p class="circle"><i class="fa fa-solid fa-circle"></i></p>
                <p class="chathuranga"><?php the_field('author_name'); ?></p>
                
             <?php }else{ ?>
				<p class="circle"><i class="fa fa-solid fa-circle"></i></p>
                <p class="chathuranga"><?php the_author(); ?></p>
             <?php } ?>
            
            
          </div>
        </div>
        <div class="sb_img">
			<?php $featured_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );?>
          <img src="<?php echo $featured_img_url; ?>" class="img-fluid" alt="">
          <div class="sb_img_date">
            <h2 class="pb-0 mb-0"><?php the_date('d'); ?></h2>
            <h5><?php the_time( 'M' ); ?></h5>
          </div>
        </div>
		<?php the_content();?>


        <!-- post_auth section -->

        <div class="post_auth text-center mt-5 p-4 section">
          <div class="round mx-auto"></div>
          <h5 class="fw-bold my-3">Author of the post</h5>
		  <?php if( get_field('author_description') ): ?>
			<p><?php the_field('author_description'); ?></p>
		<?php endif; ?>
         
        </div>
        <div class="post_auth_bor mt-4"></div>
        <div class="auth_links mt-4">
          <div class="row">
            <div class="col-sm-6">
              <div class="tags text-center text-sm-start">
			  <?php $cats = get_the_category($post->ID); 
			 	foreach($cats as $cat){ ?>
					<a style="cursor:default" class="btn"><?php echo $cat->name;?></a>
				<?php
				} 
			  ?>   
              </div>
            </div>
          </div>
		  
          <div class="row navg mt-5">
		  <?php $previous = get_previous_post();
$next = get_next_post();

if ( get_next_post() ) { ?>
<div class="col-sm-4 pull-left">
			<table>
                <td class="icon text-center">
                  <a href="<?php echo get_permalink($next)?>"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                </td>
                <td>
                  <p class="text-muted fw-bold mb-2">Next</p>
                  <p class="fw-bold"><?php echo get_the_title($next) ?></p>
                </td>
              </table>
			  </div>

<?php } if ( get_previous_post() ) { ?>
	
	<div class="col-sm-4 pull-right">
	<table>
                <td class="text-end ">
                  <p class="text-muted fw-bold mb-2">Previous</p>
                  <p class="fw-bold "><?php echo get_the_title($previous)?></p>
                </td>
                <td class="icon text-center">
                  <a href="<?php echo get_permalink($previous)?>"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </td>

              </table>
			  </div>
<?php } ?> 
            
            
          </div>
        </div>
        <div class="post_auth_bor mt-4"></div>
        <!-- Related Posts -->

        
      </div>
	  
      <div class="col-sm-4 catagory">
        <div class="catg section pb-2">
          <h5 class="fw-bold text-uppercase mb-3">category</h5>
          <div class="tags text-center text-sm-start">
		  <?php
			$categories = get_categories( array(
				'orderby' => 'name',
				'order'   => 'ASC'
			) );

			foreach( $categories as $category ) { ?>
			<a style="cursor:default" class="btn"><?php echo $category->name;?></a>
			<?php
			}
			?>
          </div>
        </div>
        <div class="rect section pb-4">
          <h5 class="fw-bold text-uppercase mt-4 mb-3">recent Posts</h5>
		  <?php
    $args = array(
        'post_type' => 'post'
    );

    $post_query = new WP_Query($args);

    if($post_query->have_posts() ) {
        while($post_query->have_posts() ) {
            $post_query->the_post();
			$featured_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
            ?>
			<a href="<?php echo get_permalink( $post->ID ); ?>" >
			<table>
            <td class="imge">
              <img src="<?php echo $featured_img_url; ?>" class="img-fluid pl-2" alt="">
            </td>
            <td>
              <div class="capt">
                <p class="fw-bold mb-2"><?php the_title(); ?></p>
                <small class="text-muted"><?php the_excerpt()?></small>
              </div>
            </td>
          </table>
		  </a>
            <?php
            }
        }
?>

        </div>

      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>