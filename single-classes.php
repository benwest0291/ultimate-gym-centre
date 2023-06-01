<?php
get_header();
render_banner("classes_banner");

$mainHeading = get_field("main_heading");
$coaches = get_field("coach_taking_class");

?>

<section class="classes">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <?php if ($mainHeading != null) { ?>
                    <h2 class="mt-5"><?php echo $mainHeading ?></h2>
                <?php } ?>
                <p class="mb-5"><?php echo the_content(); ?></p>
                <div class="mt-5">
                    <a href="/schedule" class="article__btn">BOOK NOW</a>
                </div>

                <div class="classes__image__grid mt-5 mb-5">
                    <?php
                    if (have_rows("class_images")) :
                        while (have_rows("class_images")) : the_row();
                            $image = get_sub_field("image");
                    ?>
                            <img class="m-2 classes__image__grid__image" src="<?php echo $image['url']; ?>">
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <?php
                if ($coaches != null) {
                    foreach ($coaches as $coach) { ?>
                        <div class="classes__coach__card mt-5" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/trainer-background.png" );>
                            <div class="fitness__coach__card__image">
                                <img src="<?php echo get_the_post_thumbnail_url($coach) ?>" />
                            </div>
                            <div class="fitness__coach__card__info pt-4">
                                <h6> Your Coach </h6>
                                <h3><?php echo get_the_title($coach); ?></h3>
                                <div class="line"></div>
                            </div>
                        </div>
                    <?php } ?>
            </div>
        </div>
    <?php } ?>
    </div>
</section>

<?php
get_footer();
