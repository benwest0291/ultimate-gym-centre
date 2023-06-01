<article class="main__article__card mt-3 mb-5">
    <img class="main__article__card__image" src=" <?php echo the_post_thumbnail_url("post"); ?>">

    <div class="d-flex justify-content-between mt-2 main__article__card__info">
        <img class="main__article__card__stack" src="<?php echo get_template_directory_uri(); ?>/assets/images/stack.png">
        <p>By <span class="main__article__card__author"> <?php echo get_the_author(); ?></span></p>
        <p><?php echo get_the_date(); ?></p>
    </div>
    <h2><?php the_title(); ?></h2>
    <p class="mb-4">
        <?php if (has_excerpt()) {
            echo get_the_excerpt();
        } else {
            echo wp_trim_words(get_the_content(), 30);
        }; ?>
    </p>
    <a class="article__btn" href="<?php the_permalink(); ?>">VIEW ARTICLE</a>
</article>