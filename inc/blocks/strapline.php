<?php
$straplineBackgroundImage = $data["strapline_background_image"];
$straplineHeading = $data["strapline_heading"];
$straplineNumber = $data["strapline_number"];
$straplineButtonText = $data["strapline_button_text"];
$straplineButtonUrl = $data["strapline_button_url"];

?>

<section class="strapline mt-5" style="background-image: url(<?php echo ($straplineBackgroundImage != null ? $straplineBackgroundImage['url'] : ''); ?>);">
    <div class="container">
        <div class="strapline__info">
            <?php if ($straplineHeading != null) { ?>
                <h2><?php echo $straplineHeading; ?></h2>
            <?php } ?>

            <?php if ($straplineNumber != null) { ?>
                <h4><?php echo $straplineNumber; ?></h4>
            <?php } ?>

            <div class="mt-5">
                <?php if ($straplineButtonText != null) { ?>
                    <a title="<?php echo $straplineButtonText ?>" href="<?php echo $straplineButtonUrl; ?> " class="cta__btn"><?php echo $straplineButtonText ?></a>
                <?php } ?>
            </div>
        </div>
</section>