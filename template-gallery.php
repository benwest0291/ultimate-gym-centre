<?php
/* Template Name: Gallery */
get_header();

render_banner("banner_gellery_page");

?>
<div class="gallery mt-5">
    <div class="container">
        <div class="row">
            <?php
            $image = new WP_Query(array(
                "posts_per_page" => 50,
                "post_type" => "gallery",
                "orderby" => "meta_value_num",
                "order" => "ASC"
            ));

            while ($image->have_posts()) {
                $image->the_post();
            ?>
                <div class="col-12 col-md-4">
                    <img class="gallery__image" src="<?php the_post_thumbnail_url("post"); ?>" alt="<?php echo the_title(); ?>" />
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
