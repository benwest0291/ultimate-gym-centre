<?php
/* Template Name: Pricing */
get_header();

render_banner("pricing_banner");

render_headings_block("pricing_page_headings");

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
                <div class="col-12 col-md-4">
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
get_footer();
