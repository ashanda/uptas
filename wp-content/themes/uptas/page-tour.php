<?php
/*
Template Name: Tour
*/
get_header();  ?>

<!-- we are secion -->
<div class="tour_sec">
    <div class="container">
        <div class="frm my-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="img_sec py-4">
                        <!-- <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/inc/img/chemistry-tuition-improvement.jpg" alt=""> -->
                        <img class="img-fluid w-100" src="<?php the_field('hero_section_image'); ?>" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="top_form">
                        <div class="form">
                            <h2><?php the_field('form_title'); ?></h2>
                            <p class="py-3">
                                <?php the_field('form_description'); ?>
                            </p>

                            <?php echo do_shortcode('[contact-form-7 id="130" title="Get a Free Session!"]'); ?>
                            <p class="last-des">
                                I consent to the prossing of pertinal data and agree with the user agreement and privacy policy.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mid_sec">
            <div class="row">
                <div class="col-md-8 bg-purple">
                    <div class="p-4">
                        <h2 class="text-light mb-3 fw-bold"><?php the_field('element_1_title'); ?></h2>
                        <h5 class="text-light fw-bold">
                            <?php the_field('element_1_caption'); ?>
                        </h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <img class="img-fluid" src="<?php the_field('element_1_image'); ?>" alt="">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <img class="img-fluid" src="<?php the_field('element_2_image'); ?>" alt="">
                </div>
                <div class="col-md-8 bg-purple">
                    <div class="p-4">
                        <h2 class="text-light mb-3 fw-bold"><?php the_field('element_2_title'); ?></h2>
                        <h5 class="text-light fw-bold"><?php the_field('element_2_caption'); ?> </h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php if (have_rows('tour_cards')) : ?>
                    <?php while (have_rows('tour_cards')) : the_row(); ?>
                        <div class="col-sm-6 mt-4">
                            <div class="tour_card p-3">
                                <img class="img-fluid w-100" src="<?php the_sub_field('image'); ?>" alt="">
                                <h5 class="py-2 fw-bold"><?php the_sub_field('title'); ?></h5>
                                <p><?php the_sub_field('caption'); ?>
                                </p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <div class="col-sm-6 mt-4">
                    <div class="tour_card p-3">
                        <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/inc/img/tour-004.jpg" alt="">
                        <h5 class="py-2 fw-bold">Student Attention Span</h5>
                        <p>In Uptas Learning Hub, we recognise that students
                            attention span is short and follows a general trend as
                            indicated in graph 1. Therefore, the lessons are planned
                            carefully where there will be regular changes in the
                            activities of the class so as to interrupt the process of losing
                            their attention (Graph 2). In this way, this will help students
                            focus better and absorb more in class.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 mt-4">
                    <div class="tour_card p-3">
                        <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/inc/img/tour-005.jpg" alt="">
                        <h5 class="py-2 fw-bold">Top Quality Notes</h5>
                        <p>When Dr Aw created the worksheet, he will trial the
                            questions in the shoes of students. In doing so, he is able to
                            anticipate the conceptual challenges faced by the students.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 mt-4">
                    <div class="tour_card p-3">
                        <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/inc/img/tour-006.jpg" alt="">
                        <h5 class="py-2 fw-bold">Concise and very easy to read Keywords Notes</h5>
                        <p>The students are given top-notched teaching materials
                            which contain frequently asked exam questions. It also
                            contains Cambridge keywords.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-8 bg-purple p-4">
                    <h2 class="text-light mb-3 fw-bold">Formative Assessment Close Monitoring of Students</h2>
                    <h5 class="text-light fw-bold">As an award winning tutor, Dr Aw constantly check on
                        the understanding of students. Dr Aw uses effective
                        questioning techniques and provides feedback by
                        marking the students work.</h5>
                </div>
                <div class="col-md-4">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/tour-009.jpg" alt="">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/tour-010.jpg" alt="">
                </div>
                <div class="col-md-8 bg-purple p-4">
                    <h2 class="text-light mb-3 fw-bold">Booster Class (FOC) For students to catch up earlier chapters
                    </h2>
                    <h5 class="text-light fw-bold">Booster class is a special revision class that we have created
                        which will be held once per week catered for all existing
                        students to catch up earlier contents or misconception that
                        they may have missed. The best part is the class is FOC (Free
                        of Charge) for all existing students.</h5>
                </div>

            </div>
            <div class="row mt-4">
                <div class="col-sm-6">
                    <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/inc/img/tour-007.jpg" alt="">
                </div>
                <div class="col-sm-6 p-4">
                    <h2 class="text-purple mb-3 fw-bold">Chemistry can be interesting!</h2>
                    <p>
                        Everyone knows how difficult to memorise facts and
                        formulae from lecture books. At Uptas Learning, students are
                        shown the wonders of Chemistry and begin their journey of
                        further discovery. Students will be able visualize chemistry
                        in real life and science coming alive.
                    </p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-6 p-4">
                    <h2 class="text-purple mb-3 fw-bold">Mastery Skill Level Practices</h2>
                    <p>
                        We understand every students have different needs and so
                        we created 3 different levels of problem solving questions
                        namely: Skill Level 1, 2 and 3. Skill level 1 are easy-medium
                        difficult types of questions for students to polish their
                        basic, skill level 2 will be focusing on higher order thinking
                        questions (Medium-Difficult questions) and skill level 3
                        (Oh, My God! Level). This level is catered for students who
                        wants the most difficult types of questions.
                    </p>
                </div>
                <div class="col-sm-6">
                    <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/inc/img/tour-008.jpg" alt="">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-6">
                    <img class="img-fluid w-100 mb-3" src="<?php echo get_template_directory_uri(); ?>/inc/img/tour-014.jpg" alt="">
                    <img class="img-fluid w-100 mb-3" src="<?php echo get_template_directory_uri(); ?>/inc/img/tour-013.jpg" alt="">
                </div>
                <div class="col-sm-6 p-4">
                    <h2 class="text-purple mb-3 fw-bold">Harnessing on Technology to

                        Enhance Learning Experience</h2>
                    <p>
                        By leveraging on computer simulations and videos, Dr Aw is
                        able to bring across challenging topics in a better visualised
                        manner. In this manner, the key concept is better understood
                        and what used to take 30 mins or more to understand in school,
                        we are confident to simplified and explain in just a couple of
                        minutes with deeper understanding.

                        <br><br>
                        Dr Aw replaced whiteboard markers with his Ipad. This allows a
                        smooth flow of presentations and dynamically changes colour
                        and highlight key concepts to students.
                        <br><br>

                        And we also using virtual lab environment to simulate
                        experimental procedures where students are able to visualize
                        and capture the essence of what is required to do well in their
                        practical examinations.
                    </p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-6">
                    <img class="img-fluid w-100 mb-3" src="<?php echo get_template_directory_uri(); ?>/inc/img/notes.jpg" alt="">
                    <h2 class="text-purple mb-3 fw-bold">
                        Mind-map, Booster Worksheet

                        and Exam Preparations
                    </h2>
                    <p>Dr Aw provides not just worksheets, but high quality topnotched notes, summaries, mindmaps to help every individual
                        students attain their true maximum potential</p>
                </div>
                <div class="col-sm-6">
                    <img class="img-fluid w-100 mb-3" src="<?php echo get_template_directory_uri(); ?>/inc/img/Ultimate-bible-notes.jpg" alt="">
                    <h2 class="text-purple mb-3 fw-bold">
                        Unrival Notes and Cheat Sheets
                    </h2>
                    <p>In Uptas Learning Hub, we understand students may have
                        different needs and learning style. So we also have created a
                        set of chemistry bible notes that summarized effectively and
                        concisely the entire syllabus of chemistry for IP’, O , and A
                        level with all the essential keywords and most frequently asked
                        exam questions</p>
                </div>
            </div>
            <!-- TESTIMONIALS section -->
            <?php get_template_part('testimonials'); ?>
            <!-- TESTIMONIALS section -->

            <!--form section  -->

        </div>
    </div>
    <div class="bg-purple">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="top_form">
                    <div class="form">
                        <h2><?php the_field('form_title'); ?></h2>
                        <p class="py-3">
                            <?php the_field('form_description'); ?>
                        </p>
                        <?php echo do_shortcode('[contact-form-7 id="130" title="Get a Free Session!"]'); ?>
                        <p class="last-des">
                            I consent to the prossing of pertinal data and agree with the user agreement and privacy policy.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>