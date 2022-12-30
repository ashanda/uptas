<?php
/*
Template Name: Review
*/
get_header();  ?>

<!-- Banner Start -->
<?php get_template_part('inner-banner'); ?>
<!-- Banner Wrapper End -->
<!-- we are secion -->
<div class="review_top py-4 text-center">
    <h2>WHY WE ARE BEST AT TEACHING</h2>
</div>
<div class="container">
    <div class="sign_up">
        <a href="<?php the_field('sign_up_button'); ?>" target="_blank" class="btn btn-primary">Sign Up</a>
    </div>
</div>
<div class="review section">
    <div class="container">
        <?php echo do_shortcode('[grw id="417"]'); ?>
        <!-- new custom fields -->
        <div class="revw_sec p-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="img_sec">
                        <img class="img-fluid m-3" src="https://uptas.sg/wp-content/uploads/2020/01/XINCI-TJC.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="rew_sec">
                        <div class="nme">
                            <p class="text-secondary fw-bold">XINCI, TJC</p>
                            <div class="row">
                                <div class="col-10">
                                    <p>“You believed in me and helped me to understand Chemistry much, much better”</p>
                                </div>
                                <div class="col-2 text-end">
                                    <a class="btn btn-sm text-small" href=""><img src="inc/img/sign-up-button-50.png" alt=""></a>
                                </div>
                            </div>
                            <p class="desc my-3 p-3">
                                Patient teachers are the BEST but the free food and drinks are pretty good loo hehe! I used to hate chemistry when I was in Integrated Programme (IP) Year 3 & 4. My chemistry tutor in IP 4 even advised me not to touch chemistry at JC level. You were super patient and helpful throughout my 2 years in Uptas. More importantly, you believed in me. You helped me to understand Chemistry much, much better.

                                You were clear and enthusiastic in your teaching and explained it in more simplistic ways to aid understanding. I would recommend all my friends who need help in Chemistry and don’t like it to join ? Throwing back to the times when you could repeat over and over again and slowly teach me concepts without getting upset, I am extremely thankful that I got to know you. I will never forget the extra lessons to help boost our chemistry grade. Thank you Ms Tham, you are really like a good friend which makes lesson fun and comfortable.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- new custom fields -->
    </div>

</div>


<?php get_footer(); ?>