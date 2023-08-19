<?php get_header();

render_masthead("masthead_homepage");

render_services("services_homepage");

render_who_we_are("who_we_are_homepage");

render_headings_block("classes_homepage_heading");

?>
<div class="pricing__plans mt-5">
    <div class="container">
        <div class="row">
            <?php
            $classes = new WP_Query(array(
                "posts_per_page" => 8,
                "post_type" => "classes",
                "orderby" => "meta_value_num",
                "order" => "ASC"
            ));

            while ($classes->have_posts()) {
                $classes->the_post();
            ?>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="classes__block_cards">
                        <?php get_template_part("inc/partials/classes-card"); ?>
                    </div>
                </div>
            <?php
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>

<?php

render_strapline_video("strapline_one_homepage");

render_choose_us("choose_us_homepage");

render_headings_block("homepage_coaches");

?>
<div class="pricing__plans mt-5">
    <div class="container">
        <div class="row">
            <?php
            $coaches = new WP_Query(array(
                "posts_per_page" => 3,
                "post_type" => "coaches",
                "orderby" => "meta_value_num",
                "order" => "ASC"
            ));

            while ($coaches->have_posts()) {
                $coaches->the_post();
            ?>
                <div class="col-12 col-md-4">
                    <div class="coaches__block__cards">
                        <?php get_template_part("inc/partials/fitness-coach-card"); ?>
                    </div>
                </div>
            <?php
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>

<?php

render_headings_block("testimonials_homepage");

?>
<div class="testimonials mt-5">
    <div class="container">
        <div class="row">
            <?php
            $testimonials = new WP_Query(array(
                "posts_per_page" => 6,
                "post_type" => "testimonial",
                "orderby" => "meta_value_num",
                "order" => "ASC"
            ));

            while ($testimonials->have_posts()) {
                $testimonials->the_post();
            ?>
                <div class="col-12 col-xl-4">
                    <div class="testimonials__block__cards">
                        <?php get_template_part("inc/partials/testimonial-card"); ?>
                    </div>
                </div>
            <?php
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>

<?php

render_bmi_calculator("bmi_calculator_homepage");

get_template_part("inc/blocks/accreditations");

render_headings_block("training_plans_headings_homepage");

?>
<div class="pricing__plans mt-5">
    <div class="container">
        <div class="row">
            <?php
            $plans = new WP_Query(array(
                "posts_per_page" => 3,
                "post_type" => "plans",
                "orderby" => "meta_value_num",
                "order" => "ASC"
            ));

            while ($plans->have_posts()) {
                $plans->the_post();
            ?>
                <div class="col-12 col-lg-4">
                    <div class="testimonials__block__cards">
                        <?php get_template_part("inc/partials/pricing-plan-card"); ?>
                    </div>
                </div>
            <?php
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>

<?php

render_headings_block("news_headings_homepage");

?>
<div class="news__block mt-5">
    <div class="container">
        <div class="row">
            <?php
            $news = new WP_Query(array(
                "posts_per_page" => 3,
                "post_type" => "post",
                "orderby" => "meta_value_num",
                "order" => "ASC"
            ));

            while ($news->have_posts()) {
                $news->the_post();
            ?>
                <div class="col-12 col-lg-4">
                    <div class="testimonials__block__cards">
                        <?php get_template_part("inc/partials/news-card"); ?>
                    </div>
                </div>
            <?php
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>

<?php

render_strapline("strapline_homepage");

get_footer();
