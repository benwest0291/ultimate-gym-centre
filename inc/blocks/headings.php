<?php
$smallHeading = $data["small_heading"];
$mainHeading = $data["main_heading"];
$paragraph = $data["paragraph"];
?>

<section class="headings mt-5">
    <div class="container">
        <div class="headings__info">
            <?php if ($smallHeading != null) { ?>
                <div class="headings__info__bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/red-title.svg" );>
                    <h5 class="text-center mt-2"><?php echo $smallHeading; ?></h5>
                </div>
            <?php } ?>

            <?php if ($mainHeading != null) { ?>
                <h2 class="text-center mt-3"><?php echo $mainHeading; ?></h2>
            <?php } ?>

            <?php if ($paragraph != null) { ?>
                <p class="text-center mt-2"><?php echo $paragraph; ?></p>
            <?php } ?>
        </div>
    </div>
</section>