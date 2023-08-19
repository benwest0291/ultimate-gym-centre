<?php

$serviceImageOne = $data["service_one_image"];
$serviceHeadingOne = $data["service_one_heading"];
$serviceParagraphOne = $data["service_one_paragraph"];

$serviceImageTwo = $data["service_two_image"];
$serviceHeadingTwo = $data["service_two_heading"];
$serviceParagraphTwo = $data["service_two_paragraph"];

$serviceImageThree = $data["service_three_image"];
$serviceHeadingThree = $data["service_three_heading"];
$serviceParagraphThree = $data["service_three_paragraph"];

?>

<section class="services">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="services__card mb-4">
                    <?php if ($serviceImageOne != null) { ?>
                        <img class="mb-3" src="<?php echo $serviceImageOne['url']; ?>" alt="<?php echo $serviceImageOne['alt']; ?>">
                    <?php } ?>

                    <?php if ($serviceHeadingOne != null) { ?>
                        <h3 class="text-center"><?php echo $serviceHeadingOne; ?></h3>
                    <?php } ?>

                    <?php if ($serviceParagraphOne != null) { ?>
                        <p class="text-center"><?php echo $serviceParagraphOne; ?></p>
                    <?php } ?>
                </div>
            </div>

            <div class="col-12 col-lg-4 mb-4">
                <div class="services__card">
                    <?php if ($serviceImageTwo != null) { ?>
                        <img class="mb-3" src="<?php echo $serviceImageTwo['url']; ?>" alt="<?php echo $serviceImageTwo['alt']; ?>">
                    <?php } ?>

                    <?php if ($serviceHeadingTwo != null) { ?>
                        <h3 class="text-center"><?php echo $serviceHeadingTwo; ?></h3>
                    <?php } ?>

                    <?php if ($serviceParagraphTwo != null) { ?>
                        <p class="text-center"><?php echo $serviceParagraphTwo; ?></p>
                    <?php } ?>
                </div>
            </div>

            <div class="col-12 col-lg-4 mb-4">
                <div class="services__card">
                    <?php if ($serviceImageThree != null) { ?>
                        <img class="mb-3" src="<?php echo $serviceImageThree['url']; ?>" alt="<?php echo $serviceImageThree['alt']; ?>">
                    <?php } ?>

                    <?php if ($serviceHeadingThree != null) { ?>
                        <h3 class="text-center"><?php echo $serviceHeadingThree; ?></h3>
                    <?php } ?>

                    <?php if ($serviceParagraphThree != null) { ?>
                        <p class="text-center"><?php echo $serviceParagraphThree; ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>