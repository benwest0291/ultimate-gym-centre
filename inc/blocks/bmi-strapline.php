<?php

$bmiBackGroundImage = $data["bmi_background_image"];
$bmiHeading = $data["bmi_heading"];
$bmiParagraph = $data["bmi_paragraph"];
?>

<section class="bmi__strapline mt-5" style="background-image: url(<?php echo ($bmiBackGroundImage != null ? $bmiBackGroundImage['url'] : ''); ?>);">
    <div class="container">
        <div class="bmi__strapline__info">

            <?php if ($bmiHeading != null) { ?>
                <h2 class="pt-4"><?php echo $bmiHeading; ?></h2>
            <?php } ?>

            <?php if ($bmiParagraph != null) { ?>
                <p><?php echo $bmiParagraph; ?></p>
            <?php } ?>

            <div class="w-50">
                <div class="bmi__strapline__forms">
                    <input class="form-control m-1 p-3" type="text" id="weight" placeholder="Weight / kg">
                    <input class="form-control m-1 p-3" type="text" id="height" placeholder="Height / cm">
                </div>
                <div class="mt-3 bmi__strapline__results">
                    <p>Your BMI is: <span class="red font-weight-bold" id="js-bmi-result"></span></p>
                    <p>Your weight is: <span class="red font-weight-bold" id="js-weight-result"></p>
                </div>
            </div>
            <button class="bmi__btn js-calculate-btn">CALCULATE</button>
        </div>
</section>