<div class="news__card pt-2">
    <p class="news__card__date mb-4"><?php echo get_the_date(); ?></p>
    <h5><?php the_title(); ?></h5>
    <p class="mt-4 mb-5"><?php echo wp_trim_words(get_the_content(), 15); ?></p>
    <a class="mt-2 article__btn" href="<?php echo the_permalink(); ?>">READ MORE</a>
</div>