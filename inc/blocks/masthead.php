<?php
$facebook = get_theme_mod("facebook");
$twitter = get_theme_mod("twitter");
$linkedin = get_theme_mod("linkedin");

$mastheadBgImage = $data["masthead_background_image"];
$mastheadSmallHeading = $data["masthead_small_heading"];
$mastheadMainHeading = $data["masthead_main_heading"];
$mastheadMainHeadingTwo = $data["masthead_main_heading_two"];
$mastheadButton = $data["masthead_button"];
$mastheadButtonUrl = $data["masthead_button_url"];
?>

<section class="masthead">
    <div class="container">
        <div class="d-flex justify-content-end masthead__socials">
            <div class="d-flex flex-column">
                <h5 class="masthead__share">SHARE</h5>
                <img class="masthead__line" src="<?php echo get_template_directory_uri(); ?>/assets/images/line.png">
                <div class="d-flex justify-content-end">
                    <div class="d-flex flex-column mt-1 masthead__lower__social">
                        <?php if ($linkedin != null) { ?>
                            <a href="<?php echo $linkedin; ?>"><i class="masthead__linkedin fa-brands fa-linkedin-in"></i></a>
                        <?php } ?>

                        <?php if ($twitter != null) { ?>
                            <a href="<?php echo $twitter; ?>"><i class="masthead__twitter fa-brands fa-twitter"></i></a>
                        <?php } ?>

                        <?php if ($facebook != null) { ?>
                            <a href="<?php echo $facebook; ?>"><i class="masthead__facebook fa-brands fa-facebook"></i></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row masthead__pull__up">
            <div class="col-12 col-md-6">
                <?php if ($mastheadBgImage != null) { ?>
                    <img class="masthead__image" src="<?php echo $mastheadBgImage['url']; ?>">
                <?php } ?>
            </div>
            <div class="col-12 col-md-6">
                <div class="masthead__info">
                    <?php if ($mastheadSmallHeading != null) { ?>
                        <div class="masthead__heading__bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/red-title.svg" );">
                            <h6 class="masthead__small__heading"><?php echo $mastheadSmallHeading; ?></h6>
                        </div>
                    <?php } ?>

                    <?php if ($mastheadMainHeading != null) { ?>
                        <h1 class="masthead__main__heading"><?php echo $mastheadMainHeading; ?></h1>
                    <?php } ?>

                    <?php if ($mastheadMainHeadingTwo != null) { ?>
                        <h1 class="masthead__main__heading__one mb-5"><?php echo $mastheadMainHeadingTwo; ?></h1>
                    <?php } ?>

                    <?php if ($mastheadButton != null) { ?>
                        <a class=" masthead__btn mt-5" href="<?php echo $mastheadButtonUrl ?>"><?php echo $mastheadButton; ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>