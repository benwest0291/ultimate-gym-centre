<div class="testimonials__card mb-5" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/quotes.png">
    <p class="mt-5"><?php the_content(); ?></p>
    <h3><?php the_title(); ?></h3>
    <p><?php the_excerpt(); ?></p>
    <div class="d-flex justify-content-end">
        <img class="testimonials__card__thumbnail" src="<?php the_post_thumbnail_url("post"); ?>" />
    </div>
</div>