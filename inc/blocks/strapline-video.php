<?php
$straplineBackground = $data["strapline_background_image"];
$StraplineHeading = $data["strapline_heading"];
$straplineButtonText = $data["strapline_button_text"];
$straplineButtonUrl = $data["strapline_button_url"];
?>

<section class="strapline__video mt-5" style="background-image: url(<?php echo ($straplineBackground  != null ? $straplineBackground['url'] : ''); ?>);">
    <div class="strapline__video__mobile">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <?php if ($StraplineHeading != null) { ?>
                        <h2 class="mt-4"><?php echo $StraplineHeading; ?></h2>
                    <?php } ?>
                </div>
                <div class="col-12 col-md-6 mt-5">
                    <?php if ($straplineButtonText != null) { ?>
                        <a title="<?php echo $straplineButtonText; ?>" class="strapline__btn" href="<?php echo $straplineButtonUrl ?> ?>"><?php echo $straplineButtonText; ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>