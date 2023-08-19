<?php
$price = get_field("price");
$serviceOne = get_field("service_one");
$serviceTwo = get_field("service_two");
$serviceThree = get_field("service_three");
$serviceFour = get_field("service_four");
$serviceFive = get_field("service_five");
?>

<div class="pricing__plans__card">
    <img class="pricing__plans__card__image" src="<?php the_post_thumbnail_url("post"); ?>" alt="pricing image" />
    <div class="d-flex justify-content-center">
        <div class="pricing__plans__card__container">
            <h5><?php the_title(); ?></h5>
            <h2 class="text-center"><span class="pound">£ </span><?php echo $price; ?><span class="per__month"> p/m</span></h2>
            <ul>
                <?php if ($serviceOne != null) { ?>
                    <li><?php echo $serviceOne; ?></li>
                <?php } ?>

                <?php if ($serviceTwo != null) { ?>
                    <li><?php echo $serviceTwo; ?></li>
                <?php } ?>

                <?php if ($serviceThree != null) { ?>
                    <li><?php echo $serviceThree; ?></li>
                <?php } ?>

                <?php if ($serviceFour != null) { ?>
                    <li><?php echo $serviceFour; ?></li>
                <?php } ?>

                <?php if ($serviceFive != null) { ?>
                    <li><?php echo $serviceFive; ?></li>
                <?php } ?>
            </ul>
            <a title="classes" class="mt-2 article__btn" href="<?php echo site_url('/classes');?>">VIEW CLASSES</a>
        </div>
    </div>
</div>