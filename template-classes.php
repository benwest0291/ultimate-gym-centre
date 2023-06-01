<?php
/* Template Name: Classes */
get_header();

render_banner("classes_banner");

?>
<div class="main__classes mt-5">
    <div class="container">
        <div class="row">
            <?php
            $class = new WP_Query(array(
                "posts_per_page" => 10,
                "post_type" => "classes",
                "orderby" => "meta_value_num",
                "order" => "ASC"
            ));

            while ($class->have_posts()) {
                $class->the_post();
            ?>
                <div class="col-12 col-md-4">
                    <?php get_template_part("inc/partials/large-class-card"); ?>
                </div>
            <?php
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>

<?php

get_footer();
