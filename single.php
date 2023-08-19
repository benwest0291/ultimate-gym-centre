<?php

get_header();

while (have_posts()) {
    the_post();
    render_banner("news_post_banner");
?>
    <article class="article__post">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-9">
                    <h2 class="mt-5"><?php the_title(); ?></h2>
                    <div class="line"></div>
                    <div class="d-flex justify-content-between mt-3 main__article__card__info__single">
                        <img class="main__article__card__stack" src="<?php echo get_template_directory_uri(); ?>/assets/images/stack.png" alt="stack">
                        <p>By <span class="main__article__card__author"><?php the_author(); ?></span></p>
                        <p><?php echo get_the_date(); ?></p>
                    </div>

                    <p class="w-75 mt-3"><?php the_content(); ?></p>
                    <img class="main__article__card__image mt-4" src=" <?php echo the_post_thumbnail_url("post"); ?>" alt="article image">

                    <h5 class="mt-4">SHARE THIS PAGE</h5>
                    <div class="line"></div>
                    <div class="mt-4 mb-5">
                        <div class="footer__socials mt-3">
                            <i class="fa-brands fa-facebook-f"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-pinterest-p"></i>
                            <i class="fa-brands fa-youtube"></i>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3">
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
                </div>
            </div>
    </article>
<?php
}
get_footer();
