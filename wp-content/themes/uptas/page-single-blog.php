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
<div class="sb_sec section">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <div class="sb_top text-center">
          <span>Chemica Reactions</span>
          <h3 class="mt-4">Chemica Reactions For Fun</h3>
          <div class="other-links d-flex flex-md-row flex-wrap justify-content-center">
            <p class="post-by pr-2">post by</p>
            <p class="circle"><a href=""><i class="fa fa-solid fa-circle"></i></a></p>
            <p class="chathuranga">d.chathuranga</p>
            <p class="comment"><a href=""><i class="fa fa-light fa-message"></i></a></p>
            <p class="share"><a href=""><i class="fa fa-solid fa-share-nodes"></i></a></p>
          </div>
        </div>
        <div class="sb_img">
          <img src="<?php echo get_template_directory_uri(); ?>/inc/img/blog-1.jpg" class="img-fluid" alt="">
          <div class="sb_img_date">
            <h2 class="pb-0 mb-0">22</h2>
            <h5>JUN</h5>
          </div>
        </div>
        <div class="sb_capt">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt excepturi, cumque molestias deserunt aliquam hic debitis explicabo aspernatur voluptas reiciendis voluptatum ut, libero ipsam, fugit provident qui doloribus illo assumenda!</p>
          <br>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aperiam velit, nesciunt eius autem voluptatibus iste mollitia modi? Doloribus adipisci quisquam ad at facilis. Nihil odio saepe laborum dolore nostrum.</p>
        </div>
        <div class="sb-subhead">
          <h5>Class Information</h5>
        </div>
        <div class="sb_capt">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt excepturi, cumque molestias deserunt aliquam hic debitis explicabo aspernatur voluptas reiciendis voluptatum ut, libero ipsam, fugit provident qui doloribus illo assumenda!</p>
          <br>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aperiam velit, nesciunt eius autem voluptatibus iste mollitia modi? Doloribus adipisci quisquam ad at facilis. Nihil odio saepe laborum dolore nostrum.</p>
        </div>
        <div class="sb_img">
          <img src="<?php echo get_template_directory_uri(); ?>/inc/img/blog-1.jpg" class="img-fluid" alt="">
        </div>
        <div class="sb-subhead">
          <h5>Class Information</h5>
        </div>
        <div class="sb_capt">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt excepturi, cumque molestias deserunt aliquam hic debitis explicabo aspernatur voluptas reiciendis voluptatum ut, libero ipsam, fugit provident qui doloribus illo assumenda!</p>
          <br>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aperiam velit, nesciunt eius autem voluptatibus iste mollitia modi? Doloribus adipisci quisquam ad at facilis. Nihil odio saepe laborum dolore nostrum.</p>
        </div>


        <!-- post_auth section -->

        <div class="post_auth text-center mt-5 p-4 section">
          <div class="round mx-auto"></div>
          <h5 class="fw-bold my-3">Author of the post</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam illo eveniet animi dolorum quod vitae, labore atque fugiat nostrum minima molestiae hic. Deleniti magni vel, nihil assumenda iure mollitia fuga.</p>
          <a href="#">View all by author</a>
        </div>
        <div class="post_auth_bor mt-4"></div>
        <div class="auth_links mt-4">
          <div class="row">
            <div class="col-sm-6">
              <div class="tags text-center text-sm-start">
                <a href="" class="btn">chemistry</a>
                <a href="" class="btn">Guide</a>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="smeida_icons text-center text-sm-end mt-3 mt-sm-0">
                <span><a href=""><img class="so_icon" src="<?php echo get_template_directory_uri(); ?>/inc/img/facebook.png" alt=""></a></span>
                <span><a href=""><img class="so_icon" src="<?php echo get_template_directory_uri(); ?>/inc/img/twitter.png" alt=""></a></span>
                <span><a href=""><img class="so_icon" src="<?php echo get_template_directory_uri(); ?>/inc/img/pinterest.png" alt=""></a></span>
                <span><a href=""><img class="so_icon" src="<?php echo get_template_directory_uri(); ?>/inc/img/linkedin.png" alt=""></a></span>
                <span><a href=""><img class="so_icon" src="<?php echo get_template_directory_uri(); ?>/inc/img/whatsapp.png" alt=""></a></span>
              </div>
            </div>
          </div>
          <div class="row navg mt-5">
            <div class="col-sm-4">
              <table>
                <td class="icon text-center">
                  <a href=""><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                </td>
                <td>
                  <p class="text-muted fw-bold mb-2">newer</p>
                  <p class="fw-bold">chemical reactions to have fun</p>
                </td>
              </table>
            </div>
            <div class="col-sm-4 text-center py-3">
              <i class="fa fa-square-o" aria-hidden="true"></i>
            </div>
            <div class="col-sm-4">
              <table>
                <td class="text-end">
                  <p class="text-muted fw-bold mb-2">newer</p>
                  <p class="fw-bold ">chemical reactions to have fun</p>
                </td>
                <td class="icon text-center">
                  <a href=""><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </td>

              </table>
            </div>
          </div>
        </div>
        <div class="post_auth_bor mt-4"></div>
        <!-- Related Posts -->
        <div class="rp section mt-4">
          <h5 class="fw-bold mb-4">RELATED POSTS</h5>
          <div class="row pl-4 mb-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="card">
                <div class="image-area text-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/inc/img/blog_teach.jpg');">
                  <div class="date-time">
                    <p class="date-number">22</p>
                    <p class="month-name">JUN</p>
                  </div>
                  <div class="exper">
                    <p class="experiment text-center">FUN EXPERIMENTS</p>
                  </div>

                </div>
                <div class="card-body text-center">
                  <h5 class="card-title">Loream ipsum is simply dummy</h5>

                  <div class="other-links d-flex flex-md-row flex-wrap justify-content-center">
                    <p class="post-by pr-2">post by</p>
                    <p class="circle"><a href=""><i class="fa fa-solid fa-circle"></i></a></p>
                    <p class="chathuranga">d.chathuranga</p>
                    <p class="comment"><a href=""><i class="fa fa-light fa-message"></i></a></p>
                    <p class="share"><a href=""><i class="fa fa-solid fa-share-nodes"></i></a></p>
                  </div>
                  <div class="card-description">
                    <p class="card-text">but also the leap into electronic typesetting, remaining
                      essentially unchanged.</p>
                    <a href="#" class="des">continue reading</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="card">
                <div class="image-area text-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/inc/img/blog_teach.jpg');">
                  <div class="date-time">
                    <p class="date-number">22</p>
                    <p class="month-name">JUN</p>
                  </div>
                  <div class="exper">
                    <p class="experiment text-center">FUN EXPERIMENTS</p>
                  </div>

                </div>
                <div class="card-body text-center">
                  <h5 class="card-title">Loream ipsum is simply dummy</h5>

                  <div class="other-links d-flex flex-md-row flex-wrap justify-content-center">
                    <p class="post-by pr-2">post by</p>
                    <p class="circle"><a href=""><i class="fa fa-solid fa-circle"></i></a></p>
                    <p class="chathuranga">d.chathuranga</p>
                    <p class="comment"><a href=""><i class="fa fa-light fa-message"></i></a></p>
                    <p class="share"><a href=""><i class="fa fa-solid fa-share-nodes"></i></a></p>
                  </div>
                  <div class="card-description">
                    <p class="card-text">but also the leap into electronic typesetting, remaining
                      essentially unchanged.</p>
                    <a href="#" class="des">continue reading</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <div class="col-sm-4">
        <div class="catg section pb-2">
          <h5 class="fw-bold text-uppercase mb-3">category</h5>
          <p>Chemical</p>
          <p>Chemical</p>
          <p>Chemical</p>
          <p>Chemical</p>
          <p>Chemical</p>
        </div>
        <div class="rect section pb-4">
          <h5 class="fw-bold text-uppercase mt-4 mb-3">recent Posts</h5>
          <table>
            <td class="imge">
              <img src="<?php echo get_template_directory_uri(); ?>/inc/img/blog_teach.jpg" class="img-fluid pl-2" alt="">
            </td>
            <td>
              <div class="capt">
                <p class="fw-bold mb-2">Post Title Sample</p>
                <small class="text-muted">With faded secondary text</small>
              </div>
            </td>
          </table>
        </div>
        <div class="gallery section pb-2">
          <h5 class="fw-bold text-uppercase mt-4 mb-3">Gallery</h5>
          <div class="row">
            <div class="col-sm-4">
              <img src="<?php echo get_template_directory_uri(); ?>/inc/img/blog_teach.jpg" class="img-fluid p-2" alt="">
            </div>
            <div class="col-sm-4">
              <img src="<?php echo get_template_directory_uri(); ?>/inc/img/blog_teach.jpg" class="img-fluid p-2" alt="">
            </div>
            <div class="col-sm-4">
              <img src="<?php echo get_template_directory_uri(); ?>/inc/img/blog_teach.jpg" class="img-fluid p-2" alt="">
            </div>
            <div class="col-sm-4">
              <img src="<?php echo get_template_directory_uri(); ?>/inc/img/blog_teach.jpg" class="img-fluid p-2" alt="">
            </div>
            <div class="col-sm-4">
              <img src="<?php echo get_template_directory_uri(); ?>/inc/img/blog_teach.jpg" class="img-fluid p-2" alt="">
            </div>
            <div class="col-sm-4">
              <img src="<?php echo get_template_directory_uri(); ?>/inc/img/blog_teach.jpg" class="img-fluid p-2" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>