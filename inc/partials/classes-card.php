<?php
$classDate = get_field("class_date_and_time");
?>

<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
    <div class="classes__card mb-4" ">
    <img src=" <?php echo the_post_thumbnail_url("post"); ?>" alt="class name">
        <h3><?php the_title(); ?></h3>
        <h6><?php echo $classDate; ?></h6>
    </div>
</a>