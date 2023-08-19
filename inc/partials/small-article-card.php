<a title="<?php the_title(); ?>" class="text-decoration-none" href="<?php the_permalink(); ?>">
    <article class="small__article__card mt-3 d-flex">
        <img class="small__article__card__image" src=" <?php echo the_post_thumbnail_url("post"); ?>" alt="article image">
        <div class="mt-2 p-2">
            <p class="small__article__card__date"><?php echo get_the_date(); ?></p>
            <p class="small__article__card__heading"><?php the_title(); ?></p>
        </div>
    </article>
</a>