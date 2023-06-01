<?php
$smallHeading = $data["small_heading"];
$mainHeading = $data["main_heading"];
$paragraph = $data["paragraph"];

$imageOne = $data["image_one"];
$headingOne = $data["heading_one"];
$imageTwo = $data["image_two"];
$headingTwo = $data["heading_two"];
$imageThree = $data["image_three"];
$headingThree = $data["heading_three"];
$buttonText = $data["button_text"];
$buttonUrl = $data["button_url"];
$mainImage = $data["main_image"];
?>


<section class="who__we__are">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">

                <?php if ($smallHeading != null) { ?>
                    <div class="who__we__are__sm__heading mb-2" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/red-title.svg" );>
                        <h5 class="mt-2"><?php echo $smallHeading; ?></h5>
                    </div>
                <?php } ?>

                <?php if ($mainHeading != null) { ?>
                    <h2><?php echo $mainHeading; ?></h2>
                <?php } ?>

                <?php if ($paragraph != null) { ?>
                    <p class="mt-4"><?php echo $paragraph; ?></p>
                <?php } ?>

                <div class="d-flex mt-5 who__we__are__section mb-5">
                    <div class="who__we__are__sections who__we__are__sections__border">
                        <?php if ($imageOne != null) { ?>
                            <img src="<?php echo $imageOne['url']; ?>">
                        <?php } ?>

                        <?php if ($headingOne != null) { ?>
                            <h6 class="text-center"><?php echo $headingOne; ?></h6>
                        <?php } ?>
                    </div>

                    <div class="who__we__are__sections who__we__are__sections__border">

                        <?php if ($imageTwo != null) { ?>
                            <img src="<?php echo $imageTwo['url']; ?>">
                        <?php } ?>

                        <?php if ($headingTwo != null) { ?>
                            <h6 class="text-center"><?php echo $headingTwo; ?></h6>
                        <?php } ?>
                    </div>

                    <div class="who__we__are__sections">
                        <?php if ($imageThree != null) { ?>
                            <img src="<?php echo $imageThree['url']; ?>">
                        <?php } ?>

                        <?php if ($headingThree != null) { ?>
                            <h6 class="text-center"><?php echo $headingThree; ?></h6>
                        <?php } ?>
                    </div>

                </div>

                <?php if ($buttonText != null) { ?>
                    <a class="who__we__are__btn mt-5" href="<?php echo $buttonUrl; ?>"><?php echo $buttonText; ?></a>
                <?php } ?>
            </div>
            <div class="col-12 col-md-6">

                <?php if ($mainImage != null) { ?>
                    <img class="who__we__are__image" src="<?php echo $mainImage['url']; ?>">
                <?php } ?>

            </div>
        </div>
    </div>
</section>