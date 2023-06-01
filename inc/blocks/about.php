<?php
$smallHeading = $data["small_heading"];
$mainHeading = $data["main_heading"];
$paragraph = $data["paragraph"];
$buttonText = $data["button_text"];
$buttonUrl = $data["button_url"];
$image = $data["image"];
?>

<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <?php if ($smallHeading != null) { ?>
                    <div class="who__we__are__sm__heading mb-2 mt-5" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/red-title.svg" );>
                        <h5 class="mt-2"><?php echo $smallHeading; ?></h5>
                    </div>
                <?php } ?>

                <?php if ($mainHeading != null) { ?>
                    <h2><?php echo $mainHeading; ?></h2>
                <?php } ?>

                <?php if ($paragraph != null) { ?>
                    <p class="mt-4 mb-5"><?php echo $paragraph; ?></p>
                <?php } ?>
                <a href="<?php echo $buttonUrl; ?>" class="article__btn"><?php echo $buttonText; ?></a>
            </div>

            <div class="col-12 col-md-6">
                <?php if ($image != null) { ?>
                    <img class="about__image" src="<?php echo $image['url']; ?>">
                <?php } ?>
            </div>

        </div>
    </div>
</section>