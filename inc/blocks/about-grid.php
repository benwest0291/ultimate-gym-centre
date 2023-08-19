<?php

$aboutGridIconOne = $data["about_grid_icon_one"];
$aboutGridHeadingOne = $data["about_grid_heading_one"];
$aboutGridparagraphOne = $data["about_grid_paragraph_one"];
$aboutGridImageOne = $data["about_main_image_one"];
$aboutGridIconTwo = $data["about_grid_icon_two"];
$aboutGridHeadingTwo = $data["about_grid_heading_two"];
$aboutGridparagraphTwo = $data["about_grid_paragraph_two"];
$aboutGridImageTwo = $data["about_main_image_two"];

?>

<section class="about__grid">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="about__grid__info">
                    <?php if ($aboutGridIconOne != null) { ?>
                        <img class="about__grid__icon mb-3" src="<?php echo $aboutGridIconOne["url"]; ?>" alt="<?php echo $aboutGridIconOne["alt"]; ?>">
                    <?php } ?>

                    <?php if ($aboutGridHeadingOne != null) { ?>
                        <h2><?php echo $aboutGridHeadingOne; ?></h2>
                    <?php } ?>

                    <?php if ($aboutGridparagraphOne != null) { ?>
                        <p class="text-center pt-3 w-75"><?php echo $aboutGridparagraphOne; ?></p>
                    <?php } ?>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <?php if ($aboutGridImageOne != null) { ?>
                    <img class="about__grid__main__image" src="<?php echo $aboutGridImageOne["url"]; ?>" alt="<?php echo $aboutGridImageOne["alt"]; ?>">
                <?php } ?>
            </div>

            <div class="col-12 col-md-6">
                <img class="about__grid__main__image" src="<?php echo $aboutGridImageTwo["url"]; ?>" alt="<?php echo $aboutGridImageTwo["alt"]; ?> ">
            </div>

            <div class="col-12 col-md-6">
                <div class="about__grid__info">
                    <?php if ($aboutGridIconTwo != null) { ?>
                        <img class="about__grid__icon mb-3" src="<?php echo $aboutGridIconTwo["url"]; ?>" alt="<?php echo $aboutGridIconTwo["alt"]; ?>">
                    <?php } ?>

                    <?php if ($aboutGridHeadingTwo != null) { ?>
                        <h2><?php echo $aboutGridHeadingTwo; ?></h2>
                    <?php } ?>

                    <?php if ($aboutGridparagraphTwo != null) { ?>
                        <p class="text-center pt-3 w-75"><?php echo $aboutGridparagraphTwo; ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
</section>