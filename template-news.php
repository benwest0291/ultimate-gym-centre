<?php
/* Template Name: News */
get_header();
render_banner("banner_news");
$promoPoster = get_field("promotion_poster");
?>

<section class="news">
    <div class="container">
        <div class="row">
            <form class="d-flex news__search mt-5 mb-4" action="">
                <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
            </form>
            <div class="col-12 col-md-9">
                <?php
                $news = new WP_Query(array(
                    "posts_per_page" => 10,
                    "post_type" => "post",
                    "orderby" => "meta_value_num",
                    "order" => "ASC"
                ));

                while ($news->have_posts()) {
                    $news->the_post();
                ?>
                    <?php get_template_part("inc/partials/main-article-card"); ?>
                <?php
                }
                wp_reset_postdata();
                ?>
            </div>
            <div class="col-12 col-md-3">
                <div class="news__sidebar">
                    <h5>Classes</h5>
                    <div class="line"></div>
                    <ul class="mt-3">
                        <?php
                        $classes = new WP_Query(array(
                            "posts_per_page" => 10,
                            "post_type" => "classes",
                            "orderby" => "meta_value_num",
                            "order" => "ASC"
                        ));

                        while ($classes->have_posts()) {
                            $classes->the_post();
                        ?>
                            <a title="<?php the_title(); ?>" class="text-decoration-none" href="<?php echo the_permalink(); ?>">
                                <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/chevron.png" alt="chevron"><?php the_title(); ?></li>
                            </a>
                        <?php
                        }
                        wp_reset_postdata();
                        ?>
                    </ul>
                    <h5 class="mt-5">Latest News</h5>
                    <div class="line"></div>
                    <div class="mt-5">
                        <?php
                        $news = new WP_Query(array(
                            "posts_per_page" => 6,
                            "post_type" => "post",
                            "orderby" => "meta_value_num",
                            "order" => "ASC"
                        ));

                        while ($news->have_posts()) {
                            $news->the_post();
                        ?>
                            <?php get_template_part("inc/partials/small-article-card"); ?>
                        <?php
                        }
                        wp_reset_postdata();
                        ?>
                    </div>
                    <?php if ($promoPoster != null) { ?>
                        <img class="mt-5 w-100" src="<?php echo $promoPoster["url"]; ?>" alt="<?php echo $promoPoster["alt"]; ?>">
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
