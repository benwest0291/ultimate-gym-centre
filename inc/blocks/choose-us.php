<?php
$youtubeVideo = $data["youtube_video"];
$smallHeading = $data["choose_us_small_heading"];
$heading = $data["choose_us_heading"];
$paragraph = $data["choose_us_paragraph"];
$iconOne = $data["icon_one"];
$textOne = $data["text_one"];
$iconTwo = $data["icon_two"];
$textTwo = $data["text_two"];
$iconThree = $data["icon_three"];
$textThree = $data["text_three"];
$iconFour = $data["icon_four"];
$textFour = $data["text_four"];
$buttonText = $data["choose_us_button_text"];
$buttonUrl = $data["choose_us_button_url"];
?>

<section class="choose__us">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <?php if ($youtubeVideo != null) { ?>
                    <div class="choose__us__video"><?php echo $youtubeVideo; ?></div>
                <?php } ?>
            </div>

            <div class="col-12 col-lg-6">
                <?php if ($smallHeading != null) { ?>
                    <div class="who__we__are__sm__heading mb-3 mt-5" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/red-title.svg" );>
                        <h5 class="mt-2"><?php echo $smallHeading; ?></h5>
                    </div>
                <?php } ?>

                <?php if ($heading != null) { ?>
                    <h2><?php echo $heading; ?></h2>
                <?php } ?>

                <?php if ($paragraph != null) { ?>
                    <p><?php echo $paragraph; ?></p>
                <?php } ?>

                <div class="choose__us__text__icons">
                    <div class="d-flex ">
                        <?php if ($iconOne != null) { ?>
                            <img src="<?php echo $iconOne["url"]; ?>" alt="<?php echo $iconOne["alt"]; ?>">
                        <?php } ?>

                        <?php if ($textOne != null) { ?>
                            <h6 class="choose__us__text"><?php echo $textOne; ?></h6>
                        <?php } ?>
                    </div>

                    <div class="d-flex">
                        <?php if ($iconTwo != null) { ?>
                            <img src="<?php echo $iconTwo["url"]; ?>" alt="<?php echo $iconTwo["alt"]; ?>">
                        <?php } ?>

                        <?php if ($textTwo != null) { ?>
                            <h6 class="choose__us__text"><?php echo $textTwo; ?></h6>
                        <?php } ?>
                    </div>

                    <div class="d-flex mt-3">
                        <?php if ($iconThree != null) { ?>
                            <img src="<?php echo $iconThree["url"]; ?>" alt="<?php echo $iconThree["alt"]; ?>">
                        <?php } ?>

                        <?php if ($textThree != null) { ?>
                            <h6 class="choose__us__text"><?php echo $textThree; ?></h6>
                        <?php } ?>
                    </div>

                    <div class="d-flex mt-3">
                        <?php if ($iconFour != null) { ?>
                            <img src="<?php echo $iconFour["url"]; ?>" alt="<?php echo $iconFour["alt"]; ?>">
                        <?php } ?>

                        <?php if ($textFour != null) { ?>
                            <h6 class="choose__us__text"><?php echo $textFour; ?></h6>
                        <?php } ?>
                    </div>
                </div>
                <?php if ($buttonText != null) { ?>
                    <a title="<?php $buttonText; ?>" href="<?php echo $buttonUrl ?>"><button class="who__we__are__btn mt-5 mb-5"><?php echo $buttonText; ?></button></a>
                <?php } ?>
            </div>
        </div>
    </div>
</section>