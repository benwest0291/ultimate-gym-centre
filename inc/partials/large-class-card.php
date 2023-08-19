<?php
$classDate = get_field("class_date_and_time");
$coachs = get_field("coach_taking_class");
$classDate = get_field("class_date_and_time");
?>

<a title="<?php the_title(); ?>" href=" <?php the_permalink() ?>">
    <div class="large__class__card mb-5" ">
    <img class=" large__class__card__image" src=" <?php echo the_post_thumbnail_url("post"); ?>" alt="class image">
        <h2 class="large__class__card__heading"><?php the_title(); ?></h2>
        <div class="large__class__card__line"></div>
        <p class="large__class__card__date"><?php echo $classDate; ?></p>
        <?php
        foreach ($coachs as $coach) { ?>
            <p class="large__class__card__coach"><?php echo get_the_title($coach); ?></p>
        <?php } ?>
        <a title="<?php the_title(); ?>" class="large__class__card__btn" href=" <?php the_permalink() ?>">VIEW CLASS</a>
    </div>
</a>